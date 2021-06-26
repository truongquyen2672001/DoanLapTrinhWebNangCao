@extends('layout.master')
@section('content_object')
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            @foreach($object_id as $obj)
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <div class="full text_align_center">
                            <img class="img-responsive2" src="{{asset('images/'.$obj->images)}}" alt="#">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <style type="text/css">
                        .infotruyen {
                            list-style: none;
                            padding: 0;
                        }

                        ul.mucluctruyen li a {
                            color: #000;
                            font-size: 16px;
                        }

                        .tomtat-truyen {
                            padding: 0;
                            margin: 20px 0;
                            line-height: 31px;
                            font-size: 17px;
                            box-shadow: 2px 2px 3px #ddd;
                        }
                        </style>


                        <ul class="infotruyen">
                            <input type="hidden" value="Tuyển tập truyện ma Nguyễn Ngọc Ngạn" class="wishlist_title">
                            <input type="hidden"
                                value="">
                            <input type="hidden" value="85" class="wishlist_id">

                            <li>
                                <h3> {{$obj->title}}</h3>
                            </li>
                            <li>Ngày đăng : <span class="text text-primary">{{$obj->created_at}}</span></li>
                            <li>Loại truyện : <span class="text-primary">Truyện đọc</span></li>
                            <li>Tác giả :<span class="text-primary"> {{$obj->author}} </span></li>
                            <li class="text-primary">Số chapter : {{$obj->sochapter}}</li>
                            <li class="text-primary">Số lượt xem : 6k </li>
                                <p>Mô tả : <i>{{$obj->mota}}</i></p>
                                <script>
                                (function(s, u, z, p) {
                                    s.src = u, s.setAttribute('data-zone', z), p.appendChild(s);
                                })(document.createElement('script'), 'https://iclickcdn.com/tag.min.js', 4232051,
                                    document.body || document.documentElement)
                                </script>
                            <li>
                                <a href="{{URL('detail/'.$detail1->id)}}" class="btn btn-primary">Đọc Truyện</a>

                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title_text">Danh Sách Chương</h3>
                            <div class="tagcloud05">
                                <ul>
                                    @foreach($detail as $dtl)
                                    @if($dtl->object_id == $obj->id)
                                    <li><a href="{{URL('detail/'.$dtl->id)}}"><span>{{$dtl->chapter}}</span></a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title_text">Truyện Cùng Thể loại</h3>
                    </div>
                </div>
                <div class="row">
                    @foreach($object1 as $obj1)
                    @if($obj1->type_id == $obj->type_id && $obj1->id != $obj->id)
                    <div class="col-md-3 col-sm-6">
                        <div class="full team_blog_colum " style="margin-bottom:50px" ;>
                            <div class="it_team_img"><a href="{{URL('object/'.$obj1->id)}}"><img class="img-responsive"
                                        src="{{asset('images/'.$obj1->images)}}" alt="#"> </a></div>
                            <div class="team_feature_head">
                                <h4><a href="{{URL('object/'.$obj1->id)}}">{{$obj1->title}}</a></h4>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
            <div class="col-md-3">
                <div class="side_bar">
                    <div class="side_bar_blog">
                        <h4>SEARCH</h4>
                        <div class="side_bar_search">
                            <div class="input-group stylish-input-group">
                                <input class="form-control" placeholder="Search" type="text">
                                <span class="input-group-addon">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="side_bar_blog">
                        <h4>TRUYỆN KINH DỊ</h4>
                        <div class="categary">
                            <ul>
                                @foreach($object1 as $obj)
                                @if($obj1->type_id == $obj->type_id && $obj1->id != $obj->id)
                                <li><a href="{{URL('object/'.$obj->id)}}" style="text-transform:uppercase;"><i
                                            class="fa fa-angle-right"></i>{{$obj->title}}</a>
                                    @endif
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="side_bar_blog">
                        <h4>Thể Loại</h4>
                        <div class="tags">
                        @foreach($type1 as $typ)
                            <ul>
                                <li><a href="{{URL('/type/'.$typ->id)}}">{{$typ->typename}}</a></li>
                            </ul>
                         @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection