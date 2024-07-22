<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <meta content="width=device-width,initial-scale=1" name=viewport >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile responsive specific Meta's -->

        <!-- SEO specific Meta's -->
        <meta name="copyright" content="" >
        <meta name="description" content="Test Job" >
        <meta name="keywords" content="" >
        <meta name="robots" content="index,follow" >
        <title>Test Job</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
        <!-- Custom css -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" >
        <!-- scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/functions.js') }}"></script>
        <script type="text/javascript"> var APP_URL = {!! json_encode(url('/')) !!}</script>
    </head>

    <body> 
        {{ csrf_field() }}