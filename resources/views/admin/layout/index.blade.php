@extends('admin.layout.master')
@section('content')
<!--  wrapper -->
<div id="wrapper">

    <!-- navbar side -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- sidebar-collapse -->
        <div class="sidebar-collapse">
            <!-- side-menu -->
            <ul class="nav" id="side-menu">
                <li>
                    <!-- user image section-->
                    <div class="user-section">
                        <div class="user-section-inner">
                            <img src="{{('assets/img/user.jpg')}}" alt="">
                        </div>
                        <div class="user-info">
                            <div>Jonny <strong>Deen</strong></div>
                            <div class="user-text-online">
                                <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                            </div>
                        </div>
                    </div>
                    <!--end user image section-->
                </li>
                <li class="sidebar-search">
                    <!-- search section-->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!--end search section-->
                </li>
                <li class="selected">
                    <a href="{{URL('index')}}"><i class="fa fa-dashboard fa-fw"></i>Trang Chủ</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Categories<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level" style="text-align:center">
                        <li>
                            <a href="{{route('Category.create')}}">Add categories</a>
                        </li>
                        <li>
                            <a href="{{route('Category.index')}}">List categories</a>
                        </li>
                    </ul>
                    <!-- second-level-items -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Types<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level" style="text-align:center">
                        <li>
                            <a href="{{route('Type.create')}}">Add Type</a>
                        </li>
                        <li>
                            <a href="{{route('Type.index')}}">List Type</a>
                        </li>
                    </ul>
                    <!-- second-level-items -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Object<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level" style="text-align:center">
                        <li>
                            <a href="{{route('Object.create')}}">Add object</a>
                        </li>
                        <li>
                            <a href="{{route('Object.index')}}">List object</a>
                        </li>
                    </ul>
                    <!-- second-level-items -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Detail<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level" style="text-align:center">
                        <li>
                            <a href="{{route('Detail.create')}}">Add detail</a>
                        </li>
                        <li>
                            <a href="{{route('Detail.index')}}">List detail</a>
                        </li>
                    </ul>
                    <!-- second-level-items -->
                </li>
            </ul>
            <!-- end side-menu -->
        </div>
        <!-- end sidebar-collapse -->
    </nav>
    <!-- end navbar side -->
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">
            <!-- Welcome -->
            <div class="col-lg-12">
                <div class="alert alert-info">
                    <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
                    <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
                </div>
            </div>
            <!--end  Welcome -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                @yield('admin_content');
                @yield('admin_list')

            </div>

        </div>
    </div>





</div>
<!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="{{asset('assets/plugins/jquery-1.10.2.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('assets/plugins/pace/pace.js')}}"></script>
<script src="{{asset('assets/scripts/siminta.js')}}"></script>
<!-- Page-Level Plugin Scripts-->
<script src="{{asset('assets/plugins/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris/morris.js')}}"></script>
<script src="{{asset('assets/scripts/dashboard-demo.js')}}"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function ()
    $('#myTable').DataTable();
} );
</script>
<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<script type="text/javascript">
   CKEDITOR.replace('noidung_chapter')
</script>
@endsection