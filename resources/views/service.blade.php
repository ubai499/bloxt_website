@extends('layouts.master')
@section('content')
<!--===== HERO AREA STARTS =======-->
<div class="inner-header-section" style="background-image: url({{asset('assets/img/all-images/bg/hero-bg1.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-heading-area">
                    <h2>Our Services</h2>
                    <div class="space18"></div>
                    <div class="btn-area1">
                        <a href="{{url('/')}}">Home <i class="fa-solid fa-angle-right"></i> <span>Our Services</span></a>
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

<!--===== SERVICE AREA STARTS =======-->
<div class="service-inner-section sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Residential Solar Installation</a>
                        <div class="space16"></div>
                        <p>Transform your home into a sustainable energy powerhouse with our residential solar installation services.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons2.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Clean Energy Made Simple</a>
                        <div class="space16"></div>
                        <p>Experience the best of both worlds with our hybrid solar systems, which combine grid-tied and off-grid features.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="120">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons3.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Solar Power Consultation</a>
                        <div class="space16"></div>
                        <p>We assess your property's energy needs, roof space, and environmental goals to create a custom solar system.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons4.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Agricultural Solar Solutions</a>
                        <div class="space16"></div>
                        <p>Power your farm or agricultural operation with sustainable and cost-effective solar systems tailored for rural energy needs.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons5.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Community Solar Projects</a>
                        <div class="space16"></div>
                        <p>Join a community solar project to benefit from clean energy without installing solar panels on your property.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="120">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons6.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Residential Solar Services</a>
                        <div class="space16"></div>
                        <p>Save on energy costs and reduce your carbon footprint with our efficient and affordable solar solutions for your home.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons7.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Solar Panel Installation</a>
                        <div class="space16"></div>
                        <p>Our expert team ensures seamless installation of high-quality solar panels for homes,, and industrial properties</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="100">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons8.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Solar System Maintenance</a>
                        <div class="space16"></div>
                        <p>Keep your solar system running at peak performance with our regular services From inspections to repairs.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="120">
                <div class="service1-boxarea">
                    <div class="icons">
                        <img src="{{asset('assets/img/icons/s-icons9.svg')}}" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Energy Efficiency Upgrades</a>
                        <div class="space16"></div>
                        <p>Enhance your Solar energy with upgrades that complement your solar system, reducing overall consumption.</p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
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