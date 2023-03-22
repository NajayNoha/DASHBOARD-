<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href={{asset("images/favicon.png")}}>
    <link rel="stylesheet" href={{asset("vendor/owl-carousel/css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href={{asset("vendor/owl-carousel/css/owl.theme.default.min.css")}}>
    <link href={{asset("vendor/jqvmap/css/jqvmap.min.css")}} rel="stylesheet">
    <link href={{asset("css/style.css")}} rel="stylesheet">
    <link href={{asset("css/style-dashborad.css")}} rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    {{-- DATA TABLE  --}}
    <link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet')}}">
    <link href="{{asset('css/style.css" rel="stylesheet')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
