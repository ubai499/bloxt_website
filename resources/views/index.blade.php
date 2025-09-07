@extends('layouts.master')
@section('content')
<!--===== MOBILE HEADER STARTS =======-->
<div class="homepage5-body">
    <div class="vl-offcanvas">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="index.html"><img src="{{ asset('assets/img/logo/logo1.png') }}" alt=""></a>
                </div>
                <div class="vl-offcanvas-close">
                    <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <div class="vl-offcanvas-menu d-lg-none mb-40">
                <nav></nav>
            </div>

            <div class="space20"></div>
            <div class="vl-offcanvas-info">
                <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                <div class="space20"></div>
                <span><a href="#"> <i class="fa-regular fa-envelope"></i> +57 9954 6476</a></span>
                <span><a href="#"><i class="fa-solid fa-phone"></i> hello@exdos.com</a></span>
                <span><a href="#"><i class="fa-solid fa-location-dot"></i> Bhemeara,Kushtia</a></span>
            </div>
            <div class="space20"></div>
            <div class="vl-offcanvas-social">
                <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
                <div class="space20"></div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
    </div>
    <div class="vl-offcanvas-overlay"></div>
</div>
<!--===== MOBILE HEADER STARTS =======-->

<!--===== HERO AREA STARTS =======-->
<div class="hero5-section" style="background-image: url('{{ asset('assets/img/all-images/bg/hero-bg4.png') }}'); background-position: center top; background-size: cover; background-repeat: no-repeat;">
    <img src="{{ asset('assets/img/elements/elements2.png') }}" alt="" class="elements8 aniamtion-key-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-header">
                    <h5 data-aos="fade-left" data-aos-duration="900">
                        <img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt=""> Premium Solar Panels
                    </h5>
                    <div class="space16"></div>
                    <h1 data-aos="fade-left" data-aos-duration="1000">Revolutionize Your Energy Use with Solar Power</h1>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100">
                        We provide innovative solar solutions that help you save money, and embrace energy independence whether you're a homeowner or a business owner.
                    </p>
                    <div class="space38"></div>
                    <div class="play-btns-area" data-aos="fade-left" data-aos-duration="1200">
                        <div class="btn-area1">
                            <a href="contact.html" class="vl-btn6">Discover Solarp <i class="fa-solid fa-arrow-right"></i></a>
                            <a href="contact.html" class="vl-btn6 btn2">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="images" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/hero/hero-img5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about5 sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about5-images">
                    <img src="{{ asset('assets/img/elements/elements15.png') }}" alt="" class="elements15">
                    <img src="{{ asset('assets/img/elements/elements16.png') }}" alt="" class="elements16">
                    <div class="img1" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                        <img src="{{ asset('assets/img/all-images/about/about-img9.png') }}" alt="">
                    </div>
                    <div class="img2" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="120">
                        <img src="{{ asset('assets/img/all-images/about/about-img10.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="heading5">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z" fill="#007200" />
                            <path d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z" fill="#007200" />
                            <path d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z" fill="#007200" />
                            <path d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z" fill="#007200" />
                        </svg> About Us</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Our Journey Toward Clean Energy Leadership</h2>
                    <div class="space16"></div>
                    <p data-aos="fade-left" data-aos-duration="1100">We aim to empower individuals & communities to embrace renewable energy and take meaningful steps toward a sustainable tomorrow.</p>
                    <div class="row" data-aos="fade-left" data-aos-duration="1200">
                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#007200" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.33801C8.51945 2.45874 10.2445 1.99712 12 2.00001C17.523 2.00001 22 6.47701 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 10.179 2.487 8.47001 3.338 7.00001" stroke="#007200" stroke-width="1.5" stroke-linecap="round" />
                                    </svg> Your Trusted Solar Partner</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#007200" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.33801C8.51945 2.45874 10.2445 1.99712 12 2.00001C17.523 2.00001 22 6.47701 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 10.179 2.487 8.47001 3.338 7.00001" stroke="#007200" stroke-width="1.5" stroke-linecap="round" />
                                    </svg> Our Promise to You</li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#007200" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.33801C8.51945 2.45874 10.2445 1.99712 12 2.00001C17.523 2.00001 22 6.47701 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 10.179 2.487 8.47001 3.338 7.00001" stroke="#007200" stroke-width="1.5" stroke-linecap="round" />
                                    </svg> Your Partner in Solar Energy</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#007200" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.33801C8.51945 2.45874 10.2445 1.99712 12 2.00001C17.523 2.00001 22 6.47701 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 10.179 2.487 8.47001 3.338 7.00001" stroke="#007200" stroke-width="1.5" stroke-linecap="round" />
                                    </svg> Join the Solar Revolution</li>
                            </ul>
                        </div>
                    </div>

                    <div class="space32"></div>
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                        <a href="about.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service5 sp2">
    <img src="{{ asset('assets/img/elements/elements1.png') }}" alt="" class="elements1">
    <img src="{{ asset('assets/img/elements/elements3.png') }}" alt="" class="elements2">
    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements3">
    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements4">
    <div class="container">
        <div class="row align-items-center space-margin60">
            <div class="col-lg-6">
                <div class="heading5">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z" fill="#007200" />
                            <path d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z" fill="#007200" />
                            <path d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z" fill="#007200" />
                            <path d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z" fill="#007200" />
                        </svg> Our Services
                    </h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">
                        Customized Solar Services for Homes and Businesses
                    </h2>
                </div>
            </div>

            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <div class="space24 d-lg-none d-block"></div>
                <div class="btn-area1 text-end">
                    <a href="service.html" class="vl-btn6">View All Services <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-offset="80">
                <div class="service5-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/service/s-img1.png') }}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Residential Solar Solutions</a>
                        <div class="space10"></div>
                        <p>Bring the power of the sun to your home with our Residential Solar Solutions.</p>
                        <div class="space28"></div>
                        <div class="btn-area1">
                            <a href="service-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-offset="100">
                <div class="service5-boxarea">
                    <div class="content-area">
                        <a href="service-single.html" class="title">Commercial Solar Systems</a>
                        <div class="space10"></div>
                        <p>Sustainable energy solutions through our Commercial Solar Systems.</p>
                        <div class="space28"></div>
                        <div class="btn-area1">
                            <a href="service-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/service/s-img2.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-offset="120">
                <div class="service5-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/service/s-img3.png') }}" alt="">
                    </div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Solar Energy Consultation</a>
                        <div class="space10"></div>
                        <p>Our experts will assess your property, evaluate your energy needs.</p>
                        <div class="space28"></div>
                        <div class="btn-area1">
                            <a href="service-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== CHOOSE AREA STARTS =======-->
<div class="choose5 sp2">
    <div class="container">
        <div class="row align-items-center space-margin60">
            <div class="col-lg-5">
                <div class="heading5">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z" fill="#007200" />
                            <path d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z" fill="#007200" />
                            <path d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z" fill="#007200" />
                            <path d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z" fill="#007200" />
                        </svg> Why Chooes Us</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Why We're Your Best Choice for Solar Energy</h2>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-3">
                <div class="btn-area1 text-end">
                    <div class="space24 d-lg-none d-block"></div>
                    <a href="service.html" class="vl-btn6">See The Benefits <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-offset="80">
                <div class="choose5-boxarea">
                    <div class="icons">
                        <img src="assets/img/icons/s-icons10.svg" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Residential Solar Solutions</a>
                        <div class="space16"></div>
                        <p>With years of expertise, we deliver reliable and efficient solar energy solutions tailored to your needs.</p>
                        <div class="space28"></div>
                        <div class="btn-area1">
                            <a href="service-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1100" data-aos-offset="100">
                <div class="choose5-boxarea">
                    <div class="icons">
                        <img src="assets/img/icons/s-icons11.svg" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Customized Solutions</a>
                        <div class="space16"></div>
                        <p>With years of experience, our team of certified professionals ensures flawless installation and service.</p>
                        <div class="space28"></div>
                        <div class="btn-area1">
                            <a href="service-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1300" data-aos-offset="120">
                <div class="choose5-boxarea">
                    <div class="icons">
                        <img src="assets/img/icons/s-icons12.svg" alt="">
                    </div>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="service-single.html" class="title">Premium Quality Products</a>
                        <div class="space16"></div>
                        <p>We use state-of-the-art solar panels and equipment designed for maximum durability and efficiency</p>
                        <div class="space28"></div>
                        <div class="btn-area1">
                            <a href="service-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CHOOSE AREA ENDS =======-->

<!--===== OTHERS AREA STARTS =======-->
<div class="video-section"
    style="background-image: url('{{ asset('assets/img/all-images/bg/video-bg1.png') }}'); 
           background-position: center; 
           background-size: cover; 
           background-repeat: no-repeat; 
           background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-play-area">
                    <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="play-btn popup-youtube">
                        <span class="video"><i class="fa-solid fa-play"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== OTHERS AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team5 sp2">
    <div class="container">
        <div class="row align-items-center space-margin60">
            <div class="col-lg-5">
                <div class="heading5">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z" fill="#007200" />
                            <path d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z" fill="#007200" />
                            <path d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z" fill="#007200" />
                            <path d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z" fill="#007200" />
                        </svg> Our Team
                    </h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Powering Change with Our Dedicated Team</h2>
                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-3">
                <div class="btn-area1 text-end">
                    <div class="space24 d-lg-none d-block"></div>
                    <a href="{{ asset('service.html') }}" class="vl-btn6">View All Team <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="70">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/team/t-img1.png') }}" alt="">
                    </div>
                    <ul class="team-social">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ asset('team-single.html') }}" class="title">Cooper Calzoni</a>
                        <div class="space16"></div>
                        <p>Chief Engineer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="70">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/team/t-img2.png') }}" alt="">
                    </div>
                    <ul class="team-social">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ asset('team-single.html') }}" class="title">Marilyn Korsgaard</a>
                        <div class="space16"></div>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="70">
                <div class="team1-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/all-images/team/t-img3.png') }}" alt="">
                    </div>
                    <ul class="team-social">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                    <div class="space30"></div>
                    <div class="content-area">
                        <a href="{{ asset('team-single.html') }}" class="title">Desirae Dorwart</a>
                        <div class="space16"></div>
                        <p>Solar Consultant</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== TEAM AREA ENDS =======-->

<!--===== TESTIMONIALS AREA STARTS =======-->
<div class="testimonial5 sp1">
    <img src="{{ asset('assets/img/elements/elements1.png') }}" alt="" class="elements1">
    <img src="{{ asset('assets/img/elements/elements3.png') }}" alt="" class="elements2">
    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements3">
    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="heading5 space-margin60">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900">
                        <!-- SVG stays as is -->
                        Testimonials
                    </h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Hear From Our Happy Clients</h2>
                </div>
            </div>

            <div class="col-lg-3"></div>
            <div class="col-lg-2">
                <div class="testimonial-arrows text-end">
                    <div class="testimonial-prev-arrow5">
                        <button><i class="fa-solid fa-arrow-left"></i></button>
                    </div>
                    <div class="testimonial-next-arrow5">
                        <button><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="testimonial-dots-main5">
                    <div class="testimonial-main-slider">
                        <div class="quoto">
                            <!-- SVG stays as is -->
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <p class="pera">"We made the decision to go solar after learning more about the benefits, and we are so glad we chose Solarp. Our solar panels were installed quickly.</p>
                        <div class="space24"></div>
                        <div class="images">
                            <div class="img1">
                                <img src="{{ asset('assets/img/all-images/testimonials/t-img1.png') }}" alt="">
                            </div>
                            <div class="text">
                                <a href="team.html">Katona Beatrix</a>
                                <div class="space8"></div>
                                <p>Califonia, USA</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-main-slider">
                        <div class="quoto">
                            <!-- SVG stays as is -->
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <p class="pera">"We made the decision to go solar after learning more about the benefits, and we are so glad we chose Solarp. Our solar panels were installed quickly.</p>
                        <div class="space24"></div>
                        <div class="images">
                            <div class="img1">
                                <img src="{{ asset('assets/img/all-images/testimonials/t-img2.png') }}" alt="">
                            </div>
                            <div class="text">
                                <a href="team.html">Ebony Swihart</a>
                                <div class="space8"></div>
                                <p>New York, USA</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-main-slider">
                        <div class="quoto">
                            <!-- SVG stays as is -->
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <p class="pera">"We switched to solar with Solarp and couldn’t be happier! Our energy bills have significantly dropped, and we’re proud to be using clean, renewable energy.</p>
                        <div class="space24"></div>
                        <div class="images">
                            <div class="img1">
                                <img src="{{ asset('assets/img/all-images/testimonials/t-img3.png') }}" alt="">
                            </div>
                            <div class="text">
                                <a href="team.html">Daniel Porter</a>
                                <div class="space8"></div>
                                <p>Miami, USA</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-main-slider">
                        <div class="quoto">
                            <!-- SVG stays as is -->
                        </div>
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="space16"></div>
                        <p class="pera">"We made the decision to go solar after learning more about the benefits, and we are so glad we chose Solarp. Our solar panels were installed quickly.</p>
                        <div class="space24"></div>
                        <div class="images">
                            <div class="img1">
                                <img src="{{ asset('assets/img/all-images/testimonials/t-img4.png') }}" alt="">
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

<!--===== FAQ AREA STARTS =======-->
<div class="faq5 sp1">
    <div class="container">
        <div class="row align-items-center space-margin60">
            <div class="col-lg-7">
                <div class="heading5">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z" fill="#007200" />
                            <path d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z" fill="#007200" />
                            <path d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z" fill="#007200" />
                            <path d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z" fill="#007200" />
                        </svg> FAQ</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Frequently Asked Questions About Going Solar</h2>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="btn-area1 text-end">
                    <div class="space24 d-lg-none d-block"></div>
                    <a href="faq.html" class="vl-btn6">Explore FAQ <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="accordion-widget-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="800">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. Will solar panels save me money?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="900">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Can I install solar panels on a flat roof?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Do I need to maintain my solar panels?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. How much can I save with solar energy?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="accordion-widget-area">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="800">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    5. How does solar panel warranty work?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="900">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    6. Can I install solar panels myself?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    7. How do solar panels work?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    8. How long do solar panels last?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <p>Solar panels can significantly reduce your monthly electricity bills by generating your own energy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== FAQ AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="vl-blog-5-area sp2">
    <img src="{{ asset('assets/img/elements/elements1.png') }}" alt="" class="elements1">
    <img src="{{ asset('assets/img/elements/elements3.png') }}" alt="" class="elements2">
    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements3">
    <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements4">
    <div class="container">
        <div class="row align-items-center space-margin60">
            <div class="col-lg-7">
                <div class="heading5">
                    <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z" fill="#007200" />
                            <path d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z" fill="#007200" />
                            <path d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z" fill="#007200" />
                            <path d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z" fill="#007200" />
                        </svg> Our Blog</h5>
                    <div class="space16"></div>
                    <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Expert Tips & Industry News</h2>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-3">
                <div class="btn-area1 text-end">
                    <div class="space24 d-lg-none d-block"></div>
                    <a href="blog.html" class="vl-btn6">View All Blogs <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4  col-md-6" data-aos="fade-left" data-aos-duration="900">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{ asset('assets/img/all-images/blog/blog-img11.png') }}" alt="">
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
                        <div class="space16"></div>
                        <h4 class="vl-blog-1-title"><a href="blog-single.html">Solar Panel Maintenance Tips for Maximum Efficiency</a></h4>

                        <div class="space32"></div>
                        <div class="vl-blog-1-icon">
                            <a href="blog-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{ asset('assets/img/all-images/blog/blog-img12.png') }}" alt="">
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
                        <div class="space16"></div>
                        <h4 class="vl-blog-1-title"><a href="blog-single.html">Trends and Innovations in Renewable Energy</a></h4>

                        <div class="space32"></div>
                        <div class="vl-blog-1-icon">
                            <a href="blog-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="vl-blog-1-item">
                    <div class="vl-blog-1-thumb image-anime">
                        <img src="{{ asset('assets/img/all-images/blog/blog-img13.png') }}" alt="">
                    </div>
                    <div class="vl-blog-1-content">
                        <div class="vl-blog-meta">
                            <ul>
                                <li>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18" stroke="#676B74" stroke-width="2" />
                                            <path d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z" stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                            <path d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z" stroke="#676B74" stroke-width="2" />
                                        </svg>Judith Rodriguez</a>
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
                        <div class="space16"></div>
                        <h4 class="vl-blog-1-title"><a href="blog-single.html">Top Benefits of Switching to Solar Energy</a></h4>

                        <div class="space32"></div>
                        <div class="vl-blog-1-icon">
                            <a href="blog-single.html" class="vl-btn6">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->
@endsection