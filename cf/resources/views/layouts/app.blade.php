<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Neos &mdash; Website Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">

      <link rel="stylesheet" href="{{asset('/neos/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/neos/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/neos/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('/neos/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('/neos/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('neos/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('neos/css/animate.css')}}">

        <link rel="stylesheet" href="{{asset('neos/fonts/flaticon/font/flaticon.css')}}">

        <link rel="stylesheet" href="{{asset('neos/css/aos.css')}}">

        <link rel="stylesheet" href="{{asset('neos/css/style.css')}}">


</head>
<body>
    <div id="app">
        @include('header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{asset('neos/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery-ui.js')}}"></script>
  <script src="{{asset('neos/js/popper.min.js')}}"></script>
  <script src="{{asset('neos/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('neos/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery.stellar.min.js')}}"></script>

  <script src="{{asset('neos/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('neos/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('neos/js/aos.js')}}"></script>

  <script src="{{asset('neos/js/main.js')}}"></script>

</html>
