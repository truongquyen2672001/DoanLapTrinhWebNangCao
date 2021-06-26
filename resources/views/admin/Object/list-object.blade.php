@extends('admin.layout.index')
@section('admin_list')
@if(Session::has('message'))
<h4> {{Session::get('message')}}</h4>
@endif
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                List Object
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{route('Object.store')}}" method="post">
                        {{csrf_field()}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Mo ta</th>
                                    <th>Số Chapter</th>
                                    <th>Images</th>
                                    <th>Author</th>
                                    <th>Show</th>
                                    <th>Type_ID</th>
                                    <th>Quản lí</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($danhmuc as $dm)
                                <tr>
                                    <td>{{$dm->id}}</td>
                                    <td>{{$dm->title}}</td>
                                    <td>{{$dm->mota}}</td>
                                    <td>{{$dm->sochapter}}</td>
                                    <td>{{$dm->images}}</td>
                                    <td>{{$dm->author}}</td>
                                    <td>{{$dm->show}}</td>
                                    <td>{{$dm->type_id}}</td>
                                    <td>
                                        <form action="{{ route('Object.destroy',$dm->id)}}" method="post">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                            <a href="{{route('Object.edit',$dm->id)}}" class="btn btn-primary">EDIT</a>
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