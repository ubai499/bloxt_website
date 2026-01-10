@extends('layouts.master')
@section('content')



<div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader">
                <div class="container relative z-index-1000">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Our Product</div>
                            <h1>{{ $product->title }}</h1>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-lg-6">
                            <div class="bg-color-3 relative hover overflow-hidden rounded-20px">
                               <div class="text-center py-3">
                                   <img src="{{ asset($product->image ?? 'assets/upload/default-boiler.png') }}" class="w-80" alt="">
                                   <h4>{{ $product->title }}</h4>
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4 relative z-1000">
                                <div class="col-6">
                                    <div class="bg-color h-100 text-light rounded-10 p-4">
                                        <div class="fw-bold">Category</div>
                                        <div class="fs-14">{{ $product->category }}</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="bg-color h-100 text-light rounded-10 p-4">
                                        <div class="fw-bold">Type</div>
                                        <div class="fs-14">{{ $product->type }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <p>{!! strip_tags($product->description) !!}</p>

                            <div class="spacer-half"></div>

                            <a class="btn-main" href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>            
        </div>
@endsection