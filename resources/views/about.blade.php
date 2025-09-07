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
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Building A Sustainable Future With Solar Power</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100">At Solarp we are dedicated to harnessing the power of the sun to create a cleaner, more sustainable future. As a leader in solar energy.</p>
                    <div class="skills-section" data-aos="fade-left" data-aos-duration="1200">
                        <div class="skill">
                            <div class="skill-header">
                                <span>General Consulting</span>
                                <span>85%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 85%;"></div>
                            </div>
                        </div>

                        <div class="skill">
                            <div class="skill-header">
                                <span>Design & Build</span>
                                <span>90%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 90%;"></div>
                            </div>
                        </div>

                    </div>
                    <div class="space32"></div>
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1300">
                        <a href="{{ route('about')}}" class="vl-btn1">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="about-img image-anime" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{asset('assets/img/all-images/about/about-img1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== HISTORY AREA STARTS =======-->
<div class="history1-section sp1">
    <img src="{{asset('assets/img/elements/elements1.png')}}" alt="" class="elements1">
    <img src="{{asset('assets/img/elements/elements3.png')}}" alt="" class="elements2">
    <img src="{{asset('assets/img/elements/elements4.png')}}" alt="" class="elements3">
    <img src="{{asset('assets/img/elements/elements4.png')}}" alt="" class="elements4">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="heading1 text-center space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900"><img src="{{asset('assets/img/icons/sub-logo1.svg')}}" alt="">sOLAR History</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">The Evolution of Solar Energy</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="history-tabs-section">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="tabs-button space-margin60">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">2018</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2019</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">2020</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">2022</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">2023</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact3-tab" data-bs-toggle="pill" data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact3" aria-selected="false">2024</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact4-tab" data-bs-toggle="pill" data-bs-target="#pills-contact4" type="button" role="tab" aria-controls="pills-contact4" aria-selected="false">2025</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="heading1">
                                            <h3>The History Of Solar Energy</h3>
                                            <div class="space24"></div>
                                            <p><span>Solar Energy:</span> The history of solar energy is a testament to humanity's ingenuity & our enduring quest to harness the power of the sun. From ancient civilizations to modern innovations, the journey
                                                of solar energy.</p>
                                            <div class="space16"></div>
                                            <p><span>Scientific exploration:</span> The scientific exploration of solar energy began in the 19th century with the discovery of the photovoltaic effect by Edmond Becquerel in 1839. This breakthrough paved
                                                the way.</p>
                                            <div class="space16"></div>
                                            <p><span>Technology experienced:</span> In the late 20th century, solar technology experienced a significant shift. Governments, scientists, & industries around the world began to invest in solar research to
                                                combat rising.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="img1">
                                            <img src="{{asset('assets/img/all-images/others/h-img1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="heading1">
                                            <h3>The History Of Solar Energy</h3>
                                            <div class="space24"></div>
                                            <p><span>Solar Energy:</span> The history of solar energy is a testament to humanity's ingenuity & our enduring quest to harness the power of the sun. From ancient civilizations to modern innovations, the journey
                                                of solar energy.</p>
                                            <div class="space16"></div>
                                            <p><span>Scientific exploration:</span> The scientific exploration of solar energy began in the 19th century with the discovery of the photovoltaic effect by Edmond Becquerel in 1839. This breakthrough paved
                                                the way.</p>
                                            <div class="space16"></div>
                                            <p><span>Technology experienced:</span> In the late 20th century, solar technology experienced a significant shift. Governments, scientists, & industries around the world began to invest in solar research to
                                                combat rising.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="img1">
                                            <img src="{{asset('assets/img/all-images/others/h-img1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="heading1">
                                            <h3>The History Of Solar Energy</h3>
                                            <div class="space24"></div>
                                            <p><span>Solar Energy:</span> The history of solar energy is a testament to humanity's ingenuity & our enduring quest to harness the power of the sun. From ancient civilizations to modern innovations, the journey
                                                of solar energy.</p>
                                            <div class="space16"></div>
                                            <p><span>Scientific exploration:</span> The scientific exploration of solar energy began in the 19th century with the discovery of the photovoltaic effect by Edmond Becquerel in 1839. This breakthrough paved
                                                the way.</p>
                                            <div class="space16"></div>
                                            <p><span>Technology experienced:</span> In the late 20th century, solar technology experienced a significant shift. Governments, scientists, & industries around the world began to invest in solar research to
                                                combat rising.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="img1">
                                            <img src="{{asset('assets/img/all-images/others/h-img1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact1-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="heading1">
                                            <h3>The History Of Solar Energy</h3>
                                            <div class="space24"></div>
                                            <p><span>Solar Energy:</span> The history of solar energy is a testament to humanity's ingenuity & our enduring quest to harness the power of the sun. From ancient civilizations to modern innovations, the journey
                                                of solar energy.</p>
                                            <div class="space16"></div>
                                            <p><span>Scientific exploration:</span> The scientific exploration of solar energy began in the 19th century with the discovery of the photovoltaic effect by Edmond Becquerel in 1839. This breakthrough paved
                                                the way.</p>
                                            <div class="space16"></div>
                                            <p><span>Technology experienced:</span> In the late 20th century, solar technology experienced a significant shift. Governments, scientists, & industries around the world began to invest in solar research to
                                                combat rising.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="img1">
                                            <img src="{{asset('assets/img/all-images/others/h-img1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="heading1">
                                            <h3>The History Of Solar Energy</h3>
                                            <div class="space24"></div>
                                            <p><span>Solar Energy:</span> The history of solar energy is a testament to humanity's ingenuity & our enduring quest to harness the power of the sun. From ancient civilizations to modern innovations, the journey
                                                of solar energy.</p>
                                            <div class="space16"></div>
                                            <p><span>Scientific exploration:</span> The scientific exploration of solar energy began in the 19th century with the discovery of the photovoltaic effect by Edmond Becquerel in 1839. This breakthrough paved
                                                the way.</p>
                                            <div class="space16"></div>
                                            <p><span>Technology experienced:</span> In the late 20th century, solar technology experienced a significant shift. Governments, scientists, & industries around the world began to invest in solar research to
                                                combat rising.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="img1">
                                            <img src="{{asset('assets/img/all-images/others/h-img1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="heading1">
                                            <h3>The History Of Solar Energy</h3>
                                            <div class="space24"></div>
                                            <p><span>Solar Energy:</span> The history of solar energy is a testament to humanity's ingenuity & our enduring quest to harness the power of the sun. From ancient civilizations to modern innovations, the journey
                                                of solar energy.</p>
                                            <div class="space16"></div>
                                            <p><span>Scientific exploration:</span> The scientific exploration of solar energy began in the 19th century with the discovery of the photovoltaic effect by Edmond Becquerel in 1839. This breakthrough paved
                                                the way.</p>
                                            <div class="space16"></div>
                                            <p><span>Technology experienced:</span> In the late 20th century, solar technology experienced a significant shift. Governments, scientists, & industries around the world began to invest in solar research to
                                                combat rising.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="img1">
                                            <img src="{{asset('assets/img/all-images/others/h-img1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact4-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="heading1">
                                            <h3>The History Of Solar Energy</h3>
                                            <div class="space24"></div>
                                            <p><span>Solar Energy:</span> The history of solar energy is a testament to humanity's ingenuity & our enduring quest to harness the power of the sun. From ancient civilizations to modern innovations, the journey
                                                of solar energy.</p>
                                            <div class="space16"></div>
                                            <p><span>Scientific exploration:</span> The scientific exploration of solar energy began in the 19th century with the discovery of the photovoltaic effect by Edmond Becquerel in 1839. This breakthrough paved
                                                the way.</p>
                                            <div class="space16"></div>
                                            <p><span>Technology experienced:</span> In the late 20th century, solar technology experienced a significant shift. Governments, scientists, & industries around the world began to invest in solar research to
                                                combat rising.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="img1">
                                            <img src="{{asset('assets/img/all-images/others/h-img1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HISTORY AREA ENDS =======-->

<!--===== VALUE AREA STARTS =======-->
<div class="value-section sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading1 text-center space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900"><img src="{{asset('assets/img/icons/sub-logo1.svg')}}" alt="">Our value</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">Pioneering the Path Forward</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="img1">
                    <img src="{{asset('assets/img/all-images/others/value-img1.png')}}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="heading1 value-header">
                    <p>Our vision is to create a world where sustainable energy solutions empower lives, protect the planet, and drive progress for generations to come. We envision a future where innovation and sustainability go hand in hand</p>
                    <div class="space32"></div>
                    <ul class="nav nav-pills nav-pills1" id="pills-tab1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home1-tab" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home1" aria-selected="true">
                                Our Vission
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
                            <p><span>Our vision:</span> Together with our partners and communities, we are building a future where renewable energy is accessible to all, creating opportunities for growth, resilience & Our vision is bold but achievable
                                powered by innovation.</p>
                            <div class="space20"></div>
                            <p><span>Our Mission:</span> We envision a future where clean energy powers every home, business, &institution reducing our carbon footprint and preserving our planet for generations to come. Guided by integrity, innovation,
                                and a passion for excellence.</p>
                            <div class="space32"></div>
                            <div class="btn-area1">
                                <a href="{{ route('contact')}}" class="vl-btn1">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade heading1" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile1-tab" tabindex="0">
                            <p><span>Our vision:</span> Together with our partners and communities, we are building a future where renewable energy is accessible to all, creating opportunities for growth, resilience & Our vision is bold but achievable
                                powered by innovation.</p>
                            <div class="space20"></div>
                            <p><span>Our Mission:</span> We envision a future where clean energy powers every home, business, &institution reducing our carbon footprint and preserving our planet for generations to come. Guided by integrity, innovation,
                                and a passion for excellence.</p>
                            <div class="space32"></div>
                            <div class="btn-area1">
                                <a href="{{ route('contact')}}" class="vl-btn1">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade heading1" id="pills-contact6" role="tabpanel" aria-labelledby="pills-contact6-tab" tabindex="0">
                            <p><span>Our vision:</span> Together with our partners and communities, we are building a future where renewable energy is accessible to all, creating opportunities for growth, resilience & Our vision is bold but achievable
                                powered by innovation.</p>
                            <div class="space20"></div>
                            <p><span>Our Mission:</span> We envision a future where clean energy powers every home, business, &institution reducing our carbon footprint and preserving our planet for generations to come. Guided by integrity, innovation,
                                and a passion for excellence.</p>
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

<!--===== TEAM AREA STARTS =======-->
<div class="team1 sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading1 text-center space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="zoom-in" data-aos-duration="900"><img src="{{asset('assets/img/icons/sub-logo1.svg')}}" alt="">OUR TEAM</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="zoom-in" data-aos-duration="1000">Meet Our Team Member</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="70">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{asset('assets/img/all-images/team/t-img1.png')}}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="team-single.html" class="title">Marilyn Korsgaard</a>
                        <div class="space8"></div>
                        <p>Solar Energy Technician</p>
                        <div class="space32"></div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-offset="90">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{asset('assets/img/all-images/team/t-img2.png')}}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="team-single.html" class="title">Marilyn Korsgaard</a>
                        <div class="space8"></div>
                        <p>Solar Energy Technician</p>
                        <div class="space32"></div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="110">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{asset('assets/img/all-images/team/t-img3.png')}}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="team-single.html" class="title">Marilyn Korsgaard</a>
                        <div class="space8"></div>
                        <p>Solar Energy Technician</p>
                        <div class="space32"></div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1100" data-aos-offset="120">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{asset('assets/img/all-images/team/t-img4.png')}}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="team-single.html" class="title">Marilyn Korsgaard</a>
                        <div class="space8"></div>
                        <p>Solar Energy Technician</p>
                        <div class="space32"></div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-offset="130">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{asset('assets/img/all-images/team/t-img5.png')}}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="team-single.html" class="title">Marilyn Korsgaard</a>
                        <div class="space8"></div>
                        <p>Solar Energy Technician</p>
                        <div class="space32"></div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1300" data-aos-offset="140">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{asset('assets/img/all-images/team/t-img6.png')}}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="team-single.html" class="title">Marilyn Korsgaard</a>
                        <div class="space8"></div>
                        <p>Solar Energy Technician</p>
                        <div class="space32"></div>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== TEAM AREA ENDS =======-->
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