<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="{{asset('images/loaders/loader_1.png')}}" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-8">

                    <div class="s130">
                        <form action="{{URL('search')}}" method="post">
                            {{csrf_field()}}
                            <div class="inner-form">
                                <div class="input-field first-wrap">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input id="search" name="timkiem" type="text"
                                        placeholder="Nhập chữ cần phải có dấu @ @" />

                                    <div class="input-field second-wrap">
                                        <button class="btn-search" type="submit">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
                <div class="col-md-4 right_section_header_top">
                    <div class="float-left">
                        <div class="social_icon">
                            <ul class="list-inline">
                                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook"
                                        target="_blank"></a></li>
                                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+"
                                        target="_blank"></a></li>
                                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter"
                                        target="_blank"></a></li>
                                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn"
                                        target="_blank"></a></li>
                                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram"
                                        target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="float-right">
                        <div class="make_appo">
                            <a class="btn white_btn" href="{{URL('login')}}">NOT LOGIN</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <!-- logo start -->
                    <div class="logo"> <a href="it_home.html"><img src="{{asset('images/logos/it_logo.png')}}"
                                alt="logo" /></a> </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">
                                <li> <a class="active" href="{{URL('index')}}">Home</a></li>
                                @foreach($cate as $cat)
                                <li> <a href="it_service.html">{{$cat->catname}}</a>
                                    <ul>
                                        @foreach($type1 as $typ)
                                        @if($typ->category_id == $cat->id)
                                        <li><a href="{{URL('/type/'.$typ->id)}}">{{$typ -> typename}}</a></li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom end -->
</header>
<!-- end header -->