<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.ico') }}" />
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    @vite('resources/js/app.js')
</head>

<body>

    {{-- header --}}
    @include('includes.header')

    {{-- main --}}
    <main>
        @yield('main-content')
    </main>

    {{-- footer top --}}
    @include('includes.footer-top')
    {{-- footer bottom --}}
    @include('includes.footer-bottom')

</body>

</html>
