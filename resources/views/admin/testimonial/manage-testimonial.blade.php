@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Testimonial</h6>
                        <hr/>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Client Name</th>
                                <th>image</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>
                                        <img src="{{ asset($testimonial->image) }}" alt="" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>{{ $testimonial->designation }}</td>
                                    <td>{{ $testimonial->description }}</td>
                                    <td>{{ $testimonial->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('testimonials.edit',$testimonial->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('testimonials.destroy',$testimonial->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this!!')">Delete</button>
                                        </form>
                                        @if($testimonial->status == 1)
                                            <a href="{{ route('testimonials.show',$testimonial->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                                        @else
                                            <a href="{{ route('testimonials.show',$testimonial->id) }}" class="btn btn-success btn-sm">Active</a>
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
