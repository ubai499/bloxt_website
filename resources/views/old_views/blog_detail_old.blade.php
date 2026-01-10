@extends('layouts.master')

@section('content')

    @include('partials.page_title', [
        'title' => $blog->title,
        'bgColor' => '#b79825'
    ])

    @php
        $blogUrl = url()->current();
        $shareText = urlencode($blog->title);
    @endphp

    <div class="blog-details-section sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="blog-main-details heading1">

                        {{-- Blog Image --}}
                        <div class="img1">
                            <img src="{{ asset($blog->image ?? 'assets/img/all-images/blog/blog-img31.png') }}"
                                 alt="{{ $blog->title }}">
                        </div>

                        <div class="space32"></div>

                        {{-- Author / Meta --}}
                        <ul class="list-author">
                            <li>
                                <a href="#">
                                    {{ $blog->author->name ?? 'Admin' }}
                                    <span> | </span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    {{ $blog->created_at->format('d F Y') }}
                                </a>
                            </li>
                        </ul>

                        <div class="space24"></div>

                        {{-- Blog Content --}}
                        <div class="blog-content">
                            {!! $blog->description !!}
                        </div>

                        <div class="space32"></div>

                        {{-- Share Section --}}
                        <div class="tags-social">
                            <div class="social">
                                <ul>
                                    <li>Share:</li>

                                    {{-- Facebook --}}
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $blogUrl }}"
                                           target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    {{-- WhatsApp --}}
                                    <li>
                                        <a href="https://wa.me/?text={{ $shareText }}%20{{ $blogUrl }}"
                                           target="_blank">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>

                                    {{-- Twitter / X --}}
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{ $shareText }}&url={{ $blogUrl }}"
                                           target="_blank">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>

                                    {{-- LinkedIn --}}
                                    <li>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $blogUrl }}"
                                           target="_blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.cta_section')

@endsection
