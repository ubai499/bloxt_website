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
                            <li class="breadcrumb-item"><a href="{{route('admin.services')}}">Services</a></li>
                            <li class="breadcrumb-item active">{{ ucwords(str_replace('-', ' ', @$service->service_name)) }}Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ ucwords(str_replace('-', ' ', @$service->service_name)) }} Details</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="mb-3">{{ ucwords(str_replace('-', ' ', @$service->service_name)) }}</h3>
                                <div class="mb-4">
                                    @if($service->service_image)
                                        <img src="{{ asset($service->service_image) }}" alt="{{ $service->service_name }}" class="img-fluid rounded" style="max-height: 400px; width: auto;">
                                    @else
                                        <p>No image available.</p>
                                    @endif
                                </div>
                                <hr>
                                
                                <h4>Service Description</h4>
                             
                                    {!! $service->service_description !!}
                                
                                <hr>
                                
                                @if($service->faq_details)
                                 
                                
                                        {!! $service->faq_details !!}
                                    
                                    <hr>
                                @endif
                                
                                <h4>SEO Metadata</h4>
                                <div class="mb-4">
                                    <p><strong>Meta Title:</strong> {{ $seo_data['page_title'] ?? 'N/A' }}</p>
                                    <p><strong>Meta Description:</strong> {{ $seo_data['page_description'] ?? 'N/A' }}</p>
                                    <p><strong>Meta Keywords:</strong> {{ $seo_data['page_keywords'] ?? 'N/A' }}</p>
                                    <p><strong>Meta URL:</strong> {{ $seo_data['page_url'] ?? 'N/A' }}</p>
                                    <p><strong>Meta Image:</strong> {{ $seo_data['page_image'] ?? 'N/A' }}</p>
                                </div>

                                <div class="mb-4">
                                    
                                    <p class="text-muted">Created at: <strong>{{ $service->created_at->format('Y-m-d H:i:s') }}</strong></p>
                                </div>
                                <div class="mb-4">
                                <a href="{{ route('admin.services') }}" class="btn btn-secondary">Back to Service List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection