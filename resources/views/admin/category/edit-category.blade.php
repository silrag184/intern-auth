@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Edit Category Form</h6>
                        <hr/>
                        <form class="row g-3" action="{{ route('update.category') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="category_name" value="{{ $category->category_name }}" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
