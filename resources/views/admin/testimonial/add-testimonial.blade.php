@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Testimonial Form</h6>
                        <hr/>
                        <form class="row g-3" action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Teacher's Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
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
