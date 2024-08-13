@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Teacher's Information</h6>
                        <hr/>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Teacher's Name</th>
                                <th>Image</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->t_name }}</td>
                                    <td>
                                        <img src="{{ asset($teacher->image) }}" alt="" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>{{ $teacher->t_designation }}</td>
                                    <td>{{ $teacher->t_description }}</td>
                                    <td>{{ $teacher->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('teachers.edit',$teacher->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('teachers.destroy',$teacher->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this!!')">Delete</button>
                                        </form>
                                        @if($teacher->status == 1)
                                            <a href="{{ route('teachers.show',$teacher->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                                        @else
                                            <a href="{{ route('teachers.show',$teacher->id) }}" class="btn btn-success btn-sm">Active</a>
                                        @endif

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
