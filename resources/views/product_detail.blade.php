@extends('layouts.master')
@section('content')

    @include('partials.page_title', ['title' => 'Product Details', 'bgColor' => '#b79825'])

    <!--===== Product AREA STARTS =======-->
    <div class="blog-details-section sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="blog-main-details heading1">
                        <div class="img1">
                            <img src="{{ asset($product->image ?? 'assets/upload/default-boiler.png') }}" alt=""
                                width="350">
                        </div>
                        <div class="space32"></div>
                        <h2>{{ $product->title }} - £{!! $product->price !!}</h2>
                        <div class="space16"></div>
                        <p>{!! strip_tags($product->description) !!}</p>
                        <div class="space16"></div>
                        <p>Switching to solar energy isn’t just about environmental responsibility t’s also a smart
                            financial decision. By generating electricity directly from the sun, solar panels can
                            significantly reduce monthly utility bills for both
                            homeowners and businesses. With government incentives, tax credits, and financing option.</p>
                        <p><b>Category:</b> {{ $product->category }}</p>
                        <p><b>Product Type:</b> {{ $product->product_type }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection