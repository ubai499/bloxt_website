@extends('layouts.master')
@section('content')
<!--===== HERO AREA STARTS =======-->
<div class="inner-header-section" style="background-image: url('{{ asset('assets/img/all-images/bg/hero-bg1.png') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-heading-area">
                    <h2>Contact Us</h2>
                    <div class="space18"></div>
                    <div class="btn-area1">
                        <a href="{{ url('/') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-img1">
        <div class="img1">
            <img src="{{ asset('assets/img/elements/elements18.png') }}" alt="">
        </div>
        <div class="img2">
            <img src="{{ asset('assets/img/elements/elements19.png') }}" alt="">
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact1 sp1">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-contactbox">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/time2.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>Contact us</h4>
                            <a href="mailto:eitechsolut@gmail.com">789 Inner Lane, Holy park, <br> California, USA</a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="widget-contactbox">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/phn2.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>Call or text</h4>
                            <a href="tel:+11234567890">+00 987 654 3210 <br> +00 654 294 4967</a>
                        </div>
                    </div>
                    <div class="space30 d-lg-none d-block"></div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="widget-contactbox">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/mail2.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>Email us today</h4>
                            <a href="mailto:eitechsolut@gmail.com">infomailsolarp@gmail.com
                                <br> Supportsolarp@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space60"></div>
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading1 text-center space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900">
                        <img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt="">cONTACT US
                    </h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">Request a Free Quote</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="img1 image-anime">
                    <img src="{{ asset('assets/img/all-images/contact/contact-img1.png') }}" alt="">
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

<div class="contact-maps-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--===== CONTACT AREA ENDS =======-->
<!--===== CTA AREA STARTS =======-->
<div class="cta1 sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content-bg" style="background-image: url('{{ asset('assets/img/all-images/cta/cta-img1.png') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="heading1 text-center">
                                <h2>Take the First Step Toward Energy Independence</h2>
                                <div class="space32"></div>
                                <form method="POST" action="#">
                                    @csrf
                                    <input type="email" name="email" placeholder="Enter Your Email" required>
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