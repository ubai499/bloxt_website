@extends('layouts.master')
@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('assets/images/background/11.webp')}}" class="jarallax-img" alt="">
            <div class="container relative z-index-1000">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Discover</div>
                        <h1>Products</h1>
                        <ul class="crumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Products</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="fs-20 fw-600 no-bottom sm-hide">Air Conditioning and Heating Specialists</div>
                    </div>
                </div>
            </div>
            <div class="de-overlay"></div>
        </section>
        <!-- section close -->

        <div class="bg-color relative z-index-1000 mt-40 mb40">
            <div
                class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide">
                <i class="icofont-image fs-36"></i>
            </div>
        </div>

        <section id="section-products">
            <div class="container">
                <div class="row g-4">
                    @forelse($products as $product)
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light relative hover overflow-hidden rounded-1">
                                <div class="absolute w-100 h-100 padding30 bg-white hover-op-1 hover-mt-40 z-2">
                                    <h4>{{ $product->title }}</h4>
                                    <p>{!! Str::limit(strip_tags($product->description), 250, '...') !!}</p>
                                    <p><b>Category:</b> {!! $product->category !!}</p>
                                    <p><b>Product Type:</b> {!! $product->product_type !!}</p>
                                    <a class="btn-main bg-color-2" href="{{ route('product_details', $product->id) }}">View Details</a>
                                </div>
                                <div class="text-center py-3">
                                    <div class="abs end-0 m-4 my-2 d-inline bg-color-2 text-light fw-bold px-3 rounded-20px">
                                        £{!! $product->price !!}</div>
                                    <img src="{{ asset($product->image ?? 'assets/images/products/1.webp') }}" class="w-80" alt="">
                                    <h4>{{ $product->title }}</h4>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No products found.</p>
                        </div>
                    @endforelse
                    <div class="spacer-double"></div>
                </div>
            </div>
        </section>
    </div>
@endsection