@extends('admin.layout.index')
@section('admin_list')
@if(Session::has('message'))
<h4> {{Session::get('message')}}</h4>
@endif
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                List Detail
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{route('Detail.store')}}" method="post">
                        {{csrf_field()}}
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Chapter</th>
                                    <th>Content</th>
                                    <th>Show</th>
                                    <th>Object_ID</th>
                                    <th>Quản lí</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($danhmuc as $dm)
                                <tr>
                                    <td>{{$dm->id}}</td>
                                    <td>{{$dm->chapter}}</td>
                                    <td>
                                        <div class="form-group">
                                            <textarea name="object_mota" class="form-control"
                                                rows="5">{{$dm->content}} </textarea>
                                        </div>
                                    </td>
                                    <td>{{$dm->show}}</td>
                                    <td>{{$dm->object_id}}</td>
                                    <td>
                                        <form action="{{ route('Detail.destroy',$dm->id)}}" method="post">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                            <a href=" {{route ('Detail.edit',$dm->id)}}"
                                                class="btn btn-primary">EDIT</a>
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