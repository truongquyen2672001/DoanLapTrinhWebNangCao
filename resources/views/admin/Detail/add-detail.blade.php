@extends('admin.layout.index')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Detail
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{route('Detail.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">

                            <label for="exampleInputEmail1">Chapter</label>
                            <input type="text" name="detail_chapter" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                            <label for="exampleInputEmail1">Content</label>
                            <input type="text" name="detail_content" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                            <label for="exampleInputEmail1">Show</label>
                            <input type="text" name="detail_show" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                            <label for="exampleInputEmail1">object_id</label>
                            <input type="text" name="object_id" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                        </div>

                        <button type="submit" name="add_detail" class="btn btn-info">Add</button>
                    </form>
                </div>

            </div>
        </section>

    </div>

    </section>

</div>
</div>
@endsection