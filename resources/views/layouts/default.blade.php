<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wasin Wachirapusitanun</title>
        <link rel="icon" type="image/png" href="{{ asset('imgs/logo_Wasin.png') }}" />
        {{-- <link rel="shortcut-icon" href="{{ asset('imgs/logo_Wasin.svg') }}" /> --}}
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Prompt" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/default-index.css') }}">

        {{-- Custom_Head --}}
        @yield('custom_head')
    </head>
    <body>

        {{-- Navbar --}}
        @include('utils.navbar')
    <a href="#banner" class="sf-back-to-top d-md-none"><span class="arrow"><img src="{{ asset('/imgs/arrow-up-solid.svg') }}" alt="" width="100%"></span>Top</a>

        {{-- Content --}}
        @yield('content')

        <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/aos.js') }}"></script>
        <script src="{{ asset('/js/default-all.js') }}"></script>
        <script>
            var asset_url = "{{ asset('') }}";
            AOS.init();
        </script>

        {{-- Custom_Script --}}
        @yield('custom_script')

        @include('utils.footer')
    </body>
</html>