@extends('layouts.master')
@section('content')
    @include('partials.page_title', ['title' => 'Blogs', 'bgColor' => '#b79825'])

    <!--===== BLOG AREA STARTS =======-->
    <div class="blog-v2-section sp1">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-6  col-md-6">
                    <div class="vl-blog-1-item">
                        <div class="vl-blog-1-thumb image-anime">
                            <img src="{{ asset($blog->image ?? 'assets/img/default-blog.png') }}" alt="">
                        </div>
                        <div class="vl-blog-1-content">
                            <div class="vl-blog-meta">
                                <ul>
                                    <li>
                                        <a href="{{route('blog_details', $blog->id)}}"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18"
                                                    stroke="#676B74" stroke-width="2" />
                                                <path
                                                    d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z"
                                                    stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                                <path
                                                    d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z"
                                                    stroke="#676B74" stroke-width="2" />
                                            </svg> {{ $blog->author ?? 'Admin' }}</a>
                                    </li>

                                    <li>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z"
                                                    stroke="#676B74" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417"
                                                    stroke="#676B74" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg> {{ $blog->created_at->format('d M, Y') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="space24"></div>
                            <h4 class="vl-blog-1-title"><a href="{{ route('blog_details', $blog->id)}}">{{ $blog->title }}</a></h4>
                            <div class="space24"></div>
                            <div class="vl-blog-1-icon">
                                <a href="{{ route('blog_details', $blog->id)}}" class="readmore">Learn More <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

    @include('partials.cta_section')
@endsection