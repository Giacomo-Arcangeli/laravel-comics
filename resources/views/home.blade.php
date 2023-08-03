<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.ico') }}" />
    <title>DC Comics</title>

    @vite('resources/js/app.js')

</head>

<body>

    {{-- header --}}
    @include('includes.header')


    {{-- footer top --}}
    @include('includes.footer-top')
    {{-- footer bottom --}}
    @include('includes.footer-bottom')

</body>

</html>
