@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Testimonial Form</h6>
                        <hr/>
                        <form class="row g-3" action="{{ route('testimonials.update',$testimonial->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Client Name</label>
                                <input type="text" name="name" value="{{ $testimonial->name }}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" value="{{ $testimonial->designation }}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control">{{ $testimonial->description }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($testimonial->image) }}" alt="" style="height: 50px;width: 50px">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Testimonial</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

