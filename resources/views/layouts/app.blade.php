<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users Registration App</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />

</head>

<body class="app sidebar-mini rtl">
    @Auth
    @include('layouts/header')
    @include('layouts/sidebar')
    @endauth
    @yield('content')
</body>

</html>
