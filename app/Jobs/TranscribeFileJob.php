<?php

namespace App\Jobs;

use App\Enum\TranscriptStatus;
use App\Models\Transcript;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use OpenAI\Laravel\Facades\OpenAI;

class TranscribeFileJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(protected Transcript $transcript)
    {
    }

    public function handle()
    {
        $this->transcript->update([
            'status' => TranscriptStatus::TRANSCRIBING->value,
        ]);

        try {
            $filePath = storage_path('app/public/' . $this->transcript->hash);
            $transcriptionResults = OpenAI::audio()->transcribe([
                'model' => 'whisper-1',
                'file' => fopen($filePath, 'r'),
                'prompt' => $this->transcript->prompt,
                'temperature' => 0.2,
                'response_format' => 'vtt',
            ]);

            $this->transcript->update([
                'source_language' => $transcriptionResults->language,
                'status' => TranscriptStatus::COMPLETED->value,
                'duration' => $transcriptionResults->duration,
                'transcript' => $transcriptionResults->text,
            ]);
        } catch (\Throwable $e) {
            $this->transcript->update([
                'status' => TranscriptStatus::FAILED->value,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
