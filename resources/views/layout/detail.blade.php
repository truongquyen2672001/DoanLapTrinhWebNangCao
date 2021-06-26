@extends('layout.master')
@section('content_detail')
<div class="section padding_layout_1 blog_grid">
    <div class="container">
        <div class="row">
            @foreach($detail_id as $det)
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">

                <div class="full">
                    <div class="blog_section margin_bottom_0">
                        <div class="blog_feature_cantant">
                            <h2 class="blog_head" style="border-bottom: solid #039ee3 8px;">{{$det->chapter}}</h2>
                            <div class="post_info">
                                <ul>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                                </ul>
                            </div>
                            <div class=""
                                style="background: rgb(255, 255, 255);line-height:40px;font-family:Palatino Linotype; font-size: 25px;">
                                <p style="line-height: 55px;float: left;width: 100%;font-size: 35px;padding: 20px;">{{$det->content}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection