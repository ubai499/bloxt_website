@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bloxt Technologies</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.blog_categories') }}">Blog Categories</a></li>
                            <li class="breadcrumb-item active">Edit Blog Category</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Blog Category</h4>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.blog_category.update', $blog_category->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- This tells Laravel to treat the request as a PUT for updates --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="category_title" class="form-label">Category Title</label>
                                        <input type="text" id="category_title" class="form-control" name="title" 
                                               value="{{ old('title', $blog_category->title) }}" {{-- Pre-populate with existing title --}}
                                               placeholder="Enter category title" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Category Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="5" 
                                                  placeholder="Enter a brief description for the category...">{{ old('description', $blog_category->description) }}</textarea> {{-- Pre-populate with existing description --}}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-1">
                                        <i class="fe-check-circle me-1"></i> Update Category
                                    </button>
                                    <a href="{{ route('admin.blog_categories') }}" class="btn btn-light waves-effect waves-light m-1">
                                        <i class="fe-x me-1"></i> Cancel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
