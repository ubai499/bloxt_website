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
                                        <li class="breadcrumb-item active">Subscriber List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Subscriber List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Subscribers</h4>
                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Email</th>
                                                <th>Verified</th>
                                                <th>Date</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($subscribers as $subscriber)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$subscriber->email}}</td>
                                                <td>{{ $subscriber->verified_at->format('Y-m-d') }}</td>
                                                <td>{{ $subscriber->created_at->format('Y-m-d') }}</td>
                                                
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
