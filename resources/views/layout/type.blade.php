@extends('layout.master')
@section('conten_type')
<div class="section padding_layout_1">
    <div class="container">
        @foreach($type_id as $typ)
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
            @foreach($object1 as $obj)
            @if($obj->type_id == $typ->id)
            <div class="col-md-3">
                <div class="full">
                    <div class="blog_section">
                        <div class="blog_feature_img"> <img class="img-responsive"
                                src="{{asset('images/'.$obj->images)}}" alt="#"> </div>
                        <div class="blog_feature_cantant">
                            <p class="blog_head">{{$obj->title}}</p>
                            <div class="post_info">
                                <ul>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                                </ul>
                            </div>
                            <p> {{$obj->mota}} </p>
                            <div class="bottom_info">
                                <div class="pull-left">
                                    <a class="read_more" href="{{URL('object/'.$obj->id)}}"><button
                                            class="btn btn-danger">Xem truyện</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>

        @endforeach
    </div>
    <!-- end section -->
    <div class="center">
        <ul class="pagination style_1">
            <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li><a href="it_blog.html">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>

        <!-- end section -->
    </div>
    @endsection