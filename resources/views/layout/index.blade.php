@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="logo-2">
                <div class="logo-con">
                    <b>Thông báo !</b>
                </div>

                <div class="thongbao">
                    <marquee direction="left"><b class="item-222">- Hướng dẫn sử dụng thang máy khách sạn ở Belgrade:
                            "Để làm chuyển động cabin thang máy, ấn nút tầng muốn đến. Nếu cabin có nhiều người, mỗi
                            người nên ấn một số của tầng cần lên hay xuống. Việc chuyển động sau đó sẽ đi theo thứ tự
                            abc bằng cách tuân theo trình tự quốc gia".

                            - Biển hiệu tại Rừng Đen của Đức được ghi như sau: "Tuyệt đối cấm cắm trại trong Rừng Đen
                            đối với nhóm người khác giới, ví dụ đàn ông và đàn bà ở chung một lều trừ phi đã kết hôn".

                            - Vườn thú Budapest thông báo: "Làm ơn không cho động vật ăn. Nếu quý khách có bất cứ loại
                            thức ăn gì phù hợp, hãy đưa cho người trực gác sở thú".

                            - Hiệu giặt là ở Rome quảng cáo cho dịch vụ của mình: "Thưa các quý bà, hãy để quần áo ở đây
                            và tận hưởng một buổi chiều thú vị".

                            - Còn để thu hút khách du lịch cưỡi lừa ở Thái Lan, biển hiệu lại ghi: "Bạn thích cưỡi trên
                            một thứ phát ra tiếng "Bíp" như thế nào"?</b><img src="{{asset('images/icon.jpg')}}"
                            width="20px"> <img src="{{asset('images/icon.jpg')}}" width="20px"> <img
                            src="{{asset('images/icon.jpg')}}" width="20px"> </marquee>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" style="margin-top:55px;" data-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('images/anh1.jpg')}}" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="{{asset('images/anh2.jpg')}}" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="{{asset('images/anh3.jpg')}}" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="section padding_layout_1">
    <div class="container">
        @foreach($type as $typ)
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>{{$typ->typename}}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($object as $obj)
     
            <div class="col-md-2">
                <div class="product_list">
                    <div class="product_img"> <img class="img-responsive" src="{{asset('images/'.$obj->images)}}"
                            alt=""> </div>
                    <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="it_shop_detail.html">{{$obj->title}}</a></h4>
                        </div>
                        <div class="starratin">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                    aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                    class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                    aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <a href="{{URL('object/'.$obj->id)}}"><span class="btn btn-danger">Xem truyện</span></a>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
        @endforeach
    </div>
</div>
<!-- end section -->

<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <ul class="brand_list">
                        <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
                        <li><img src="images/it_service/brand_icon5.png" alt="#" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div
                        class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search"
                                    value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to
                                    search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
@endsection