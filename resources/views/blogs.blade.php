@extends('layouts.master')
@section('content')
    <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('assets/images/background/7.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Our Blog</div>
                            <h1>Stay Up to Date</h1>
                            <ul class="crumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Blog</li>
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
                <div class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide" alt="">
                    <i class="icofont-newspaper fs-36"></i>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row g-4">
                         @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 mb10">
                            <div class="bloglist rounded-20px">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="d-tagline">
                                                <span>{{ $blog->created_at->format('d M, Y') }}</span>
                                            </div>
                                            <img alt="" src="{{ asset($blog->image ?? 'assets/images/news/1.webp') }}" class="lazy">
                                        </div>
                                        <div class="post-text padding40 pt-2 h-100">
                                            <h4><a href="{{ route('blog_details', $blog->id)}}">{{ $blog->title }}</a></h4>
                                            <p>{!! Str::limit(strip_tags($blog->description), 250, '...') !!}</p>
                                            <a class="btn-main btn-light-trans mt-3" href="{{ route('blog_details', $blog->id)}}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

@endsection