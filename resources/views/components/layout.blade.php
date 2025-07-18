<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $routeName = request()->route()->getName();
    @endphp

    @if (App::environment('local') || App::environment('staging') || App::environment('development'))
        <meta name="robots" content="no-index, no-follow">
    @endif

    <!-- Site Title -->
    <title>{{ $title ?? 'Fallback Title Comes Here' }}</title>
    <meta name="description" content="{{ $description ?? 'Fallback Description Comes Here' }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Fallback Title Comes Here' }}">
    <meta property="og:description" content="{{ $description ?? 'Fallback Description Comes Here' }}">
    <meta property="og:image" content="{{ URL::asset('/assets/LOGO.png') }}">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ parse_url(url('/'), PHP_URL_HOST) }}">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title ?? 'Fallback Title Comes Here' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Fallback Description Comes Here' }}">
    <meta name="twitter:image" content="{{ URL::asset('/assets/LOGO.png') }}">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('favicon.ico') }}">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @endif

    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
    {{ $slot }}
</body>
</html>