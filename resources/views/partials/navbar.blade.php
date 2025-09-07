<!--=====HEADER START=======-->
<header class="homepage5-body">
    <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
        <div class="container">
            <div class="row align-items-center row-bg1">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-logo">
                        <a href="{{url('/')}}"><img src="{{ asset('assets/img/logo/logo5.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="vl-main-menu text-center">
                        <nav class="vl-mobile-menu-active">
                            <ul>
                                <li class="has-dropdown">
                                    <a href="{{url('/')}}">Home <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                </li>

                                <li><a href="{{ route('about') }}">About Us</a></li>


                                <li class="has-dropdown">
                                    <a href="#">Pages <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="projects.html">Our Projects</a></li>
                                        <li><a href="projects-single.html">Projects Single</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="team-single.html">Team Single</a></li>
                                        <li><a href="testimonial1.html">Testimonials V1</a></li>
                                        <li><a href="testimonial2.html">Testimonials V2</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('service') }}">Services <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
    
                                </li>

                                <li><a href="{{ route('blog') }}">Blogs <span><i class="fa-solid fa-angle-down d-lg-inline d-none"></i></span></a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-hero-btn d-none d-lg-block text-end">
                        <div class="hero-btn1">
                            <a href="{{ route('contact') }}" class="vl-btn6">Get Started <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="vl-header-action-item d-block d-lg-none">
                        <button type="button" class="vl-offcanvas-toggle">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="homepage5-body">
    <div class="vl-offcanvas">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="{{url('/')}}"><img src="{{ asset('assets/img/logo/logo1.png') }}" alt=""></a>
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
