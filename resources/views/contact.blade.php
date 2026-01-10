@extends('layouts.master')
@section('content')

<div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('assets/images/background/8.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="container relative z-index-1000">
                        <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Our Service</div>
                            <h1>Get In Touch</h1>
                            <ul class="crumb">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <div class="fs-20 fw-600 no-bottom sm-hide">Air Conditioning and Heating Specialists</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>
            <!-- section close -->

            <div class="bg-color relative z-index-1000 mt-40 mb40">
                <div class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide" alt="">
                    <i class="icofont-envelope fs-36"></i>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-8">
                            <p>Whether you have a question, a suggestion, or just want to say hello, this is the place to do it. Please fill out the form below with your details and message, and we'll get back to you as soon as possible.</p>

                            
                            <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="contact.php">
                                <div class="row gx-4">
                                    <div class="col-lg-6 col-md-6 mb10">
                                        <div class="field-set">
                                            <span class="d-label">Name</span>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Email</span>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Phone</span>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-set mb20">
                                            <span class="d-label">Message</span>
                                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                    
                                
                                
                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>

                            </div>

                        <div class="col-lg-4">
                            <h4>Our Office</h4>
                            <div class="img-with-cap mb20">
                                <div class="d-title">Mon - Fri 08.00 - 18.00</div>
                                <div class="d-overlay"></div>
                                <img src="{{ asset('assets/images/misc/5.webp')}}" class="img-fullwidth rounded-1" alt="">
                            </div>

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color-2"></i>Office Location</div>
                            100 S Main St, New York, NY

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color-2"></i>Send a Message</div>
                            contact@coolair.com

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Call Us Directly</div>
                            +929 333 9296

                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
            </section>            

        </div>


    <div class="contact-maps-area" style="width:100%;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2373.8444539925836!2d-2.8497226999999996!3d53.48910899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b1854563adec5%3A0xc57b93c9dc90d084!2sNorth%20Mersey%20Business%20Centre!5e0!3m2!1sen!2s!4v1757453747729!5m2!1sen!2s"
            width="600" height="450" style="border:0;width:100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--===== CONTACT AREA ENDS =======-->

@endsection