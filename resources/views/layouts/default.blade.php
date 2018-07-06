<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wasin Wachirapusitanun</title>
        <link href="https://fonts.googleapis.com/css?family=Muli|Prompt" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/default-index.css') }}">

        {{-- Custom_Head --}}
        @yield('custom_head')
    </head>
    <body>

        {{-- Navbar --}}
        @include('utils.navbar')

        {{-- Content --}}
        @yield('content')

        <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script>
            var asset_url = "{{ asset('') }}";
        </script>

        {{-- Custom_Script --}}
        @yield('custom_script')
    </body>
</html>