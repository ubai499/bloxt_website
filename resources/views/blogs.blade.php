@extends('layouts.master')
@section('content')
<!--===== HERO AREA STARTS =======-->
<div class="inner-header-section" style="background-image: url({{asset('assets/img/all-images/bg/hero-bg1.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-heading-area">
                    <h2>Our Blog</h2>
                    <div class="space18"></div>
                    <div class="btn-area1">
                        <a href="{{ url('/')}}">Home <i class="fa-solid fa-angle-right"></i> <span>Our Blog</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-img1">
        <!-- <div class="img1">
            <img src="{{asset('assets/img/elements/elements18.png')}}" alt="">
        </div>
        <div class="img2">
            <img src="{{asset('assets/img/elements/elements19.png')}}" alt="">
        </div> -->
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog-v2-section sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{asset('assets/img/all-images/blog/blog-img1.png')}}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg> Iva Ryan</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">Innovations in Solar Technology</a></h4>
                        <div class="space16"></div>
                        <p>The solar industry is advancing at a rapid pace, bringing us exciting innovations like solar shingles, AI energy optimization, and more efficient photovoltaic cells. Discover how these technologies.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{asset('assets/img/all-images/blog/blog-img2.png')}}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg> Eddie Lake</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">Community Solar Programs</a></h4>
                        <div class="space16"></div>
                        <p>Community solar programs are making renewable energy accessible to people who can't install their own panels. This blog explains how these programs work and why they're a game-changer for clean.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{asset('assets/img/all-images/blog/blog-img26.png')}}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg>Autumn Phillips</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">How to Maintain Your Solar Panels</a></h4>
                        <div class="space16"></div>
                        <p>Solar panels are relatively low maintenance, but there are still steps you can take to ensure they operate efficiently for years to come. This guide provides tips on cleaning, inspections, and maximizing.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{asset('assets/img/all-images/blog/blog-img3.png')}}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg>Autumn Phillips</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">Solar Installation What to Expect</a></h4>
                        <div class="space16"></div>
                        <p>Curious about what the solar installation process entails? In this blog, we walk you through each step—from the initial consultation to final implementation so you know exactly what to expect when making.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{asset('assets/img/all-images/blog/blog-img27.png')}}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg>Autumn Phillips</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">How to Maintain Your Solar Panels</a></h4>
                        <div class="space16"></div>
                        <p>Solar panels are relatively low maintenance, but there are still steps you can take to ensure they operate efficiently for years to come. This guide provides tips on cleaning, inspections, and maximizing.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{asset('assets/img/all-images/blog/blog-img28.png')}}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg>Autumn Phillips</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">Solar Installation What to Expect</a></h4>
                        <div class="space16"></div>
                        <p>Curious about what the solar installation process entails? In this blog, we walk you through each step—from the initial consultation to final implementation so you know exactly what to expect when making.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{ asset('assets/img/all-images/blog/blog-img29.png') }}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg>Autumn Phillips</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">How to Maintain Your Solar Panels</a></h4>
                        <div class="space16"></div>
                        <p>Solar panels are relatively low maintenance, but there are still steps you can take to ensure they operate efficiently for years to come. This guide provides tips on cleaning, inspections, and maximizing.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{ asset('assets/img/all-images/blog/blog-img30.png') }}" alt="">

                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg>Autumn Phillips</a>
                                </li>

                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M7 2V5M14 2V5" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.3333 4H4.66667C3.74619 4 3 4.74619 3 5.66667V17.3333C3 18.2538 3.74619 19 4.66667 19H16.3333C17.2538 19 18 18.2538 18 17.3333V5.66667C18 4.74619 17.2538 4 16.3333 4Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 9H18M7.16667 12.5H7.175M10.5 12.5H10.5083M13.8333 12.5H13.8417M7.16667 16H7.175M10.5 16H10.5083M13.8333 16H13.8417" stroke="#676B74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> 10 Sep, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <h4 class="vl-blog-1-title"><a href="{{ route('blog')}}">Solar Installation What to Expect</a></h4>
                        <div class="space16"></div>
                        <p>Curious about what the solar installation process entails? In this blog, we walk you through each step—from the initial consultation to final implementation so you know exactly what to expect when making.</p>
                        <div class="space24"></div>
                        <div class="vl-blog-1-icon">
                            <a href="{{ route('blog')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="space30"></div>
                <div class="pagination-area">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta1 sp10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content-bg" style="background-image: url(assets/img/all-images/cta/cta-img1.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="heading1 text-center">
                                <h2>Reliable Boiler Care – Warmth You Can Trust.</h2>
                                <div class="space32"></div>
                                <form>
                                    <input type="text" placeholder="Enter Your Email">
                                    <button type="submit" class="vl-btn1">Subscribe <i class="fa-solid fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CTA AREA ENDS =======-->
@endsection
