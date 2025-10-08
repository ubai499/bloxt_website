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
            <form id="boilerForm" method="POST" action="{{ route('quote_boiler.store') }}">
                @csrf

                <!-- NEW Step 1: Home Owner or Landlord -->
                <div class="step-section step1 active" data-step="1">
                    <h1 class="text-center mb-4">Are you a home owner or landlord?</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="2" data-field="owner_type"
                                data-value="Homeowner">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Homeowner</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="2" data-field="owner_type"
                                data-value="Landlord">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Landlord</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEW Step 2: Wall Mounted Boiler -->
                <div class="step-section step2" data-step="2">
                    <h1 class="text-center mb-4">Is your boiler mounted on the wall?</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="3" data-field="wall_mounted"
                                data-value="Yes">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Yes</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="3" data-field="wall_mounted" data-value="No">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">No</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEW Step 3: How Long Living in Home -->
                <div class="step-section step3" data-step="3">
                    <h1 class="text-center mb-4">How long do you see yourself living in your home?</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="service1-boxarea next-step" data-next="4" data-field="living_duration"
                                data-value="1-4 Years">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">1-4 Years</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="service1-boxarea next-step" data-next="4" data-field="living_duration"
                                data-value="5-10 Years">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">5-10 Years</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="service1-boxarea next-step" data-next="4" data-field="living_duration"
                                data-value="11+ Years">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">11+ Years</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEW Step 4: Boiler Same Place -->
                <div class="step-section step4" data-step="4">
                    <h1 class="text-center mb-4">Would you like new boiler in the same place?</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="5" data-field="same_place" data-value="Yes">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Yes</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="service1-boxarea next-step" data-next="5" data-field="same_place" data-value="No">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">No</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEW Step 5: Current Boiler Location -->
                <div class="step-section step5" data-step="5">
                    <h1 class="text-center mb-4">Where is your boiler currently located?</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                data-value="Utility Room">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/utility_room.png')}}" alt="">
                                    </div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Utility Room</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                data-value="Loft">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Loft</a></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                data-value="Bedroom">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Bedroom</a></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                data-value="Kitchen">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/kitchen.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Kitchen</a></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                data-value="Other">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Other</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEW Step 6: Where to Move Boiler -->
                <div class="step-section step6" data-step="6">
                    <h1 class="text-center mb-4">Where would you like it moved to?</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                data-value="Same Room">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Same Room</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                data-value="Garage">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/garage.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Garage</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                data-value="Kitchen">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/kitchen.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Kitchen</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                data-value="Loft">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Loft</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                data-value="Bedroom">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Bedroom</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                data-value="Airing Cupboard">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/airing_cupboard.png')}}" alt="">
                                    </div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Airing Cupboard</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                data-value="Somewhere Else">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Somewhere Else</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ORIGINAL Step 1 (Now Step 8) -->
                <div class="step-section step8" data-step="8">
                    <h1 class="text-center mb-4">Which fuel heats your home?</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="9" data-field="fuel" data-value="Mains Gas">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Mains Gas</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="9" data-field="fuel" data-value="LPG">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">LPG</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="9" data-field="fuel" data-value="Oil">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Oil</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="9" data-field="fuel" data-value="Unknown">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Unknown</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-section step9" data-step="9">
                    <h1 class="text-center mb-4">Type of current boiler?</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
                                data-value="Combi Boiler">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Combi Boiler</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
                                data-value="Regular Boiler">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">Regular Boiler</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
                                data-value="System Boiler">
                                <center>
                                    <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                </center>
                                <div class="space38"></div>
                                <div class="content-area text-center"><a href="#" class="title">System Boiler</a></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
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
                <div class="step-section step10" data-step="10">
                    <div class="step3-noncombi conditional">
                        <h1 class="text-center mb-4">How fast does water flow from your cold tap?</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="11" data-field="water_flow"
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
                                <div class="service1-boxarea next-step" data-next="11" data-field="water_flow"
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
                                <div class="service1-boxarea next-step" data-next="11" data-field="water_flow"
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


                <div class="step-section step11" data-step="11">
                    <div class="step4-slow conditional">
                        <h1 class="text-center mb-4">How would you describe your current boiler?</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="12" data-field="boiler_working"
                                    data-value="Working">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Yes</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="12" data-field="boiler_working"
                                    data-value="Not Working">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Not Working</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="12" data-field="boiler_working"
                                    data-value="Old & Inefficient">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Old & Inefficient</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step12" data-step="12">
                    <div class="step5-non-slow conditional">
                        <h1 class="text-center mb-4">Roughly how old is your current boiler?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="13" data-field="current_boiler_age"
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
                                <div class="service1-boxarea next-step" data-next="13" data-field="current_boiler_age"
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
                                <div class="service1-boxarea next-step" data-next="13" data-field="current_boiler_age"
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
                                <div class="service1-boxarea next-step" data-next="13" data-field="current_boiler_age"
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

                <div class="step-section step13" data-step="13">
                    <div class="step6-non-slow conditional">
                        <h1 class="text-center mb-4">Move boiler location?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="14" data-field="move_boiler"
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
                                <div class="service1-boxarea next-step" data-next="14" data-field="move_boiler"
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

                <div class="step-section step14" data-step="14">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Current boiler location?</h1>
                        <div class="row">
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="15" data-field="current_boiler_location"
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
                                <div class="service1-boxarea next-step" data-next="15" data-field="current_boiler_location"
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
                                <div class="service1-boxarea next-step" data-next="15" data-field="current_boiler_location"
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
                                <div class="service1-boxarea next-step" data-next="15" data-field="current_boiler_location"
                                    data-value="Airing Cupboard">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/airing_cupboard.png')}}"
                                                alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Airing Cupboard</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="15" data-field="current_boiler_location"
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

                <div class="step-section step15" data-step="15">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">New boiler location?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="new_boiler_location"
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
                                <div class="service1-boxarea next-step" data-next="16" data-field="new_boiler_location"
                                    data-value="Same Floor">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Same Floor
                                            <br />(+£795)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="new_boiler_location"
                                    data-value="Another Floor">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Another Floor
                                            <br />(+£895)</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="16" data-field="new_boiler_location"
                                    data-value="Loft/Attic">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">Loft/Attic
                                            <br />(+£895)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                </div>

                <div class="step-section step16" data-step="16">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">What type of home do you live in?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="17" data-field="home_type"
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
                                <div class="service1-boxarea next-step" data-next="17" data-field="home_type"
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
                                <div class="service1-boxarea next-step" data-next="17" data-field="home_type"
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
                                <div class="service1-boxarea next-step" data-next="17" data-field="home_type"
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
                                <div class="service1-boxarea next-step" data-next="17" data-field="home_type"
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

                <div class="step-section step17" data-step="17">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Which floor number do you live on?</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-3">
                                <div class="service1-boxarea next-step" data-next="18" data-field="apartment_floor"
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
                                <div class="service1-boxarea next-step" data-next="18" data-field="apartment_floor"
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
                                <div class="service1-boxarea next-step" data-next="18" data-field="apartment_floor"
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

                <div class="step-section step18" data-step="18">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How many bedrooms?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms" data-value="1">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">1</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms" data-value="2">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">2</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms" data-value="3">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">3</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms" data-value="4">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">4</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms"
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

                <div class="step-section step19" data-step="19">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How many bathtubs?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="20" data-field="bathtubs" data-value="0">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">0</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="20" data-field="bathtubs" data-value="1">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">1</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="20" data-field="bathtubs" data-value="2">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center"><a href="#" class="title">2</a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="20" data-field="bathtubs"
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

                <div class="step-section step20" data-step="20">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How many separate shower cubicles?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="21" data-field="shower_cubicles"
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
                                <div class="service1-boxarea next-step" data-next="21" data-field="shower_cubicles"
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
                                <div class="service1-boxarea next-step" data-next="21" data-field="shower_cubicles"
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
                                <div class="service1-boxarea next-step" data-next="21" data-field="shower_cubicles"
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

                <div class="step-section step21" data-step="21">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Where would you like the flue to exit after boiler relocation?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="22" data-field="exit_after_relocation"
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
                                <div class="service1-boxarea next-step" data-next="22" data-field="exit_after_relocation"
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

                <div class="step-section step22" data-step="22">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How long would your boiler flue be after boiler relocation?</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="23" data-field="bolier_flue_length"
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
                                <div class="service1-boxarea next-step" data-next="23" data-field="bolier_flue_length"
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
                                <div class="service1-boxarea next-step" data-next="23" data-field="bolier_flue_length"
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
                                <div class="service1-boxarea next-step" data-next="23" data-field="bolier_flue_length"
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
                                <div class="service1-boxarea next-step" data-next="23" data-field="bolier_flue_length"
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

                <div class="step-section step23" data-step="23">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">How close is your flue to a door or window?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="24"
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
                                <div class="service1-boxarea next-step" data-next="24"
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

                <div class="step-section step24" data-step="24">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Will the new flue go out of a flat or pitched (sloped) roof?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="25" data-field="roof_type"
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
                                <div class="service1-boxarea next-step" data-next="25" data-field="roof_type"
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

                <div class="step-section step25" data-step="25">
                    <div class="step7-non-slow conditional">
                        <h1 class="text-center mb-4">Will the new flue go out of a flat or pitched (sloped) roof?</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-3">
                                <div class="service1-boxarea next-step" data-next="26" data-field="flue_on_roof"
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
                                <div class="service1-boxarea next-step" data-next="26" data-field="flue_on_roof"
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

                <div class="step-section step26" data-step="26">
                    <h5 class="mb-4">Full Name</h5>
                    <input type="text" name="full_name" class="postcode-input" placeholder="Enter Your Full Name">

                    <h5 class="mb-4">Email</h5>
                    <input type="email" name="email" class="postcode-input" placeholder="Enter Your Email">

                    <h5 class="mb-4">Phone Number</h5>
                    <input type="text" name="phone_number" class="postcode-input" placeholder="Enter Your Phone Number">

                    <h5 class="mb-4">Postcode</h5>
                    <input type="text" name="postcode" class="postcode-input" placeholder="Enter Your Postcode">
                    <button type="submit" class="submit-btn">Submit</a>
                </div>


                <!-- Hidden inputs for storing answers -->
                <input type="hidden" name="owner_type">
                <input type="hidden" name="wall_mounted">
                <input type="hidden" name="living_duration">
                <input type="hidden" name="same_place">
                <input type="hidden" name="current_location">
                <input type="hidden" name="move_to_location">
                <input type="hidden" name="fuel">
                <input type="hidden" name="boiler_type">
                <input type="hidden" name="water_flow">
                <input type="hidden" name="boiler_working">
                <input type="hidden" name="current_boiler_age">
                <input type="hidden" name="move_boiler">
                <input type="hidden" name="current_boiler_location">
                <input type="hidden" name="new_boiler_location">
                <input type="hidden" name="home_type">
                <input type="hidden" name="apartment_floor">
                <input type="hidden" name="bedrooms">
                <input type="hidden" name="bathtubs">
                <input type="hidden" name="shower_cubicles">
                <input type="hidden" name="exit_after_relocation">
                <input type="hidden" name="bolier_flue_length">
                <input type="hidden" name="boiler_flue_close_to_window">
                <input type="hidden" name="roof_type">
                <input type="hidden" name="flue_on_roof">
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
                const targetStep = document.querySelector(`.step${step}`);
                if (targetStep) {
                    targetStep.classList.add("active");
                }
            }

            // Function to update hidden inputs
            function updateHiddenInput(field, value) {
                const hiddenInput = document.querySelector(`input[name="${field}"]`);
                if (hiddenInput) {
                    hiddenInput.value = value;
                } else {
                    // Create hidden input if it doesn't exist
                    const newInput = document.createElement('input');
                    newInput.type = 'hidden';
                    newInput.name = field;
                    newInput.value = value;
                    document.getElementById('boilerForm').appendChild(newInput);
                }
            }

            // Handle Next Step Click
            document.querySelectorAll(".next-step").forEach(btn => {
                btn.addEventListener("click", function (e) {
                    e.preventDefault();

                    let next = parseInt(this.dataset.next);
                    let field = this.dataset.field;
                    let value = this.dataset.value;

                    // Store in formData and update hidden input
                    if (field) {
                        formData[field] = value;
                        updateHiddenInput(field, value);
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

            // Handle postcode input
            const postcodeInput = document.querySelector('.postcode-input');
            if (postcodeInput) {
                postcodeInput.addEventListener('input', function () {
                    updateHiddenInput('postcode', this.value);
                });
            }

            // Handle form submission
            const form = document.getElementById('boilerForm');
            if (form) {
                form.addEventListener('submit', function (e) {
                    // Update postcode one more time before submit
                    if (postcodeInput) {
                        updateHiddenInput('postcode', postcodeInput.value);
                    }

                    // Optional: Log formData to console for debugging
                    console.log('Form Data:', formData);
                    console.log('Hidden Inputs:', Array.from(form.querySelectorAll('input[type="hidden"]')).map(i => ({
                        name: i.name,
                        value: i.value
                    })));
                });
            }

            // Start at Step 1
            showStep(1);
        });
    </script>

@endsection