<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{ asset('bootstrap-4.3.1/dist/css/bootstrap.min.css')}}" />
    <style media="screen">
      body{
        background: #abe;
      }
      h1{
            font-size: 50px;
            font-family: SansSerif;
            margin: 100px 100px auto;
            color: #6f42c1;
            overflow: hidden;

      }
      h2{
            font-size: 50px;
            font-family: Roboto;
            margin: 100px 350px auto;
            color: #6f42c1;
            overflow: hidden;
        }

    </style>
</head>
<body>

@include('layouts.nav')
@yield('content')
{{--@include('layouts.footer')--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
