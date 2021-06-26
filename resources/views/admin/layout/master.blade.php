<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboad </title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/main-style.css')}}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{asset('assets/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" />
</head>

<body>
    @include('admin.layout.header');


    @section('content')
    @yield('content')



    @include('admin.layout.footer');
</body>

</html>