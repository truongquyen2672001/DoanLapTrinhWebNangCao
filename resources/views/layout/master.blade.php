<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sách Truyện</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>

    <link rel="icon" href="{{asset('images/fevicon/fevicon.png')}}" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- Site css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
    <!-- colors css -->
    <link rel="stylesheet" href="{{asset('css/colors1.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/layers.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/navigation.css')}}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="default_theme" class="it_service">
    @include('layout/header');

    @section('content')
    @yield('content')

    @section('conten_type')
    @yield('conten_type')

    @section('content_object')
    @yield('content_object')

    @section('content_detail')
    @yield('content_detail')



    @include('layout/footer');
</body>

</html>