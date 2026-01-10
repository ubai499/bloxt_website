@extends('layouts.master')

@section('content')

    @php
        $blogUrl = url()->current();
        $shareText = urlencode($blog->title);
    @endphp


<div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset($blog->image ?? 'assets/images/background/7.webp') }}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Our Blog</div>
                            <h1>{{ $blog->title }}</h1>
                            <ul class="crumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Blog</li>
                            </ul>
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
                    <div class="row gx-5">
                        <div class="col-lg-12">
                            <div class="blog-read">
                                <div class="post-text">
                                   {!! strip_tags($blog->description) !!}
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4">
                            <div class="widget widget-post">
                                <h4>Recent Posts</h4>
                                <ul class="de-bloglist-type-1">
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/pic-blog-1.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Harnessing Technology for Energy-Efficient AC</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/pic-blog-2.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>The Impact of Air Conditioning on Indoor Air Quality</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/pic-blog-3.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Cybersecurity in the Digital Age</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="images/news-thumbnail/pic-blog-4.jpg" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Balancing Progress and Responsibility</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
        </div>
@endsection
