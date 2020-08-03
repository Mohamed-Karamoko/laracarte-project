<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracarte</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome/font-awesome-4.3.0.min.css') }}">
    <!-- Bootstrap minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">

    <style>
        body
        {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
        }

        footer
        {
            margin: 4em 0;
        }
    </style>
</head>
<body>
    @include('layouts/partials/_nav')

    @yield('content')

    @include('layouts/partials/_footer')

<!-- Jquery -->
<script src="{{ asset('/js/jquery.js') }}"></script>
<!-- Bootstrap minified JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>