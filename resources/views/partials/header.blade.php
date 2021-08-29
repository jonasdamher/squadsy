<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="{{ asset('favicon.ico') }}">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    @stack('scripts-head')

</head>

<body class="bg-white">
