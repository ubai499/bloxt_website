@extends('layouts.master')
@section('content')
<!--===== HERO AREA STARTS =======-->
<div class="inner-header-section" style="background-image: url({{asset('assets/img/all-images/bg/hero-bg1.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-heading-area">
                    <h2>About Us</h2>
                    <div class="space18"></div>
                    <div class="btn-area1">
                        <a href="{{url('/')}}">Home <i class="fa-solid fa-angle-right"></i> <span>About Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-img1">
        <div class="img1">
            <img src="{{asset('assets/img/elements/elements18.png')}}" alt="">
        </div>
        <div class="img2">
            <img src="{{asset('assets/img/elements/elements19.png')}}" alt="">
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about1 sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="heading1">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><img src="{{asset('assets/img/icons/sub-logo1.svg')}}" alt="">About Company</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Bloxt's Privileged Meeting with King Charles</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100">Bloxt were honoured to be invited to a private meeting with His Majesty, King Charles, in 2024 to discuss our ongoing charity works. This special invitation followed on from our commitment to supporting the Southport Community in the aftermath of the 2024 riots. Through our efforts in rebuilding the community, we strived to make a meaningful difference, and it was a privilege to share our progress and future plans with the King himself. </p>
                    <p data-aos="fade-left" data-aos-duration="1200">At Bloxt, we are dedicated to making a positive impact in our community and are extremely passionate in regards to doing everything we can to help others who need it most.</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="about-img image-anime" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{asset('assets/img/all-images/about/bloxt_about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== VALUE AREA STARTS =======-->
<div class="value-section sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading1 text-center space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900"><img src="{{asset('assets/img/icons/sub-logo1.svg')}}" alt="">Who are We?</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">Who are Bloxt and How Can we Help?</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="img1">
                    <img src="{{asset('assets/img/all-images/about/engineer.webp')}}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="heading1 value-header">
                    <p>Bloxt Limited is a trusted family-run construction and eco company, proudly based in the North West of England. With years of experience and a growing national presence, we specialize in delivering energy-saving solutions across a range of funded schemes. Our expert services include renewable energy installations, insulation, and heating systems, all designed to help you save on energy costs and make your home more efficient and comfortable.</p>
                    <p>At Bloxt Limited, we are committed to providing high-quality retrofit services, from interior and loft insulation to electric storage heating systems. We are proud to serve thousands of satisfied customers, building a strong reputation for reliability, speed, and efficiency in installing domestic heating solutions. Whether you need gas or oil-fired boilers, our team ensures seamless installation and excellent customer service in both the private and ECO obligation sectors.</p>
                    <div class="space32"></div>
                    <ul class="nav nav-pills nav-pills1" id="pills-tab1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home1-tab" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home1" aria-selected="true">
                                Our Vision
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile1-tab" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1" aria-selected="false">
                                Our Mission
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link m-0" id="pills-contact6-tab" data-bs-toggle="pill" data-bs-target="#pills-contact6" type="button" role="tab" aria-controls="pills-contact6" aria-selected="false">
                                Why Choose Us
                            </button>
                        </li>
                    </ul>
                    <div class="space32"></div>
                    <div class="tab-content" id="pills-tabContent1">
                        <div class="tab-pane fade show active heading1" id="pills-home1" role="tabpanel" aria-labelledby="pills-home1-tab" tabindex="0">
                            <p><span>Our Vision:</span> Our vision is to lead the way in shaping a net-zero future where every home and business is energy efficient, affordable to run, and environmentally responsible. We aim to be recognized as a driving force behind the UK’s green energy transformation, empowering communities to save money and protect the planet for generations to come.</p>
                            <div class="space32"></div>
                            <div class="btn-area1">
                                <a href="{{ route('contact')}}" class="vl-btn1">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade heading1" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab" tabindex="0">
                            <p><span>Our Mission:</span> Our mission is to make energy efficiency accessible to everyone. We are dedicated to delivering cost-effective, eco-friendly solutions that lower carbon emissions, reduce energy bills, and improve living standards. By combining innovation with integrity, we strive to support households in transitioning to a sustainable energy future.</p>
                            <div class="space32"></div>
                            <div class="btn-area1">
                                <a href="{{ route('contact')}}" class="vl-btn1">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade heading1" id="pills-contact6" role="tabpanel" aria-labelledby="pills-contact6-tab" tabindex="0">
                            <p><span>Why Choose Us:</span> Bloxt Ltd is your trusted partner in creating a greener, more energy-efficient future. As an approved Eco4 and energy solutions provider, we help households and businesses reduce energy costs, improve property efficiency, and contribute to a cleaner environment. With expert guidance, high-quality installations, and a commitment to sustainability, we ensure you benefit from government-backed schemes while making a positive impact on the planet.</p>
                            <div class="space32"></div>
                            <div class="btn-area1">
                                <a href="{{ route('contact')}}" class="vl-btn1">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== VALUE AREA ENDS =======-->

<!--===== TESTIMONIALS AREA STARTS =======-->
<div class="testimonial1 sp1">
    <img src="{{asset('assets/img/elements/elements1.png')}}" alt="" class="elements1">
    <img src="{{asset('assets/img/elements/elements3.png')}}" alt="" class="elements2">
    <img src="{{asset('assets/img/elements/elements4.png')}}" alt="" class="elements3">
    <img src="{{asset('assets/img/elements/elements4.png')}}" alt="" class="elements4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading1 text-center space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900"><img src="{{asset('assets/img/icons/sub-logo1.svg')}}" alt="">TESTIMONIALS</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">Our Customers Speak For Us</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="testimonail-widget-slider">
                    <div class="testimonial-boxarea">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <p class="pera">"We are thrilled with our decision to go solar with Solarp Their expertise and customer service were top-notch, and the entire process was seamless." </p>
                        <div class="space24"></div>
                        <div class="images">
                            <div class="img1">
                                <img src="{{asset('assets/img/all-images/testimonials/t-img1.png')}}" alt="">
                            </div>
                            <div class="text">
                                <a href="team.html">Katona Beatrix</a>
                                <div class="space8"></div>
                                <p>Califonia, USA</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--===== TESTIMONIALS AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta1 sp10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-content-bg" style="background-image: url('{{ asset('assets/img/all-images/cta/cta-img1.png') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="heading1 text-center">
                                <h2>Take the First Step Toward Energy Independence</h2>
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