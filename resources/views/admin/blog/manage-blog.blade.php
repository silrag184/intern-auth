@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Form</h6>
                        <hr/>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>

                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        <img src="{{ asset($blog->image) }}" alt="" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>{{ $blog->description }}</td>
                                    <td>{{ $blog->categories->category_name }}</td>
                                    <td>
                                        <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('blogs.destroy',$blog->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
