@extends('layouts.master')
@section('content')

    <div class="hero5-section" style="background:#FFF;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-header text-center">
                        <h5 data-aos="fade-left" data-aos-duration="900">
                            <img src="{{ asset('assets/img/icons/sub-logo1.svg') }}" alt=""> BLOXT LTD
                        </h5>
                        <div class="space16"></div>
                        <img src="{{ asset('assets/img/all-images/hero/boiler.png') }}" alt="" width="350"
                            style="margin-left:24px;">
                        <h1 class="text-center" data-aos="fade-left" data-aos-duration="1000">Fast, fixed price boiler
                            installs </h1>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="1100">
                            Get a stress-free A-rated boiler quote in seconds with no hidden costs, installed as fast as
                            next day.
                        </p>
                        <div class="space38"></div>
                        <div class="play-btns-area" data-aos="fade-left" data-aos-duration="1200">
                            <div class="btn-area1">
                                <a href="{{ route('get_quotation')}}" class="vl-btn6">GET FIXED PRICE <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="space38"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== ABOUT AREA STARTS =======-->
    <div class="about5 sp1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about5-images">
                        <div class="img1" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="100">
                            <img src="{{ asset('assets/img/all-images/about/bloxt_about.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading5">
                        <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z"
                                    fill="#b79825" />
                                <path
                                    d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z"
                                    fill="#b79825" />
                                <path
                                    d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z"
                                    fill="#b79825" />
                                <path
                                    d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z"
                                    fill="#b79825" />
                            </svg> About Us</h5>
                        <div class="space16"></div>
                        <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Bloxt's Privileged
                            Meeting with King Charles</h2>
                        <p>Bloxt were honoured to be invited to a private meeting with His Majesty, King Charles, in 2024 to
                            discuss our ongoing charity works. This special invitation followed on from our commitment to
                            supporting the Southport Community in the aftermath of the 2024 riots. Through our efforts in
                            rebuilding the community, we strived to make a meaningful difference, and it was a privilege to
                            share our progress and future plans with the King himself. </p>
                        <p>At Bloxt, we are dedicated to making a positive impact in our community and are extremely
                            passionate in regards to doing everything we can to help others who need it most.</p>
                        <div class="space32"></div>
                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                            <a href="{{ route('about')}}" class="vl-btn6">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->

    <!--===== CHOOSE AREA STARTS =======-->
    <div class="choose5 sp2">
        <div class="container">
            <div class="row align-items-center space-margin60">
                <div class="col-lg-5">
                    <div class="heading5">
                        <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z"
                                    fill="#b79825" />
                                <path
                                    d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z"
                                    fill="#b79825" />
                                <path
                                    d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z"
                                    fill="#b79825" />
                                <path
                                    d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z"
                                    fill="#b79825" />
                            </svg> Why Choose Us</h5>
                        <div class="space16"></div>
                        <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Keeping Homes Warm, Safe
                            & Efficient – Every Season.</h2>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-3">
                    <div class="btn-area1 text-end">
                        <div class="space24 d-lg-none d-block"></div>
                        <a href="{{ route('quote_boiler')}}" class="vl-btn6">Get a Quote <i
                                class="fa-solid fa-arrow-right"></i></a>
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
                            <a href="{{ route('about')}}" class="title">Trusted Expertise</a>
                            <div class="space16"></div>
                            <p>Our certified engineers bring years of experience in installing, repairing, and servicing
                                boilers. We follow strict industry standards, ensuring your home stays safe, warm, and
                                energy-efficient.</p>
                            <div class="space28"></div>
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
                            <a href="{{ route('about')}}" class="title">Reliable & Affordable Service</a>
                            <div class="space16"></div>
                            <p>We believe in transparent pricing with no hidden costs. From emergency repairs to routine
                                maintenance, we deliver reliable solutions that fit your budget without compromising on
                                quality.</p>
                            <div class="space28"></div>
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
                            <a href="{{ route('about')}}" class="title">Customer-First Approach</a>
                            <div class="space16"></div>
                            <p>At Bloxt Ltd, your comfort comes first. We provide fast response times, clear communication,
                                and a friendly team dedicated to giving you peace of mind—every step of the way.</p>
                            <div class="space28"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CHOOSE AREA ENDS =======-->


    @include('partials.testimonials_section')

    <!--===== FAQ AREA STARTS =======-->
    <div class="faq5 sp1">
        <div class="container">
            <div class="row align-items-center space-margin60">
                <div class="col-lg-7">
                    <div class="heading5">
                        <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z"
                                    fill="#b79825" />
                                <path
                                    d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z"
                                    fill="#b79825" />
                                <path
                                    d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z"
                                    fill="#b79825" />
                                <path
                                    d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z"
                                    fill="#b79825" />
                            </svg> FAQ's</h5>
                        <div class="space16"></div>
                        <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Reliable Boiler Care –
                            Warmth You Can Trust.</h2>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion-widget-area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="800">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. How often should my boiler be serviced?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We recommend having your boiler serviced annually to ensure it runs safely and
                                            efficiently, and to prevent unexpected breakdowns.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="900">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Do you offer emergency boiler repair services?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes, our engineers are available for emergency callouts to restore your heating
                                            and hot water as quickly as possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. How long does a typical boiler service take?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A standard service usually takes between 45 minutes to 1 hour, depending on the
                                            type and condition of your boiler.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        4. Will servicing my boiler help lower energy bills?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes. Regular servicing improves efficiency, which can reduce energy consumption
                                            and help save on monthly bills.</p>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        5. Do you work with all types of boilers?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>We service, repair, and install a wide range of boilers, including combi, system,
                                            and conventional models from leading brands.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="900">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        6. Can you replace my old boiler with a more energy-efficient one?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>Absolutely. We can assess your current system and recommend a modern,
                                            energy-efficient boiler that fits your home and budget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        7. Is your work guaranteed?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>Yes, all our services come with a guarantee for parts and labor, giving you peace
                                            of mind.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space30"></div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        8. Do you offer service plans or maintenance packages?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p>Yes, we provide flexible service plans that include annual servicing and priority
                                            support to keep your boiler in top condition year-round.</p>
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

    <!--===== MYHOME SECTION STARTS =======-->
    <div class="home-hub-section sp2" style="background: linear-gradient(135deg, #b79825 0%, #e7be2dff 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="home-hub-mascot text-center">
                        <img src="{{ asset('assets/img/logo/logo5.webp') }}" alt="BLOXT LTD"
                            style="max-width: 450px; width: 100%;filter: brightness(0) invert(1);">
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="home-hub-content">
                        <h2 style="color: #fff; font-size: 48px; font-weight: 700; margin-bottom: 24px;">
                            MyHome Portal
                        </h2>

                        <p style="color: #fff; font-size: 18px; margin-bottom: 24px;">
                            MyHome Portal is your personal dashboard for managing everything related to your home services,
                            all in one place.
                        </p>

                        <ul style="list-style: none; padding: 0; margin-bottom: 32px;">
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                Track and manage your orders in real time
                            </li>
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                Access your complete order history
                            </li>
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                View and download warranty documents
                            </li>
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                Log issues and support requests quickly
                            </li>
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                Manage your cover and service plans
                            </li>
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                Enjoy a faster, simplified checkout experience
                            </li>
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                Access helpful guides and support resources
                            </li>
                            <li
                                style="color: #fff; font-size: 16px; margin-bottom: 12px; display: flex; align-items: center;">
                                <span
                                    style="width: 8px; height: 8px; background: #000; border-radius: 50%; margin-right: 12px;"></span>
                                Receive exclusive discounts of up to 20% on leading brands
                            </li>
                        </ul>

                        <p style="color: #fff; font-size: 16px; margin-bottom: 32px;">
                            With a single, centralised portal for all your home services, we make it easier to stay
                            informed,
                            organised, and in control.
                        </p>

                        <a href="{{ route('register') }}" class="btn"
                            style="background: #fff; color: #b79825; padding: 14px 32px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block;">
                            LOGIN / CREATE ACCOUNT
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== MYHOME SECTION ENDS =======-->

    <!--===== HOW IT WORKS SECTION STARTS =======-->
    <div class="how-it-works-section sp2" style="background: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading5 text-center mb-5">
                        <h2 class="vl-section-title" data-aos="fade-up" data-aos-duration="1000"
                            style="font-size: 64px; font-weight: 700;">HOW IT <span
                                style="background: #fff; padding: 8px 24px; display: inline-block; transform: rotate(-2deg);">WORKS</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-duration="900">
                    <div class="how-it-works-card"
                        style="background: #fff; border-radius: 16px; padding: 48px; min-height: 400px; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <h3 style="color: #b79825; font-size: 48px; font-weight: 700; margin-bottom: 24px;">Browse</h3>
                            <h4 style="font-size: 24px; font-weight: 600; margin-bottom: 16px;">Select Your Boiler Service</h4>
                            <p style="font-size: 18px; color: #333; line-height: 1.6;">Explore our range of boiler services including installations, repairs, maintenance, and upgrades. Choose the solution that best fits your heating needs.</p>
                        </div>
                        <div class="text-end mt-4">
                            <!-- <img src="{{ asset('assets/img/all-images/phone-mockup.png') }}" alt="Phone Mockup"
                                style="max-width: 250px; width: 100%;"> -->
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-duration="1100">
                    <div class="how-it-works-card"
                        style="background: #fff; border-radius: 16px; padding: 48px; min-height: 400px; display: flex; align-items: center;">
                        <div class="row align-items-center w-100">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/all-images/boiler-unit.png') }}" alt="Boiler Unit"
                                    style="max-width: 200px; width: 100%;">
                            </div>
                            <div class="col-md-7">
                                <h3 style="color: #b79825; font-size: 48px; font-weight: 700; margin-bottom: 24px;">Book
                                </h3>
                                <h4 style="font-size: 24px; font-weight: 600; margin-bottom: 16px;">Pick Your Preferred Time</h4>
                                <p style="font-size: 18px; color: #333; line-height: 1.6;">Simply book a date and time that suits your schedule best. We respect your time and work around your convenience.</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-duration="900">
                    <div class="how-it-works-card"
                        style="background: #fff; border-radius: 16px; padding: 48px; min-height: 400px; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <h3 style="color: #b79825; font-size: 48px; font-weight: 700; margin-bottom: 24px;">Book</h3>
                            <h4 style="font-size: 24px; font-weight: 600; margin-bottom: 16px;">Pick Your Preferred Time</h4>
                            <p style="font-size: 18px; color: #333; line-height: 1.6;">Simply book a date and time that suits your schedule best. We respect your time and work around your convenience.</p>
                        </div>
                        <div class="text-end mt-4">
                            <!-- <img src="{{ asset('assets/img/all-images/phone-mockup.png') }}" alt="Phone Mockup"
                                style="max-width: 250px; width: 100%;"> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>
                <!-- <div class="col-lg-8 mb-4" data-aos="fade-up" data-aos-duration="1100">
                    <div class="how-it-works-card"
                        style="background: #fff; border-radius: 16px; padding: 48px; min-height: 400px; display: flex; align-items: center;">
                        <div class="row align-items-center w-100">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/img/all-images/boiler-unit.png') }}" alt="Boiler Unit"
                                    style="max-width: 200px; width: 100%;">
                            </div>
                            <div class="col-md-7">
                                <h3 style="color: #b79825; font-size: 48px; font-weight: 700; margin-bottom: 24px;">We Deliver
                                </h3>
                                <h4 style="font-size: 24px; font-weight: 600; margin-bottom: 16px;">Professional Service</h4>
                                <p style="font-size: 18px; color: #333; line-height: 1.6;">Our certified engineers deliver expert boiler installation, repair, or maintenance. Our customer care team supports you every step of the way.</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-8 mb-4" data-aos="fade-up" data-aos-duration="900">
                    <div class="how-it-works-card"
                        style="background: #fff; border-radius: 16px; padding: 48px; min-height: 400px; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <h3 style="color: #b79825; font-size: 48px; font-weight: 700; margin-bottom: 24px;">We Deliver</h3>
                            <h4 style="font-size: 24px; font-weight: 600; margin-bottom: 16px;">Professional Service</h4>
                            <p style="font-size: 18px; color: #333; line-height: 1.6;">Our certified engineers deliver expert boiler installation, repair, or maintenance. Our customer care team supports you every step of the way.</p>
                        </div>
                        <div class="text-end mt-4">
                            <!-- <img src="{{ asset('assets/img/all-images/phone-mockup.png') }}" alt="Phone Mockup"
                                style="max-width: 250px; width: 100%;"> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

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
                        <h5 class="vl-section-subtitle" data-aos="fade-left" data-aos-duration="900"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M9.4408 6.23921C9.70644 5.97357 9.83926 5.84075 9.9113 5.6821C9.96979 5.55333 9.99909 5.41323 9.99713 5.27181C9.99471 5.09758 9.92626 4.92266 9.78937 4.57282L8.00003 0L6.21065 4.5728C6.07375 4.92265 6.0053 5.09757 6.00288 5.2718C6.00092 5.41322 6.03022 5.55333 6.08871 5.6821C6.16076 5.84075 6.29358 5.97358 6.55923 6.23922L7.63346 7.31344C7.76446 7.44444 7.82996 7.50993 7.90594 7.53331C7.96725 7.55217 8.03281 7.55217 8.09412 7.5333C8.1701 7.50993 8.23559 7.44443 8.36659 7.31343L9.4408 6.23921Z"
                                    fill="#b79825" />
                                <path
                                    d="M9.4408 9.76079C9.70644 10.0264 9.83926 10.1593 9.9113 10.3179C9.96979 10.4467 9.99909 10.5868 9.99713 10.7282C9.99471 10.9024 9.92626 11.0773 9.78937 11.4272L8.00003 16L6.21065 11.4272C6.07375 11.0774 6.0053 10.9024 6.00288 10.7282C6.00092 10.5868 6.03022 10.4467 6.08871 10.3179C6.16076 10.1592 6.29358 10.0264 6.55923 9.76078L7.63346 8.68656C7.76446 8.55556 7.82996 8.49007 7.90594 8.46669C7.96725 8.44783 8.03281 8.44783 8.09412 8.46669C8.1701 8.49007 8.23559 8.55557 8.36659 8.68657L9.4408 9.76079Z"
                                    fill="#b79825" />
                                <path
                                    d="M16 8.00003L11.4272 9.78937C11.0773 9.92626 10.9024 9.99471 10.7282 9.99713C10.5868 9.99909 10.4467 9.96979 10.3179 9.9113C10.1593 9.83926 10.0264 9.70644 9.76079 9.4408L8.68657 8.36659C8.55557 8.23559 8.49007 8.1701 8.46669 8.09412C8.44783 8.03281 8.44783 7.96725 8.46669 7.90594C8.49007 7.82996 8.55556 7.76446 8.68656 7.63346L9.76078 6.55923C10.0264 6.29358 10.1592 6.16076 10.3179 6.08871C10.4467 6.03022 10.5868 6.00092 10.7282 6.00288C10.9024 6.0053 11.0774 6.07375 11.4272 6.21065L16 8.00003Z"
                                    fill="#b79825" />
                                <path
                                    d="M6.23921 9.4408C5.97357 9.70644 5.84075 9.83926 5.6821 9.9113C5.55333 9.96979 5.41323 9.99909 5.27181 9.99713C5.09758 9.99471 4.92266 9.92626 4.57282 9.78937L0 8.00003L4.5728 6.21065C4.92265 6.07375 5.09757 6.0053 5.2718 6.00288C5.41322 6.00092 5.55333 6.03022 5.6821 6.08871C5.84075 6.16076 5.97358 6.29358 6.23922 6.55923L7.31344 7.63346C7.44444 7.76446 7.50993 7.82996 7.53331 7.90594C7.55217 7.96725 7.55217 8.03281 7.5333 8.09412C7.50993 8.1701 7.44443 8.2356 7.31343 8.36659L6.23921 9.4408Z"
                                    fill="#b79825" />
                            </svg> Our Blog</h5>
                        <div class="space16"></div>
                        <h2 class="vl-section-title" data-aos="fade-left" data-aos-duration="1000">Latest News</h2>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-3">
                    <div class="btn-area1 text-end">
                        <div class="space24 d-lg-none d-block"></div>
                        <a href="{{ route('blog')}}" class="vl-btn6">View All Blogs <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="900">
                        <div class="vl-blog-1-item">
                            <div class="vl-blog-1-thumb image-anime">
                                <img src="{{ asset($blog->image ?? 'assets/img/default-blog.png') }}" alt="{{ $blog->title }}">
                            </div>

                            <div class="vl-blog-1-content">
                                <div class="vl-blog-meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <!-- Author Icon -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M16 18C15.705 17.1395 15.0545 16.3786 14.1513 15.8362C13.2472 15.2938 12.1387 15 11 15C9.86128 15 8.75276 15.2938 7.84869 15.8362C6.94548 16.3786 6.29589 17.1395 6 18"
                                                        stroke="#676B74" stroke-width="2" />
                                                    <path
                                                        d="M10.5 11C11.8807 11 13 9.88071 13 8.5C13 7.11929 11.8807 6 10.5 6C9.11929 6 8 7.11929 8 8.5C8 9.88071 9.11929 11 10.5 11Z"
                                                        stroke="#676B74" stroke-width="2" stroke-linecap="round" />
                                                    <path
                                                        d="M15.5 3H5.5C4.11929 3 3 4.11929 3 5.5V15.5C3 16.8807 4.11929 18 5.5 18H15.5C16.8807 18 18 16.8807 18 15.5V5.5C18 4.11929 16.8807 3 15.5 3Z"
                                                        stroke="#676B74" stroke-width="2" />
                                                </svg>
                                                {{ $blog->author ?? 'Admin' }}
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <!-- Date Icon -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
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
                                                </svg>
                                                {{ $blog->created_at->format('d M, Y') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="space16"></div>

                                <h4 class="vl-blog-1-title">
                                    <a href="{{ route('blog_details', $blog->id) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h4>

                                <div class="space32"></div>

                                <div class="vl-blog-1-icon">
                                    <a href="{{ route('blog_details', $blog->id) }}" class="vl-btn6">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->
@endsection