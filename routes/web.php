<?php

use App\Http\Controllers\GitHubLoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewTranscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('privacy-policy', function () {
    return view('static.privacy');
});
Route::get('imprint', function () {
    return view('static.imprint');
});

Route::get('logout', LogoutController::class);
Route::get('login', [GitHubLoginController::class, 'redirect'])->name('login');
Route::get('auth/callback', [GitHubLoginController::class, 'callback']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('transcribe', NewTranscriptionController::class);
});
