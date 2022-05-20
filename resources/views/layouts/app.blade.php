<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@section('title') Toyqo - Kids Store Bootstrap 5 Template @show </title>

    <!-- @TODO удалить потом!!!!!   -->
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @section('meta')
        <meta name="description" content="If you need a professional team that specializes in web/mobile development, graphic design, motion design or hardware prototyping, then you have found it! Click on the link to check it!">
        <meta name="keywords" content="rapid prototyping, electronic product development, electronic product design, graphic design, web graphic designer, hire graphic designer, design agency, custom web design, mobile app development company, mobile app design, mobile development, motion design studio, graphic design animation, web application development, ecommerce website development">
    @show
    {{-- @TODO добавить еще данные из /var/www/udt_corpsite_back2018/resources/views/layouts/app.blade.php --}}
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">


    <!--  @TODO  добавить для соц сетей -->
    @section('og-meta')

    @show


    @section('style')
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @show
    <!-- Vendor CSS (Icon Font) -->

    <!--
<link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css" />
<link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.min.css" />
-->


    <!-- Plugins CSS (All Plugins Files) -->


    <!--
<link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
<link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
<link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
<link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
<link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />
-->


    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->






</head>

<body>

<div id="app">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</div>

<!-- Scripts -->
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->

<!--
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
-->


<!-- Plugins JS -->

<!--
<script src="assets/js/plugins/aos.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<script src="assets/js/plugins/nice-select.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/countdown.min.js"></script>
<script src="assets/js/plugins/lightgallery-all.min.js"></script>
-->


<!-- Use the minified version files listed below for better performance and remove the files listed above -->
@section('scripts')

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>

    <!--Main JS-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
@show
</body>

</html>
