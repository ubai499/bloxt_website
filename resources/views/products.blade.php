@extends('layouts.master')
@section('content')
<!--===== HERO AREA STARTS =======-->
<div class="inner-header-section" style="background-image: url({{asset('assets/img/all-images/bg/hero-bg1.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-heading-area">
                    <h2>Our Products</h2>
                    <div class="space18"></div>
                    <div class="btn-area1">
                        <a href="{{url('/')}}">Home <i class="fa-solid fa-angle-right"></i> <span>Our Products</span></a>
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

<!--===== SERVICE AREA STARTS =======-->
<div class="service-inner-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div>
                        <img src="{{asset('assets/img/all-images/hero/boiler.png')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ route('quote_boiler')}}" class="title">Boiler Name</a>
                        <div class="space16"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="space24"></div>
                        <a href="{{ route('quote_boiler')}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact1 sp10">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading1 text-center space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900"><img src="{{asset('assets/img/icons/sub-logo1.svg')}}" alt="">cONTACT US</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">Request a Free Quote</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="img1 image-anime">
                    <img src="{{asset('assets/img/all-images/contact/contact-img1.png')}}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact1-boxarea" data-aos="fade-left" data-aos-duration="1200">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="input-area">
                                <input type="text" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-area">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="input-area">
                                <input type="email" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="input-area">
                                <input type="number" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="input-area">
                                <select name="country" id="country" class="country-area nice-select">
                                    <option value="1" data-display="Solar Services">Solar Services</option>
                                    <option value=""> Installation of solar panels</option>
                                    <option value=""> Maintenance or repair</option>
                                    <option value=""> Solar energy providers</option>
                                    <option value=""> Solar financing or incentives</option>
                                    <option value=""> Something else entirely?</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="input-area">
                                <textarea placeholder="Type Your Message"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="input-area">
                                <button type="submit" class="vl-btn1">Submit Message <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CONTACT AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta1 sp10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content-bg" style="background-image: url({{asset('assets/img/all-images/cta/cta-img1.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;">
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