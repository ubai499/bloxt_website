@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Your Company</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                            <li class="breadcrumb-item active">Service List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Service List</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Services</h4>
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Service Name</th>
                                    <th>Service Description</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{ ucwords(str_replace('-', ' ', @$service->service_name)) }}</</td>
                                    <td> {!! Str::words(strip_tags($service->service_description), 10, '...') !!}</td>
                                    <td>
                                        @if($service->service_image)
                                            <img src="{{ asset($service->service_image) }}" alt="{{ $service->service_name }}" width="40" height="40">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $service->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <a href="{{route('admin.service.view',$service->id)}}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{route('admin.service.edit',$service->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{route('admin.service.delete',$service->id)}}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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