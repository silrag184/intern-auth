@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Categories</h6>
                        <hr/>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>

                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <a href="{{ route('edit.category',['id' =>$category->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('delete.category',['id'=>$category->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
