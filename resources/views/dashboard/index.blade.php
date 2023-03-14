<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/line_awesome/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
    <body>
        <input type="checkbox" name="" id="nav-toggle">

        <!-- message -->
        <div class="alert-danger text-center">{{ $response['message'] }}</div>

        <!-- sidebar -->
        @include('layouts.includes.sidebar')

        <!-- main content -->
        <div class="main-content">
            @include('layouts.includes.content')
        </div>


        <!-- scripts -->
        <script src="{{ asset('assets/dashboard/js/jquery-3.6.3.slim.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        @yield('scripts')
    </body>
</html>
