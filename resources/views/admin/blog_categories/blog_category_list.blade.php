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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Blog Category List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Blog Category List</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Blog Categories</h4>
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>description</th>
                                    <th>Created By</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blog_categories as $blog_category)
                                <tr>
                                    <td>{{ ucwords(str_replace('-', ' ', @$blog_category->title)) }}</td>
                                    <td>{{ $blog_category->description }}</td>
                                    <td>{{ ucwords(@$blog_category->user->name) }}</td>
                                    <td>{{ $blog_category->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{ route('admin.blog_category.edit', $blog_category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.blog_category.delete', $blog_category->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection