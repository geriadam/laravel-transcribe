# TranscribeAudio

TranscribeAudio is a powerful platform designed to transcribe audio and provide translations for the transcribed content. This project is built using Laravel and OpenAI, combining the capabilities of both technologies to deliver accurate and efficient transcription and translation services.

<img width="1680" alt="image" src="https://github.com/geriadam/laravel-transcribe/assets/29569530/a1aee00b-4237-46ea-8a1f-492fabd545d1">


## Features

- Audio Transcription: TranscribeAudio allows users to upload audio files in various formats, such as MP3, WAV, or others, and automatically converts the speech into text format.
- Language Translation: The platform leverages OpenAI's advanced language processing capabilities to offer translation services for the transcribed content into multiple languages.
- User Authentication: Users can create accounts, log in securely, and access their transcriptions and translations.

## Prerequisites

Before running the TranscribeAudio project, ensure you have the following dependencies installed:

- PHP >= 7.4
- Composer
- Node.js and npm
- MySQL or any other compatible database system
- OpenAI API key (sign up on OpenAI's website to obtain the API key)
- Github ClientId and ClientSecret
- SendStack Token

## Installation

1. Clone the repository:

```bash
git clone https://github.com/geriadam/laravel-transcribe.git
cd laravel-transcribe
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install JavaScript dependencies:

```bash
npm install
```

4. Create a copy of the .env.example file and rename it to .env. Update the necessary configurations, including the database credentials and OpenAI API key.
5. Generate the application key:

```bash
php artisan key:generate
```

6. Setup the database:

```bash
php artisan migrate
```

## Usage
To start using TranscribeAudio, follow these steps:

1. Generate the application key:

```bash
php artisan serve
```
2. Access the application in your web browser at http://localhost:8000.
3. Create a new account or log in if you already have one.
4. Upload your audio file for transcription. Wait for the transcription to complete.
5. Once the transcription is available, you can choose to translate the text into various languages using OpenAI's translation service.
