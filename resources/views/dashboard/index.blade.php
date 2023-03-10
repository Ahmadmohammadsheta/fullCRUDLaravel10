<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landin/gs/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}">
</head>
    <body>
        <input type="checkbox" name="" id="nav-toggle">

        <!-- message -->
    @if (session('message'))
    <div class="alert-danger">{{ session('message') }}</div>
    @endif

        <!-- sidebar -->
        @include('layouts.includes.sidebar')
{{--
        <!-- navbar -->
        @include('layouts.includes.navbar') --}}


        <!-- main content -->
    <div class="main-content">
        @include('layouts.includes.content')
    </div>


        <!-- scripts -->
        <script src="{{ asset('assets/dashboard/js/jquery-3.6.3.slim.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
