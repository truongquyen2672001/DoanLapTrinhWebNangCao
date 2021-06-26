@extends('admin.layout.index')
@section('admin_list')
@if(Session::has('message'))
<h4> {{Session::get('message')}}</h4>
@endif
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            List Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{route('Type.store')}}" method="post">
                                    {{csrf_field()}}
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <th>Category_ID</th>
                                            <th>Quản lí</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($danhmuc as $dm)
                                        <tr>
                                            <td>{{$dm->id}}</td>
                                            <td>{{$dm->typename}}</td>
                                            <td>{{$dm->category_id}}</td>
                                            <td>
                                            <form action="{{ route('Type.destroy',$dm->id)}}" method ="post">
                                              {{ method_field('DELETE') }}
                                              @csrf
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                                <a href="{{route('Type.edit',$dm->id)}}" class="btn btn-primary">EDIT</a>
                                              </form> 
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                                                    
                            </form>
                             
                            </div>

                        </div>
                        <nav> {!! $danhmuc->render() !!} </nav>
                    </section>

            </div>
           
                </section>

            </div>
        </div>
@endsection