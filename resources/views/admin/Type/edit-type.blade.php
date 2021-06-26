@extends('admin.layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Type
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            @foreach($edit_type as $key)
                                <form role="form" action="{{route('Type.update',$key->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Name Type</label>
                                       <input type="text" name="type_name" class="form-control" id="exampleInputEmail1" value="{{$key->typename}}" placeholder="{{$key->catname}}">
                                    <label for="exampleInputEmail1">Category_ID</label>
                                       <input type="text" name="category_id" class="form-control" id="exampleInputEmail1" value="{{$key->category_id}}" placeholder="{{$key->namecat}}">
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