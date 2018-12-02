<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('assets/img/apple-icon.png') !!}">
        <link rel="icon" type="image/png" href="{!! asset('assets/img/logo-hmtc.jpg') !!}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>@yield('title')</title>
        @include('partials.css')
        @yield('unique-css')
    </head>
    <body class="section-white" @yield('background-change')>
        @include('layouts.navbar')
        <div class="container">
        @yield('body')
        </div>
        @include('layouts.footer')
        @include('partials.js')
        @yield('unique-js')
    </body>
</html>
