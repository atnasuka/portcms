<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    @php
        $siteSetting = \App\Models\SiteSetting::first();
    @endphp

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $siteSetting->site_name ?? config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if ($siteSetting?->favicon)
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $siteSetting->favicon) }}">
    @endif
</head>
<body class="text-portto-black font-poppins overflow-x-hidden">
    @yield('content')

    @stack('scripts')
</body>
</html>