@props(['pageTitle'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>

    <!-- GLOBAL CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- CUSTOM CSS -->
    @stack('styles')

    <!-- FEATHER ICON -->
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>

    <x-header pageTitle="{{$pageTitle}}"></x-header>

    <main>
        {{$slot}}
    </main>


    <script>
        feather.replace();
    </script>


    <script src="{{asset('js/main.js')}}"></script>
    @stack('scripts')

</body>

</html>