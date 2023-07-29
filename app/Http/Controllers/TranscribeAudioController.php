<?php

namespace App\Http\Controllers;

use App\Jobs\TranscribeFileJob;
use App\Enum\TranscriptStatus;
use App\Models\Transcript;
use App\SendStack;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TranscribeAudioController extends Controller
{
    public function __invoke(Request $request, SendStack $sendStack)
    {
        $this->authorize('create', Transcript::class);

        $request->validate([
            'file' => [
                'required',
            ]
        ]);

        if ($request->get('newsletter')) {
            $sendStack->updateOrSubscribe($request->user()->email, [config('app.name')]);
        }

        $filename = Str::random(40) . '.' . $request->file('file')->getClientOriginalExtension();

        // Store the file locally for OpenAI
        $request->file('file')
            ->storeAs('transcribe', $filename, 'public');

        $transcript = Transcript::create([
            'uuid' => Str::uuid(),
            'user_id' => $request->user()->id,
            'hash' => 'transcribe/' . $filename,
            'prompt' => $request->input('prompt', ''),
            'status' => TranscriptStatus::TRANSCRIBING->value,
        ]);

        TranscribeFileJob::dispatch($transcript);

        return redirect()->action(ShowTranscriptController::class, $transcript->uuid);
    }
}
