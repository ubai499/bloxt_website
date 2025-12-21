@extends('layouts.master')
@section('content')
    @include('partials.page_title', ['title' => 'Our Products', 'bgColor' => '#b79825'])

    <!--===== SERVICE AREA STARTS =======-->
    <div class="service-inner-section sp2">
        <div class="container">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                        <div class="service1-boxarea">
                            <div>
                                <img src="{{ asset($product->image ?? 'assets/upload/default-boiler.png') }}"
                                    alt="{{ $product->name }}">

                            </div>
                            <div class="space30"></div>
                            <div class="content-area">
                                <a href="{{ route('product_details', $product->id) }}" class="title">
                                    {{ $product->name }}
                                </a>
                                <div class="space16"></div>
                                <p>{!! Str::limit(strip_tags($product->description), 150, '...') !!}</p>
                                <p><b>Category:</b> {!! $product->category !!}</p>
                                <p><b>Product Type:</b> {!! $product->product_type !!}</p>
                                <p><b>Price:</b> £{!! $product->price !!}</p>
                                <div class="space24"></div>
                                <a href="{{ route('product_details', $product->id) }}" class="readmore">
                                    Learn More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No products found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== CONTACT AREA STARTS =======-->
    <div class="contact1 sp10">
        <div class="container">
            @include('partials.contact_form')
        </div>
    </div>
    <!--===== CONTACT AREA ENDS =======-->

    @include('partials.cta_section')
@endsection