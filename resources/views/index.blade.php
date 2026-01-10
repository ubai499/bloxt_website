@extends('layouts.master')
@section('content')
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section class="bg-light jarallax">
            <img src="{{ asset('assets/images/background/19.webp') }}" class="jarallax-img" alt="">
            <div class="relative z-2">
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center justify-content-center">

                        <div class="spacer-single"></div>

                        <div class="col-lg-12 text-center">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".2s">CoolAir X1000</div>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">Stay Cool, Stay Comfortable</h1>
                            <p class="col-lg-6 offset-lg-3 fw-600 wow fadeInUp" data-wow-delay=".6s">Engineered for modern
                                living, it combines powerful performance, energy efficiency, and smart technology.</p>
                            <div class="wow fadeInUp" data-wow-delay=".8s">
                                <a class="btn-main" href="#section-intro">Learn More</a>&nbsp;&nbsp;
                                <a class="btn-main bg-color-2" href="#">Buy Now</a>
                            </div>
                        </div>

                        <div class="spacer-single"></div>


                        <div class="col-lg-8">
                            <img src="{{ asset('assets/images/misc/15.webp') }}" class="w-100 wow scaleIn" data-wow-delay="1s" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="section-intro" class="p-0 section-dark">
            <div class="container-fluid">
                <div class="row g-0">

                    <div class="col-md-6">
                        <div class="relative overflow-hidden bg-color">
                            <div class="abs p-5 text-light">01</div>
                            <div class="row g-0 align-items-center">
                                <div class="col-sm-6">
                                    <div class="relative text-light p-5 h-100">
                                        <div class="relative">
                                            <h4>Energy Saving</h4>
                                            <p class="mb-0">Designed to consume minimal power, reducing your electricity
                                                bills without compromising performance.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('assets/images/misc/s1.webp') }}" class="w-100 wow scaleIn" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="relative overflow-hidden bg-color">
                            <div class="abs p-5 text-light">02</div>
                            <div class="row g-0 align-items-center">
                                <div class="col-sm-6">
                                    <div class="relative text-light p-5 h-100">
                                        <div class="relative">
                                            <h4>Quiet Operation</h4>
                                            <p class="mb-0">Operates at a low noise level, ensuring a peaceful environment
                                                for work or rest.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('assets/images/misc/s2.webp') }}" class="w-100 wow scaleIn" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="relative overflow-hidden bg-color-2">
                            <div class="abs end-0 p-5 text-light">03</div>
                            <div class="row g-0 align-items-center">
                                <div class="col-sm-6">
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('assets/images/misc/s3.webp') }}" class="w-100 wow scaleIn" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="relative text-light p-5 h-100">
                                        <div class="relative">
                                            <h4>Smart Wi-Fi</h4>
                                            <p class="mb-0">Allows users to control the AC remotely using a smartphone app
                                                or voice assistants like Alexa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="relative overflow-hidden bg-color-2">
                            <div class="abs end-0 p-5 text-light">04</div>
                            <div class="row g-0 align-items-center">
                                <div class="col-sm-6">
                                    <div class="relative overflow-hidden">
                                        <img src="{{ asset('assets/images/misc/s4.webp')}}" class="w-100 wow scaleIn" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="relative text-light p-5 h-100">
                                        <div class="relative">
                                            <h4>Turbo Cooling</h4>
                                            <p class="mb-0">Instant cooling by operating the AC at maximum capacity for a
                                                short period, Cools the room quickly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-color-3">
            <div class="relative z-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Why Choose CoolAir</h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 offset-lg-1 wow fadeInUp">
                            <div>
                                <i class="bg-color text-light fs-48 p-2 absolute id-color icon_check rounded-10px"></i>
                                <div class="pl-80">
                                    <h4>Smart Schedules</h4>
                                    <p class="mb-0">Trust us to deliver reliable solutions and exceptional service, and
                                        peace of mind for your HVAC needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 offset-lg-1 wow fadeInUp">
                            <div>
                                <i class="bg-color-2 text-light fs-48 p-2 absolute id-color icon_check rounded-10px"></i>
                                <div class="pl-80">
                                    <h4>Self-Cleaning System</h4>
                                    <p class="mb-0">Trust us to deliver reliable solutions and exceptional service, and
                                        peace of mind for your HVAC needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 offset-lg-1 wow fadeInUp">
                            <div>
                                <i class="bg-color text-light fs-48 p-2 absolute id-color icon_check rounded-10px"></i>
                                <div class="pl-80">
                                    <h4>Child Lock Safety</h4>
                                    <p class="mb-0">Trust us to deliver reliable solutions and exceptional service, and
                                        peace of mind for your HVAC needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 offset-lg-1 wow fadeInUp">
                            <div>
                                <i class="bg-color-2 text-light fs-48 p-2 absolute id-color icon_check rounded-10px"></i>
                                <div class="pl-80">
                                    <h4>Voice Control</h4>
                                    <p class="mb-0">Trust us to deliver reliable solutions and exceptional service, and
                                        peace of mind for your HVAC needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 offset-lg-1 wow fadeInUp">
                            <div>
                                <i class="bg-color text-light fs-48 p-2 absolute id-color icon_check rounded-10px"></i>
                                <div class="pl-80">
                                    <h4>Auto Diagnostic System</h4>
                                    <p class="mb-0">Trust us to deliver reliable solutions and exceptional service, and
                                        peace of mind for your HVAC needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 offset-lg-1 wow fadeInUp">
                            <div>
                                <i class="bg-color-2 text-light fs-48 p-2 absolute id-color icon_check rounded-10px"></i>
                                <div class="pl-80">
                                    <h4>Adaptive Sleep Mode</h4>
                                    <p class="mb-0">Trust us to deliver reliable solutions and exceptional service, and
                                        peace of mind for your HVAC needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="relative section-dark z-2 no-top no-bottom text-light jarallax">
            <img src="{{ asset('assets/images/background/20.webp')}}" class="jarallax-img" alt="">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="py-5 wow fadeInUp">
                            <h2>Easy Control, Anytime, Anywhere</h2>
                            <p>Take full control of your comfort with just a tap. The CoolAir connects seamlessly to your
                                smartphone, letting you adjust temperature, switch modes, set schedules, and monitor energy
                                usage — whether you're at home, at work, or on the go. Enjoy true convenience with smart,
                                intuitive app control at your fingertips.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/misc/c1.webp')}}" class="w-100 mt-80 wow fadeInUp" data-wow-delay=".2s" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container relative z-index-1000">
                <div class="row g-4 gx-5 align-items-center">

                    <div class="col-lg-7 wow fadeInUp">
                        <div class="relative overflow-hidden rounded-20px mb-4 p-3 pb-4">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/products/1.webp')}}" class="w-80" alt="">
                            </div>

                            <div class="col-lg-12">
                                <div class="owl-custom-nav menu-float px-5" data-target="#img-carousel">
                                    <a class="btn-next"></a>
                                    <a class="btn-prev"></a>

                                    <div id="img-carousel" class="owl-carousel owl-theme owl-4-margin-15">
                                        <div class="item">
                                            <a href="images/misc/9.webp" class="image-popup d-block hover">
                                                <div class="relative overflow-hidden rounded-10">
                                                    <div
                                                        class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                        <div class="mb-0 hover-scale-in-3"><i class="fa fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                                    <img src="{{ asset('assets/images/misc/9.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="https://www.youtube.com/watch?v=frCNfh-qA7U"
                                                class="popup-youtube d-block hover">
                                                <div class="relative overflow-hidden rounded-10">
                                                    <div
                                                        class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                        <div class="mb-0 hover-scale-in-3"><i
                                                                class="fa fa-play-circle-o"></i></div>
                                                    </div>
                                                    <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                                    <img src="{{ asset('assets/images/misc/11.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="images/misc/8.webp" class="image-popup d-block hover">
                                                <div class="relative overflow-hidden rounded-10">
                                                    <div
                                                        class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                        <div class="mb-0 hover-scale-in-3"><i class="fa fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                                    <img src="{{ asset('assets/images/misc/8.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="images/misc/13.webp" class="image-popup d-block hover">
                                                <div class="relative overflow-hidden rounded-10">
                                                    <div
                                                        class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                        <div class="mb-0 hover-scale-in-3"><i class="fa fa-search-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                                    <img src="{{ asset('assets/images/misc/13.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="https://www.youtube.com/watch?v=frCNfh-qA7U"
                                                class="popup-youtube d-block hover">
                                                <div class="relative overflow-hidden rounded-10">
                                                    <div
                                                        class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                        <div class="mb-0 hover-scale-in-3"><i
                                                                class="fa fa-play-circle-o"></i></div>
                                                    </div>
                                                    <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                                    <img src="{{ asset('assets/images/misc/12.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                        <h2>All Product Variants</h2>
                        <p>Experience unparalleled comfort and efficiency with our state-of-the-art Air Conditioning Unit.
                            Engineered with the latest technology, our air conditioner ensures optimal cooling while
                            maintaining energy efficiency. Perfect for both residential and commercial spaces, it offers a
                            seamless blend of performance, durability, and sleek design.</p>

                        <div class="spacer-half"></div>

                        <h4 class="mb-3">Choose Capacity</h4>
                        <div class="d-flex">
                            <div class="me-3">
                                <a href="#" class="d-block bg-color-3 text-center p-4 rounded-1 text-dark fs-18 fw-bold">
                                    1 PK
                                </a>
                            </div>
                            <div class="me-3">
                                <a href="#" class="d-block bg-color-3 text-center p-4 rounded-1 text-dark fs-18 fw-bold">
                                    2 PK
                                </a>
                            </div>
                            <div class="me-3">
                                <a href="#" class="d-block bg-color-3 text-center p-4 rounded-1 text-dark fs-18 fw-bold">
                                    3 PK
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="no-top no-bottom overflow-hidden bg-color section-dark text-light">
            <div class="container-fluid position-relative half-fluid">
                <div class="container">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-lg-6 position-lg-absolute left-half h-100">
                            <div class="image" data-bgimage="url(images/misc/11.webp) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-5 offset-lg-7 py-5 pe-lg-5">
                            <div class="spacer-double sm-hide"></div>
                            <h3 class="wow fadeInRight">Stay cool and comfortable year-round with energy-efficient, smart
                                air conditioning designed for ultimate performance, reliability, and effortless climate
                                control.</h3>
                            <div class="spacer-double sm-hide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 wow fadeInUp">
                        <h2 class="mb-0">Specifications</h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="accordion s2">
                            <div class="accordion-section">
                                <div class="accordion-section-title" data-tab="#accordion-a1">
                                    Cooling Performance
                                </div>
                                <div class="accordion-section-content" id="accordion-a1">
                                    <ul class="ul-style-2">
                                        <li>Cooling Capacity: 18,000 BTU/h</li>
                                        <li>Cooling Area Coverage: Up to 180 sq. ft.</li>
                                        <li>Compressor Type: Rotary/Inverter</li>
                                        <li>Cooling Technology: Fast Cooling, Turbo Mode</li>
                                    </ul>
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-a2">
                                    Power & Energy Efficiency
                                </div>
                                <div class="accordion-section-content" id="accordion-a2">
                                    <ul class="ul-style-2">
                                        <li>Power Supply: 220-240V, 50Hz</li>
                                        <li>Rated Power Input: 1500W</li>
                                        <li>Energy Efficiency Ratio (EER): 3.5</li>
                                        <li>Star Rating: 5-Star (BEE Certified)</li>
                                        <li>Annual Power Consumption: 1200 kWh</li>
                                    </ul>
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-a3">
                                    Dimensions & Weight
                                </div>
                                <div class="accordion-section-content" id="accordion-a3">
                                    <ul class="ul-style-2">
                                        <li>Indoor Unit Dimensions (WxHxD): 900 x 300 x 220 mm</li>
                                        <li>Outdoor Unit Dimensions (WxHxD): 850 x 550 x 300 mm</li>
                                        <li>Weight (Indoor/Outdoor): 12 kg / 35 kg</li>
                                    </ul>
                                </div>
                                <div class="accordion-section-title" data-tab="#accordion-a4">
                                    Additional Information
                                </div>
                                <div class="accordion-section-content" id="accordion-a4">
                                    <ul class="ul-style-2">
                                        <li>Warranty: 1 Year on Product, 10 Years on Compressor</li>
                                        <li>Included Accessories: Remote, Installation Kit, User Manual</li>
                                        <li>Country of Manufacture: Japan/China/India</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color-2 section-dark text-light no-top no-bottom overflow-hidden">
            <div class="container-fluid position-relative half-fluid">
                <div class="container">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-lg-6 position-lg-absolute right-half h-100">
                            <div class="image" data-bgimage="url(images/misc/10.webp) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-5 py-5 pe-lg-5">
                            <div class="spacer-double sm-hide"></div>
                            <h3 class="wow fadeInLeft">Bringing happiness and comfort to every customer with top-tier air
                                conditioning solutions designed for ultimate cooling satisfaction.</h3>
                            <div class="spacer-double sm-hide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-4 gx-5">
                    <div class="col-lg-12 wow fadeInUp">
                        <h2 class="mb-0">Reviews</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="de-ratings-bar">
                            <div class="d-bar">
                                <div class="c1">5 stars</div>
                                <div class="c2">
                                    <div class="d-bar-bg" data-value="50">
                                        <div class="d-bar-val"></div>
                                    </div>
                                </div>
                                <div class="c3">
                                    50
                                </div>
                            </div>
                        </div>

                        <div class="de-ratings-bar">
                            <div class="d-bar">
                                <div class="c1">4 stars</div>
                                <div class="c2">
                                    <div class="d-bar-bg" data-value="70">
                                        <div class="d-bar-val"></div>
                                    </div>
                                </div>
                                <div class="c3">
                                    70
                                </div>
                            </div>
                        </div>

                        <div class="de-ratings-bar">
                            <div class="d-bar">
                                <div class="c1">3 stars</div>
                                <div class="c2">
                                    <div class="d-bar-bg" data-value="30">
                                        <div class="d-bar-val"></div>
                                    </div>
                                </div>
                                <div class="c3">
                                    30
                                </div>
                            </div>
                        </div>

                        <div class="de-ratings-bar">
                            <div class="d-bar">
                                <div class="c1">2 stars</div>
                                <div class="c2">
                                    <div class="d-bar-bg" data-value="10">
                                        <div class="d-bar-val"></div>
                                    </div>
                                </div>
                                <div class="c3">
                                    10
                                </div>
                            </div>
                        </div>

                        <div class="de-ratings-bar">
                            <div class="d-bar">
                                <div class="c1">1 star</div>
                                <div class="c2">
                                    <div class="d-bar-bg" data-value="20">
                                        <div class="d-bar-val"></div>
                                    </div>
                                </div>
                                <div class="c3">
                                    20
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex">
                            <div class="me-4">
                                <h1>8.5</h1>
                            </div>
                            <div class="de-rating-ext fs-18 d-block pt-2">
                                <span class="d-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star off"></i>
                                </span>
                                <div class="fs-14 mb-0">1800 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-0 text-center" aria-label="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/1.jpg')}}">
                                        <div>Michael S.<span>Customer</span></div>
                                    </div>
                                    <p>"Their technicians are always prompt, professional, and knowledgeable. From regular
                                        maintenance to emergency repairs, they've got us covered. Highly recommend!""
                                    </p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/2.jpg')}}">
                                        <div>Robert L.<span>Customer</span></div>
                                    </div>
                                    <p>"They responded promptly and had a technician at my door in no time. Within a few
                                        hours, my AC was back up and running smoothly. I'm incredibly grateful for their
                                        quick response and expert repair work."</p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/3.jpg')}}">
                                        <div>Jake M.<span>Customer</span></div>
                                    </div>
                                    <p>"Their commitment to customer satisfaction is unmatched. Whether it's a routine
                                        maintenance visit or a complex repair job, I know I can count on them to deliver
                                        exceptional service every time. "</p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/4.jpg')}}">
                                        <div>Alex P.<span>Customer</span></div>
                                    </div>
                                    <p>"From the initial consultation to the final installation, their team demonstrated
                                        professionalism, expertise, and a commitment to excellence. Our new HVAC system is
                                        performing flawlessly."</p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/5.jpg')}}">
                                        <div>Carlos R.<span>Customer</span></div>
                                    </div>
                                    <p>"Their technicians quickly diagnosed the problem and recommended a cost-effective
                                        solution. Thanks to their expertise and efficient repair work, our home is now
                                        consistently comfortable."</p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/6.jpg')}}">
                                        <div>Edward B.<span>Customer</span></div>
                                    </div>
                                    <p>"Their attention to detail, dedication to customer satisfaction, and commitment to
                                        quality set them apart from the competition. Trust it whether it's a routine
                                        maintenance visit or a complex repair job."</p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/7.jpg')}}">
                                        <div>Daniel H.<span>Customer</span></div>
                                    </div>
                                    <p>"From start to finish, their team provided top-notch service, guiding me through the
                                        selection process, handling the installation with precision, and ensuring everything
                                        was in perfect working order."</p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi s2">
                                <blockquote>
                                    <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                    <div class="de_testi_by">
                                        <img class="bg-white p-2 circle" alt="" src="{{ asset('assets/images/testimonial/8.jpg')}}">
                                        <div>Bryan G.<span>Customer</span></div>
                                    </div>
                                    <p>"Their technicians are knowledgeable, courteous, and always go the extra mile to
                                        ensure customer satisfaction. Whether it's a routine tune-up or a major repair."</p>
                                    <div class="de-rating-ext">
                                        <span class="d-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection