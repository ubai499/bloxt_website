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
                                        <li class="breadcrumb-item active">Quotes List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Quotes List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Quotes</h4>
                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Quote Type</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($quotes as $quote)
                                            <tr>
                                                <td>{{$quote->full_name }}</td>
                                                <td>{{$quote->address }}</td>
                                                <td>{{$quote->email }}</td>
                                                <td>{{$quote->transaction_type }}</td>
                                                <td>{{ $quote->created_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.quotes.view', $quote->id) }}" class="btn btn-primary btn-sm">View</a>
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
