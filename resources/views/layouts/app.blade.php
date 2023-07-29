<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full scroll-smooth bg-white antialiased [font-feature-settings:'ss01'] js-focus-visible">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TranscribeAudio – Your Voice to Words!</title>
    <meta
        name="description"
        content="TranscribeAudio is your reliable transcription partner, offering accurate and efficient audio-to-text services. Convert your recordings, interviews, and meetings into written content effortlessly. Experience seamless transcription with our skilled team of experts at TranscribeAudio!">

    <meta property="og:site_name" content="TranscribeAudio">
    <meta property="og:title" content="TranscribeAudio">
    <meta property="og:description" content="Effortless Audio Transcriptions - Unlock Clarity Today!">
    <meta property="og:image" content="{{ asset('og-image.png') }}">
    <meta name="twitter:image" content="{{ asset('og-image.png') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900|lexend:400,500"
          rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="EMEZNIZE" defer></script>
    <!-- / Fathom -->
</head>
<body class="flex h-full flex-col min-h-full">
<header class="py-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="relative z-50 flex justify-between items-center">
            <div class="flex items-center md:gap-x-12">
                <a aria-label="Home" href="/#" class="font-bold text-xl font-display">
                    Laravel Transcribe
                </a>
            </div>
            <div class="flex items-center gap-x-5">
                <a class="group inline-flex space-x-2 items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-blue-600 text-white hover:text-slate-100 hover:bg-blue-500 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600"
                   target="_blank"
                   href="https://github.com/geriadam/laravel-transcribe">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                    <span>Star on GitHub</span>
                </a>
                @if (auth()->user())
                    <a class="group inline-flex space-x-2 items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-red-600 text-white hover:text-slate-100 hover:bg-red-500 active:bg-red-800 active:text-red-100 focus-visible:outline-red-600"
                        href="/logout">
                            <span>Logout</span>
                        </a>
                @endif
            </div>
        </nav>
    </div>
</header>
<main class="bg-slate-50">
    @yield('content')
</main>
<footer>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col items-center border-t border-slate-400/10 py-10 sm:flex-row-reverse sm:justify-between">
            <div class="flex gap-x-6">
                <a class="group" aria-label="LinkedIn" href="https://www.linkedin.com/in/geri-adam-saputra/">
                    <svg class="h-6 w-6 fill-slate-700" fill="none" role="img" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <title>LinkedIn icon</title>
                        <path d="M41.1429 4H6.76786C5.25 4 4 5.33929 4 6.94643V41.1429C4 42.75 5.25 44 6.76786 44H41.1429C42.6607 44 44 42.75 44 41.1429V6.94643C44 5.33929 42.6607 4 41.1429 4ZM16.0536 38.2857H10.1607V19.2679H16.0536V38.2857ZM13.1071 16.5893C11.1429 16.5893 9.625 15.0714 9.625 13.1964C9.625 11.3214 11.1429 9.71429 13.1071 9.71429C14.9821 9.71429 16.5 11.3214 16.5 13.1964C16.5 15.0714 14.9821 16.5893 13.1071 16.5893ZM38.2857 38.2857H32.3036V29C32.3036 26.8571 32.3036 24 29.2679 24C26.1429 24 25.6964 26.4107 25.6964 28.9107V38.2857H19.8036V19.2679H25.4286V21.8571H25.5179C26.3214 20.3393 28.2857 18.7321 31.1429 18.7321C37.125 18.7321 38.2857 22.75 38.2857 27.8393V38.2857Z" fill="currentColor"></path>
                    </svg>
                </a>
                <a class="group" aria-label="GitHub" href="https://github.com/geriadam/laravel-transcribe">
                    <svg aria-hidden="true" class="h-6 w-6 fill-slate-700">
                        <title>Github icon</title>
                        <path
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"></path>
                    </svg>
                </a>
                <a class="group text-sm" href="/imprint">
                    Imprint
                </a>
                <a class="group text-sm" href="/privacy-policy">
                    Privacy Policy
                </a>
            </div>
            <p class="mt-6 text-sm text-slate-500 sm:mt-0">
                Copyright © {{ date('Y') }} Geri. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</body>
</html>