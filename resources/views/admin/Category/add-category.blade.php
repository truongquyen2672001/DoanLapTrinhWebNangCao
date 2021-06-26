@extends('admin.layout.index')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Category
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{route('Category.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">

                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="category_name" class="form-control" id="exampleInputEmail1"
                                placeholder="Nhập....">
                        </div>

                        <button type="submit" name="" class="btn btn-info">Add</button>
                    </form>
                </div>

            </div>
        </section>
    </div>

    </section>

</div>
</div>
@endsection