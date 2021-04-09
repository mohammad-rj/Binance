<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/loaders.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  
    
    <!-- custom style -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/layout_mobile.css')}}" media="screen and (max-width: 768px)" type="text/css">
    <link rel="stylesheet" href="{{asset('css/layout_tablet.css')}}" media="screen and (min-width: 769px)" type="text/css">

    <link rel="stylesheet" href="{{asset('css/menu_mobile.css')}}" media="screen and (max-width: 768px)" type="text/css">
    <link rel="stylesheet" href="{{asset('css/menu_tablet.css')}}" media="screen and (min-width: 769px)" type="text/css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
</head>
    @yield('header')

    @include('includes.menu')
    
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
</html>
