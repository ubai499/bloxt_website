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
                            <li class="breadcrumb-item"><a href="{{route('admin.services')}}">Services</a></li>
                            <li class="breadcrumb-item active">Create Service</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Create Service</h4>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="service_name" class="form-label">Service Name</label>
                                        <input type="text" id="service_name" class="form-control" name="service_name" placeholder="Enter service name" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="service_image" class="mb-0 form-label">Service Image</label>
                                        <p class="text-muted font-14">
                                            Recommended size 800x400 (px).
                                        </p>
                                        <div class="fallback">
                                            <input type="file" name="service_image" />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="service_description" class="form-label">Service Description</label>
                                        <textarea class="form-control" name="service_description" id="service_description" rows="12" placeholder="Enter a brief description of the service.."></textarea>
                                    </div>

                                    {{-- The missing faq_details field is added here --}}
                                    <div class="mb-3">
                                        <label for="faq_details" class="form-label">FAQ Details</label>
                                        <textarea class="form-control" name="faq_details" id="faq_details" rows="6" placeholder="Enter the FAQ content here."></textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <h4>SEO Metadata</h4>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label">Meta Title</label>
                                        <input type="text" id="meta_title" class="form-control" name="seo_meta_data[page_title]" placeholder="Enter meta title" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">Meta Description</label>
                                        <textarea class="form-control" name="seo_meta_data[page_description]" id="meta_description" rows="4" placeholder="Enter meta description"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                        <input type="text" id="meta_keywords" class="form-control" name="seo_meta_data[page_keywords]" placeholder="Enter comma-separated keywords" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="page_url" class="form-label">Meta URL</label>
                                        <input type="text" id="page_url" class="form-control" name="seo_meta_data[page_url]" placeholder="Enter Page URL (optional)" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="page_image" class="form-label">Meta Image</label>
                                        <input type="text" id="page_image" class="form-control" name="seo_meta_data[page_image]" placeholder="Enter page image (optional)" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-1">
                                        <i class="fe-check-circle me-1"></i> Create
                                    </button>
                                    <button type="button" class="btn btn-light waves-effect waves-light m-1">
                                        <i class="fe-x me-1"></i> Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#service_description'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#faq_details'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
