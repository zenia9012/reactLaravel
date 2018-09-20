<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="description" content="{{ $test }}">
    <meta name="title" content="{{ $test }}">
    <meta name="keywords" content="{{ $test }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tasksman</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app"></div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>