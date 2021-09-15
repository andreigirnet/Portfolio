@extends('admin.layout.master')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
                                                                   href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTableone" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>

                    <tbody>


                    @foreach($posts as $post)
                        <tr id="user_row_{{$post->id}}">
                            <th>{{$post->id}}</th>
                            <th>{{$post->title}}</th>
                            <th>{{$post->created_by}}</th>
                            <th>{{$post->created_at}}</th>
                            <th>{{$post->updated_at}}</th>
                            <th>
                                <div style="display: flex; align-items: center">
                                    <a class="border-0 btn-transition btn btn-outline-primary" href="{{route('admin.post.show', [$post->id])}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a class="border-0 btn-transition btn btn-outline-primary" href="{{route('admin.post.edit', [$post->id])}}"><i class="fas fa-edit"></i></a>
                                    <form action="{{route('admin.post.destroy',[$post->id])}}" style="padding: 0 ; margin: 0" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border:none; background: none; color: red" href=""><i class="fas fa-trash-alt" style="margin-left: 5px;"></i></button>
                                    </form>
                                </div>

                                {{--                                {!! Form::open(['method' => 'DELETE', 'onsubmit' => 'return confirm("Are you sure you want to delete this?")', 'route' => ['users.destroy', $post->id],'style'=>'display:inline']) !!}--}}

                                {{--                                {!! Form::hidden('id', $post->id, array('required'=>'required','placeholder' => '','class' => 'form-control')) !!}--}}

                                {{--                                {!! Form::button('<i class="fa fa-trash-alt"></i>', [ 'type' => "submit" , 'class' => 'border-0 btn-transition btn btn-outline-danger' , 'data-toggle'=>"tooltip" ,'data-placement'=>"top" ,'title'=>"", 'data-original-title'=>"Delete Post"]) !!}--}}

                                {{--                                {!! Form::close() !!}--}}
                            </th>


                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
@endsection
@push('head')
    <!-- Custom styles for this page -->
    <link href="{{asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@push('footer')
    <!-- Page level plugins -->
    <script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('admin_assets/js/demo/datatables-demo.js') }}"></script>
@endpush
