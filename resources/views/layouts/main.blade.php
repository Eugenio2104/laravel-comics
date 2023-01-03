<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <title>Laravel Comics | @yield('title')</title>
</head>

<body>

    @include('partials.header')
    {{-- qui vengono iniettati tutti i contenuti delle pagine, quindi importo tutto quello che c'e' nelle pagine dove ho scritto content ci scrivo  --}}
    @yield('content')

    @include('partials.footer')
</body>

</html>
