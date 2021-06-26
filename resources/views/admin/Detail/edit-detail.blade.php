@extends('admin.layout.index')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Object
            </header>
            <div class="panel-body">
                <div class="position-center">
                    @foreach($edit_detail as $key)
                    <form role="form" action="{{route('Detail.update',$key->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group">

                            <label for="exampleInputEmail1">Chapter</label>
                            <input type="text" name="detail_chapter" class="form-control" id="exampleInputEmail1"
                                value="{{$key->chapter}}" placeholder="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content</label>
                                <textarea name="detail_content" id="noidung_chapter" class="form-control" rows="10">{{$key->content}} </textarea>
                            </div>
                            <label for="exampleInputEmail1">Show</label>
                            <input type="text" name="detail_show" class="form-control" id="exampleInputEmail1"
                                value="{{$key->show}}" placeholder="">
                            <label for="exampleInputEmail1">Object_ID</label>
                            <input type="text" name="object_id" class="form-control" id="exampleInputEmail1"
                                value="{{$key->object_id}}" placeholder="">
                        </div>

                        <button type="submit" name="" class="btn btn-info">Update</button>
                    </form>
                    @endforeach
                </div>

            </div>
        </section>
    </div>

    </section>

</div>
</div>
@endsection