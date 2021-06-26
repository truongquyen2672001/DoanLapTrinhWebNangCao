@extends('admin.layout.index')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Object
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{route('Object.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">

                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="object_name" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Mo ta</label>
                                <textarea name="object_mota" id="noidung_chapter" class="form-control" rows="5"> </textarea>
                            </div>
                            <label for="exampleInputEmail1">Số Chapter</label>
                            <input type="text" name="object_sochapter" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                            <label for="exampleInputEmail1">images</label>
                            <input type="text" name="object_images" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                            <label for="exampleInputEmail1">Author</label>
                            <input type="text" name="object_author" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                            <label for="exampleInputEmail1">Show</label>
                            <input type="text" name="anhien" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                            <label for="exampleInputEmail1">Type_id</label>
                            <input type="text" name="object_type_id" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                        </div>

                        <button type="submit" name="add_object" class="btn btn-info">Add</button>
                    </form>
                </div>

            </div>
        </section>

    </div>

    </section>

</div>
</div>
@endsection