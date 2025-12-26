@extends('layouts.dashboard')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bloxt</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Blog List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Blog List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Blogs</h4>
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Blog Category</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{ ucwords(str_replace('-', ' ', @$blog->title)) }}</td>
                                            <td>{!! Str::words($blog->description, 10, '...') !!}</td>
                                            <td><img src="{{asset($blog->image)}}" alt="" width="40" height="40"></td>
                                            <td>{{ ucwords(str_replace('-', ' ', @$blog->blog_categories->title)) }}</td>
                                            <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <a href="{{ route('customer.blog.view', $blog->id) }}"
                                                    class="btn btn-primary btn-sm">View</a>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

        </div>
        <!-- container -->

    </div>
    <!-- content -->

@endsection