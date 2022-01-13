<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ghana Based Homes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.header')
        <main>
            @include('messages.messages')
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')

    <script src="{{ asset('client/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('client/js/mail-script.js') }}"></script>
    <script src="{{ asset('client/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('client/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('client/js/mail-script.js') }}"></script>
    <script src="{{ asset('client/js/stellar.js') }}"></script>
    <script src="{{ asset('client/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('client/js/custom.js') }}"></script>
</body>
</html>
