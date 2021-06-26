@extends('layout.master')
@section('content')
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            @foreach($search as $obj)
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
    </div>
</div>
@endsection