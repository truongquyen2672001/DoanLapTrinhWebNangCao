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
                    @foreach($edit_object as $key)
                    <form role="form" action="{{route('Object.update',$key->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group">

                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="object_title" class="form-control" id="exampleInputEmail1"
                                value="{{$key->title}}" placeholder="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mo ta</label>
                                <textarea name="object_mota" id="noidung_chapter" class="form-control" rows="5">{{$key->mota}} </textarea>
                            </div>
                            <label for="exampleInputEmail1">Số Chapter</label>
                            <input type="text" name="object_chapter" class="form-control" id="exampleInputEmail1"
                                value="{{$key->sochapter}}" placeholder="">
                            <label for="exampleInputEmail1">images</label>
                            <input type="text" name="object_images" class="form-control" id="exampleInputEmail1"
                                value="{{$key->images}}" placeholder="">
                            <label for="exampleInputEmail1">Author</label>
                            <input type="text" name="object_author" class="form-control" id="exampleInputEmail1"
                                value="{{$key->author}}" placeholder="">
                            <label for="exampleInputEmail1">Show</label>
                            <input type="text" name="object_show" class="form-control" id="exampleInputEmail1"
                                value="{{$key->show}}" placeholder="">
                            <label for="exampleInputEmail1">Type_ID</label>
                            <input type="text" name="type_id" class="form-control" id="exampleInputEmail1"
                                value="{{$key->type_id}}" placeholder="">
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