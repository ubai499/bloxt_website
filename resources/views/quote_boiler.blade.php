@extends('layouts.master')
@section('content')
    <style>
        .step-section {
            display: none;
        }

        .step-section.active {
            display: block;
        }

        .back-btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
        }

        .postcode-input {
            width: 100%;
            max-width: 300px;
            padding: 12px 15px;
            border: 2px solid #007bff;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .postcode-input:focus {
            border-color: #0056b3;
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.4);
        }

        .submit-btn {
            display: inline-block;
            padding: 12px 30px;
            background: #007bff;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #0056b3;
        }
    </style>

    <!--===== HERO AREA STARTS =======-->
    <div class="inner-header-section"
        style="background-image: url({{asset('assets/img/all-images/bg/hero-bg1.png')}}); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-heading-area">
                        <h2>Get a Quote</h2>
                        <div class="space18"></div>
                        <div class="btn-area1">
                            <a href="{{url('/')}}">Home <i class="fa-solid fa-angle-right"></i> <span>Boiler
                                    Quotation</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-img1">
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->



    <div class="service-inner-section sp2">
        <div class="container">
            <form id="boilerForm" method="POST" action="/submit-boiler">
                @csrf

                <!-- Step 1 -->
                <div class="step-section step1 active" data-step="1">
                    <h1 class="text-center mb-4">Which fuel heats your home?</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="2" data-field="fuel" data-value="Mains Gas">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Mains Gas</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="2" data-field="fuel" data-value="LPG">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">LPG</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-section step2" data-step="2">
                    <h1 class="text-center mb-4">Type of current boiler?</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="3" data-field="boiler_type"
                                data-value="Combi Boiler">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Combi Boiler</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="3" data-field="boiler_type"
                                data-value="Regular Boiler">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Regular Boiler</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="3" data-field="boiler_type"
                                data-value="System Boiler">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">System Boiler</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="3" data-field="boiler_type"
                                data-value="Back Boiler">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Back Boiler</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="1">← Back</a> -->
                </div>

                <!-- Step 3 -->
                <div class="step-section step3" data-step="3">
                    <!-- COMBI ONLY -->
                    <div class="step3-combi conditional">
                        <h1 class="text-center mb-4">Is your current boiler working?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="4" data-field="boiler_working"
                                    data-value="Yes">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Yes</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="4" data-field="boiler_working"
                                    data-value="No">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">No</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NON-COMBI -->
                    <div class="step3-noncombi conditional">
                        <h1 class="text-center mb-4">How fast does water flow from your cold tap?</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="4" data-field="water_flow"
                                    data-value="Fast">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/water_flow.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Fast</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="4" data-field="water_flow"
                                    data-value="Average">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/water_flow.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Average</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="4" data-field="water_flow"
                                    data-value="Slow">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/water_flow.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Slow</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="2">← Back</a> -->
                </div>


                <div class="step-section step4" data-step="4">
                    <div class="step4-non-slow conditional">
                        <h1 class="text-center mb-4">Do you want to convert to a combi boiler?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="5" data-field="boiler_working"
                                    data-value="Yes">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Yes</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="5" data-field="boiler_working"
                                    data-value="No">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">No</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step4-slow conditional">
                        <h1 class="text-center mb-4">Is your current boiler working?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="4" data-field="boiler_working"
                                    data-value="Yes">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Yes</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="4" data-field="boiler_working"
                                    data-value="No">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">No</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step5" data-step="5">
                    <div class="step5-non-slow conditional">
                        <h1 class="text-center mb-4">Roughly how old is your current boiler?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_boiler_age"
                                    data-value="0-10 Years">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">0-10 Years</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_boiler_age"
                                    data-value="11-20 Years">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">11-20 Years</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_boiler_age"
                                    data-value="21-25 Years">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">21-25 Years</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_boiler_age"
                                    data-value="26+ Years">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">26+ Years</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="4">← Back</a> -->
                </div>

                <div class="step-section step6" data-step="6">
                    <div class="step6-non-slow conditional">
                        <h1 class="text-center mb-4">Move boiler location?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="7" data-field="move_boiler"
                                    data-value="Yes">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Yes</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="7" data-field="move_boiler"
                                    data-value="No">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">No</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="5">← Back</a> -->
                </div>

                <div class="step-section step7" data-step="7">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Current boiler location?</h1>
                        <div class="row">
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="8" data-field="current_boiler_location"
                                    data-value="Kitchen">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/kitchen.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Kitchen</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="8" data-field="current_boiler_location"
                                    data-value="Utility Room">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/utility_room.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Utility Room</a></div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="8" data-field="current_boiler_location"
                                    data-value="Garage">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/garage.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Garage</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="8" data-field="current_boiler_location"
                                    data-value="Airing Cupboard">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/airing_cupboard.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Airing Cupboard</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="8" data-field="current_boiler_location"
                                    data-value="Other">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Other</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="6">← Back</a> -->
                </div>

                <div class="step-section step8" data-step="8">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">New boiler location?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="new_boiler_location"
                                    data-value="Same Room">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Same Room (+£495)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="new_boiler_location"
                                    data-value="Same Floor">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Same Floor <br/>(+£795)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="new_boiler_location"
                                    data-value="Another Floor">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Another Floor
                                            <br/>(+£895)</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="new_boiler_location"
                                    data-value="Loft/Attic">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Loft/Attic <br/>(+£895)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step9" data-step="9">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">What type of home do you live in?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="home_type"
                                    data-value="Semi-Detached">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Semi-Detached</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="home_type"
                                    data-value="Detached">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Detached</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="home_type"
                                    data-value="Terraced">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Terraced</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="home_type"
                                    data-value="Bungalow">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Bungalow</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="home_type"
                                    data-value="Apartment">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Apartment</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step10" data-step="10">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Which floor number do you live on?</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-3">
                                <div class="service1-boxarea next-step" data-next="11" data-field="apartment_floor"
                                    data-value="Ground Floor">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Ground Floor</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="service1-boxarea next-step" data-next="11" data-field="apartment_floor"
                                    data-value="First Floor">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">First Floor</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="service1-boxarea next-step" data-next="11" data-field="apartment_floor"
                                    data-value="Second Floor +">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Second Floor +</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step11" data-step="11">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How many bedrooms?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="12" data-field="bedrooms" data-value="1">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">1</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="12" data-field="bedrooms" data-value="2">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">2</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="12" data-field="bedrooms" data-value="3">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">3</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="12" data-field="bedrooms" data-value="4">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">4</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="12" data-field="bedrooms"
                                    data-value="5+">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">5+</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step12" data-step="12">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How many bathtubs?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="13" data-field="bathtubs" data-value="0">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">0</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="13" data-field="bathtubs" data-value="1">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">1</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="13" data-field="bathtubs" data-value="2">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">2</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="13" data-field="bathtubs"
                                    data-value="3+">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">3+</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step13" data-step="13">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How many separate shower cubicles?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="14" data-field="shower_cubicles"
                                    data-value="0">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">0</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="14" data-field="shower_cubicles"
                                    data-value="1">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">1</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="14" data-field="shower_cubicles"
                                    data-value="2">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">2</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="14" data-field="shower_cubicles"
                                    data-value="3+">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">3+</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step14" data-step="14">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Where would you like the flue to exit after boiler relocation?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="15" data-field="exit_after_relocation"
                                    data-value="External Wall">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">External Wall</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="15" data-field="exit_after_relocation"
                                    data-value="Roof">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Roof</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step15" data-step="15">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How long would your boiler flue be after boiler relocation?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="bolier_flue_length"
                                    data-value="Under 1 Metre">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Under 1 Metre</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="bolier_flue_length"
                                    data-value="1-2 Metre">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">1-2 Metre</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="bolier_flue_length"
                                    data-value="2-3 Metre">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">2-3 Metre</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="bolier_flue_length"
                                    data-value="3+ Metre">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">3+ Metre</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="bolier_flue_length"
                                    data-value="Unsure">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Unsure</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step16" data-step="16">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How close is your flue to a door or window?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="17"
                                    data-field="boiler_flue_close_to_window" data-value="More Than 30cm">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">More Than 30cm</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="17"
                                    data-field="boiler_flue_close_to_window" data-value="Less Than 30cm">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Less Than 30cm</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step17" data-step="17">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Will the new flue go out of a flat or pitched (sloped) roof?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="18" data-field="roof_type"
                                    data-value="Pitched">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Pitched</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="18" data-field="roof_type"
                                    data-value="Flat">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Flat</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step18" data-step="18">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Will the new flue go out of a flat or pitched (sloped) roof?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="19" data-field="flue_on_roof"
                                    data-value="Higher Up">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Higher Up</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="19" data-field="flue_on_roof"
                                    data-value="Lower Down">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Lower Down</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step19" data-step="19">
                    <h1 class="mb-4">What's your postcode?</h1>
                    <input type="text" class="postcode-input" placeholder="Enter Your Postcode">
                    <a href="#" class="submit-btn">Submit</a>
                </div>


                <!-- Hidden inputs for storing answers -->
                <input type="hidden" name="fuel">
                <input type="hidden" name="boiler_type">
                <input type="hidden" name="boiler_working">
                <input type="hidden" name="current_boiler_age">
                <input type="hidden" name="move_boiler">
                <input type="hidden" name="home_type">
                <input type="hidden" name="apartment_floor">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const steps = document.querySelectorAll(".step-section");
            let formData = {};

            function showStep(step) {
                steps.forEach(s => s.classList.remove("active"));
                document.querySelector(`.step${step}`).classList.add("active");
            }

            // Handle Next Step Click
            document.querySelectorAll(".next-step").forEach(btn => {
                btn.addEventListener("click", function (e) {
                    e.preventDefault();

                    let next = parseInt(this.dataset.next);
                    let field = this.dataset.field;
                    let value = this.dataset.value;

                    if (field) formData[field] = value;

                    // 🚦 CONDITIONAL LOGIC
                    if (field === "boiler_type") {
                        if (value === "Combi Boiler") {
                            showStep(3);
                            document.querySelector(".step3-combi").style.display = "block";
                            document.querySelector(".step3-noncombi").style.display = "none";
                            return;
                        }
                        if (value === "Regular Boiler" || value === "System Boiler") {
                            showStep(3);
                            document.querySelector(".step3-combi").style.display = "none";
                            document.querySelector(".step3-noncombi").style.display = "block";
                            return;
                        }
                        if (value === "Back Boiler") {
                            showStep(3);
                            document.querySelector(".step3-combi").style.display = "none";
                            document.querySelector(".step3-noncombi").style.display = "block";
                            return;
                        }
                    }

                    if (field === "water_flow") {
                        if (formData["boiler_type"] === "Back Boiler") {
                            if (value === "Slow") {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Sorry',
                                    text: 'We need more information. Please call us for more details.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            } else {
                                // Jump directly to house type (step9)
                                showStep(9);
                                return;
                            }
                        }

                        if (formData["boiler_type"] === "Regular Boiler" || formData["boiler_type"] === "System Boiler") {
                            if (value === "Slow") {
                                // Go to "Is boiler working" (step4 slow section)
                                showStep(4);
                                document.querySelector(".step4-slow").style.display = "block";
                                document.querySelector(".step4-non-slow").style.display = "none";
                                return;
                            } else {
                                // Go to "Convert to combi" (step4 non-slow)
                                showStep(4);
                                document.querySelector(".step4-slow").style.display = "none";
                                document.querySelector(".step4-non-slow").style.display = "block";
                                return;
                            }
                        }
                    }

                    if (field === "boiler_working") {
                        if (formData["boiler_type"] === "Combi Boiler") {
                            showStep(5); // straight to age
                            return;
                        }
                        if (formData["boiler_type"] === "Regular Boiler" || formData["boiler_type"] === "System Boiler") {
                            showStep(5);
                            return;
                        }
                    }

                    if (field === "current_boiler_age") {
                        if (formData["boiler_type"] === "Combi Boiler") {
                            showStep(6);
                            return;
                        }
                        if (formData["boiler_type"] === "Regular Boiler" || formData["boiler_type"] === "System Boiler") {
                            showStep(9);
                            return;
                        }
                    }

                    if (field === "move_boiler") {
                        if (value === "Yes") {
                            showStep(7); // current location
                        } else {
                            showStep(9); // go to house type
                        }
                        return;
                    }

                    if (field === "home_type") {
                        formData["home_type"] = value;
                        if (value === "Apartment") {
                            showStep(10); // Ask floor number
                        } else {
                            showStep(11); // Skip floor, ask bedrooms directly
                        }
                        return;
                    }

                    if (field === "apartment_floor") {
                        formData["apartment_floor"] = value;

                        if (value === "Second Floor +") {
                            Swal.fire({
                                icon: 'error',
                                title: 'Sorry',
                                text: 'We need more information. Please call us for more details.',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            showStep(11);
                        }
                        return;
                    }

                    if (field === "exit_after_relocation") {
                        formData["exit_after_relocation"] = value;

                        if (value === "Roof") {
                            formData["came_from_step15"] = false; // mark path
                            showStep(17);
                        } else {
                            formData["came_from_step15"] = true; // mark path
                            showStep(15);
                        }
                        return;
                    }

                    if (field === "boiler_flue_close_to_window") {
                        formData["boiler_flue_close_to_window"] = value;
                        showStep(19); // skip directly if came via step15
                        return;
                    }







                    // Default Next Step
                    showStep(next);
                });
            });

            // Handle Back Button
            document.querySelectorAll(".back-btn").forEach(btn => {
                btn.addEventListener("click", function (e) {
                    e.preventDefault();
                    let back = this.dataset.back;
                    showStep(back);
                });
            });

            // Start at Step 1
            showStep(1);
        });
    </script>

@endsection