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
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Bloxt</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Dashboard</a>
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Total Blogs</h4>
                            <h2 class="text-primary my-3 text-center">
                                <span data-plugin="counterup">{{ $blogs_count }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container1">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container1"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Total Products</h4>
                            <h2 class="text-primary my-3 text-center">
                                <span data-plugin="counterup">{{ $products_count }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container2">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Total Quotations</h4>
                            <h2 class="text-primary my-3 text-center">
                                <span data-plugin="counterup">{{$quotations_count}}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card" id="tooltip-container3">
                        <div class="card-body">
                            <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container3"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                            <h4 class="mt-0 font-16">Total Subscribers</h4>
                            <h2 class="text-primary my-3 text-center">
                                <span data-plugin="counterup">{{ $subscribers_count }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>
    <!-- content -->
@endsection
