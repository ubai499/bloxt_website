@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bloxt</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('customer.blogs') }}">Blogs</a></li>
                            <li class="breadcrumb-item active">View Blog</li>
                        </ol>
                    </div>
                    <h4 class="page-title">View Blog</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8 mx-auto">
                                <h2 class="mb-4">{{ ucwords(str_replace('-', ' ', @$blog->title)) }}</h2>

                                <div class="mb-4">
                                    @if($blog->image)
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded" style="max-height: 400px; display: block; margin-left: auto; margin-right: auto;">
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <h5>Blog Overview</h5>
                                    <p>{!! $blog->description !!}</p>
                                </div>

                                <div class="mb-4">
                                    <h5>Blog Category</h5>
                                    <p>{{ ucwords(str_replace('-', ' ', @$blog->title)) ?? 'N/A' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <a href="{{ route('customer.blogs') }}" class="btn btn-light waves-effect waves-light m-1">
                                    <i class="fe-list me-1"></i> Back to List
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
