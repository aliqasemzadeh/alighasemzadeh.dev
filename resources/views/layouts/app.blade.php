<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('website.direction') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? '' }}{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @if(\Illuminate\Support\Facades\App::getLocale() == 'fa')
            <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v28.0.0/dist/font-face.css" rel="stylesheet" type="text/css" />
            <style>
                body, * {
                    font-family: Vazir, Tahoma;
                }
            </style>
        @endif

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <header class="bg-indigo-600">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
                <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
                    <div class="flex items-center">
                        <a href="{{ route('index') }}">
                            <span class="sr-only">{{ config('app.name') }}</span>
                            <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="">
                        </a>
                        <div class="hidden ml-10 space-x-8 lg:block">
                            @foreach($pages as $page)
                            <a href="{{ route('page', [ $page->slug]) }}" class="text-base font-medium text-white hover:text-indigo-50" key="Solutions">
                                {{ $page->title }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="ml-10 space-x-4">
                        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            <a href="{{ \LaravelLocalization::getLocalizedURL('fa', null, [], true) }}" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">FA</a>
                            <a href="{{ \LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">EN</a>
                        @else
                            <a href="{{ \LaravelLocalization::getLocalizedURL('fa', null, [], true) }}" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">FA</a>
                            <a href="{{ \LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">EN</a>
                        @endif
                    </div>
                </div>
                <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
                    @foreach($pages as $page)
                        <a href="{{ route('page', [$page->slug]) }}" class="text-base font-medium text-white hover:text-indigo-50" key="{{ $page->slug }}">
                            {{ $page->title }}
                        </a>
                    @endforeach
                </div>
            </nav>
        </header>
        <main class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8 my-5">
            {{ $slot }}
        </main>
    </body>
</html>
