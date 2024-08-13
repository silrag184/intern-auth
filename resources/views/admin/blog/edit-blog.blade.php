@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Form</h6>
                        <hr/>
                        <form class="row g-3" action="{{ route('blogs.update',$blogs->id) }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-12">
                                <label class="form-label">Category Name</label>

                                <select name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $blogs->category_id == $category->id ? 'selected':'' }}>{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" value="{{ $blogs->title }}" name="title" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" value="{{ $blogs->slug }}" name="slug" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" value="{{ $blogs->author_name }}" name="author_name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control">{{ $blogs->description }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($blogs->image) }}" alt="" style="height: 50px; width: 50px;">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
