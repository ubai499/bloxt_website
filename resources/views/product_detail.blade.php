@extends('layouts.master')
@section('content')


    <!--===== HERO AREA STARTS =======-->
    <div class="inner-header-section" style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-heading-area">
                        <h2>Product Details</h2>
                        <div class="space18"></div>
                        <div class="btn-area1">
                            <a href="#">Home <i class="fa-solid fa-angle-right"></i> Product <i class="fa-solid fa-angle-right"></i> <span>Product Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-img1">
            <div class="img1">
                <img src="assets/img/elements/elements18.png" alt="">
            </div>
            <div class="img2">
                <img src="assets/img/elements/elements19.png" alt="">
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== Product AREA STARTS =======-->
    <div class="blog-details-section sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="blog-main-details heading1">
                        <div class="img1">
                            <img src="{{ asset($product->image ?? 'assets/upload/default-boiler.png') }}" alt="" width="350">
                        </div>
                        <div class="space32"></div>
                        <h2>{{ $product->title }} - £{!! $product->price !!}</h2>
                        <div class="space16"></div>
                         <p>{!! strip_tags($product->description) !!}</p>
                        <div class="space16"></div>
                        <p>Switching to solar energy isn’t just about environmental responsibility t’s also a smart financial decision. By generating electricity directly from the sun, solar panels can significantly reduce monthly utility bills for both
                            homeowners and businesses. With government incentives, tax credits, and financing option.</p>
                        <p><b>Category:</b> {{ $product->category }}</p>
                        <p><b>Product Type:</b> {{ $product->product_type }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
