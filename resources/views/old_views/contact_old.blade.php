@extends('layouts.master')
@section('content')
    @include('partials.page_title', ['title' => 'Contact Us', 'bgColor' => '#b79825'])

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
                                <a href="mailto:info@bloxt.co.uk">Sephton House, North Mersey Business Centre,
                                    Woodward Road, Knowsley Industrial Park, L33 7UY</a>
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
                                <h4>Call Us</h4>
                                <a href="tel:01513324244">0151 332 4244</a>
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
                                <a href="mailto:info@bloxt.co.uk">info@bloxt.co.uk
                                    <br> william@bloxt.co.uk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            @include('partials.contact_form')
        </div>
    </div>

    <div class="contact-maps-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2373.8444539925836!2d-2.8497226999999996!3d53.48910899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b1854563adec5%3A0xc57b93c9dc90d084!2sNorth%20Mersey%20Business%20Centre!5e0!3m2!1sen!2s!4v1757453747729!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--===== CONTACT AREA ENDS =======-->

@endsection