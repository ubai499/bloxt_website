@extends('layouts.master')
@section('content')
    <style>
        .quote-form-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .step-section {
            display: none;
            animation: fadeIn 0.5s ease-in;
        }

        .step-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .step-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .step-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .step-description {
            font-size: 16px;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }

        .progress-bar-container {
            max-width: 800px;
            margin: 0 auto 50px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #007bff, #0056b3);
            border-radius: 10px;
            transition: width 0.5s ease;
            width: 0%;
        }

        .progress-text {
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            font-weight: 500;
        }

        .service1-boxarea {
            background: #fff;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .service1-boxarea:hover {
            border-color: #007bff;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.15);
        }

        .service1-boxarea .icons {
            margin-bottom: 15px;
        }

        .service1-boxarea .icons img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .service1-boxarea .title {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }

        .option-description {
            font-size: 13px;
            color: #6c757d;
            line-height: 1.4;
            margin-top: 5px;
        }

        .back-btn {
            margin-top: 30px;
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background: #6c757d;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .back-btn:hover {
            background: #5a6268;
            transform: translateX(-3px);
        }

        .postcode-input {
            width: 100%;
            max-width: 400px;
            padding: 14px 18px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 16px;
            outline: none;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            display: block;
        }

        .postcode-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.1);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .submit-btn {
            display: inline-block;
            padding: 14px 40px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
            margin-top: 20px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
        }

        .info-badge {
            display: inline-block;
            background: #e7f3ff;
            color: #0066cc;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-left: 10px;
            font-weight: 500;
        }

        .step-number {
            display: inline-block;
            background: #007bff;
            color: #fff;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            line-height: 35px;
            text-align: center;
            font-weight: 600;
            margin-right: 10px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .step-header h1 {
                font-size: 24px;
            }

            .step-description {
                font-size: 14px;
            }

            .service1-boxarea {
                padding: 20px 15px;
            }
        }
    </style>

    @include('partials.page_title', ['title' => 'Get a Quote', 'bgColor' => '#b79825'])



    <div class="service-inner-section sp2">
        <div class="container">
            <div class="quote-form-container">
                <!-- Progress Bar -->
                <div class="progress-bar-container">
                    <div class="progress-bar">
                        <div class="progress-fill" id="progressFill"></div>
                    </div>
                    <div class="progress-text" id="progressText">Step 1 of 26</div>
                </div>

                <form id="boilerForm" method="POST" action="{{ route('quote_boiler.store') }}">
                    @csrf

                    <!-- NEW Step 1: Home Owner or Landlord -->
                    <div class="step-section step1 active" data-step="1">
                        <div class="step-header">
                            <span class="step-number">1</span>
                            <h1>Are you a home owner or landlord?</h1>
                            <p class="step-description">This helps us understand your situation and provide the most
                                relevant quote for your needs.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="2" data-field="owner_type"
                                    data-value="Homeowner">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Homeowner</a>
                                        <div class="option-description">You own and live in this property</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="2" data-field="owner_type"
                                    data-value="Landlord">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Landlord</a>
                                        <div class="option-description">You own this property but rent it out to tenants
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NEW Step 2: Wall Mounted Boiler -->
                    <div class="step-section step2" data-step="2">
                        <div class="step-header">
                            <span class="step-number">2</span>
                            <h1>Is your boiler mounted on the wall?</h1>
                            <p class="step-description">Most modern boilers are wall-mounted. This helps us determine the
                                installation requirements.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="3" data-field="wall_mounted"
                                    data-value="Yes">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Yes</a>
                                        <div class="option-description">Your boiler is attached to the wall</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="3" data-field="wall_mounted"
                                    data-value="No">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">No</a>
                                        <div class="option-description">Your boiler is floor-standing or in a different
                                            position</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="1">← Back</a>
                    </div>

                    <!-- NEW Step 3: How Long Living in Home -->
                    <div class="step-section step3" data-step="3">
                        <div class="step-header">
                            <span class="step-number">3</span>
                            <h1>How long do you see yourself living in your home?</h1>
                            <p class="step-description">This helps us recommend the best boiler investment for your
                                situation.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="4" data-field="living_duration"
                                    data-value="1-4 Years">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">1-4 Years</a>
                                        <div class="option-description">Short-term stay</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="4" data-field="living_duration"
                                    data-value="5-10 Years">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">5-10 Years</a>
                                        <div class="option-description">Medium-term stay</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="service1-boxarea next-step" data-next="4" data-field="living_duration"
                                    data-value="11+ Years">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">11+ Years</a>
                                        <div class="option-description">Long-term or permanent home</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="2">← Back</a>
                    </div>

                    <!-- NEW Step 4: Boiler Same Place -->
                    <div class="step-section step4" data-step="4">
                        <div class="step-header">
                            <span class="step-number">4</span>
                            <h1>Would you like the new boiler in the same place?</h1>
                            <p class="step-description">Installing in the same location is usually faster and more
                                cost-effective. Moving it may require additional work.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="5" data-field="same_place"
                                    data-value="Yes">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Yes</a>
                                        <div class="option-description">Keep it in the current location <span
                                                class="info-badge">Most Common</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="service1-boxarea next-step" data-next="5" data-field="same_place"
                                    data-value="No">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/cross.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">No</a>
                                        <div class="option-description">Move it to a different location</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="3">← Back</a>
                    </div>

                    <!-- NEW Step 5: Current Boiler Location -->
                    <div class="step-section step5" data-step="5">
                        <div class="step-header">
                            <span class="step-number">5</span>
                            <h1>Where is your boiler currently located?</h1>
                            <p class="step-description">Knowing the current location helps us plan the installation and
                                estimate any relocation costs.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                    data-value="Utility Room">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/utility_room.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Utility Room</a>
                                        <div class="option-description">A separate utility or laundry room</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                    data-value="Loft">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Loft</a>
                                        <div class="option-description">In the attic or loft space</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                    data-value="Bedroom">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Bedroom</a>
                                        <div class="option-description">In a bedroom</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                    data-value="Kitchen">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/kitchen.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Kitchen</a>
                                        <div class="option-description">In the kitchen area</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="service1-boxarea next-step" data-next="6" data-field="current_location"
                                    data-value="Other">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Other</a>
                                        <div class="option-description">Different location</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="4">← Back</a>
                    </div>

                    <!-- NEW Step 6: Where to Move Boiler -->
                    <div class="step-section step6" data-step="6">
                        <div class="step-header">
                            <span class="step-number">6</span>
                            <h1>Where would you like it moved to?</h1>
                            <p class="step-description">Choose your preferred location for the new boiler. Different
                                locations may affect installation costs.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                    data-value="Same Room">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Same Room</a>
                                        <div class="option-description">Different spot in current room</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                    data-value="Garage">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/garage.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Garage</a>
                                        <div class="option-description">Move to garage space</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                    data-value="Kitchen">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/kitchen.png')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Kitchen</a>
                                        <div class="option-description">Install in kitchen area</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                    data-value="Loft">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Loft</a>
                                        <div class="option-description">Move to loft or attic</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                    data-value="Bedroom">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Bedroom</a>
                                        <div class="option-description">Install in a bedroom</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                    data-value="Airing Cupboard">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/airing_cupboard.png')}}"
                                                alt="">
                                        </div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Airing Cupboard</a>
                                        <div class="option-description">Traditional airing cupboard location</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="service1-boxarea next-step" data-next="8" data-field="move_to_location"
                                    data-value="Somewhere Else">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/other.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Somewhere Else</a>
                                        <div class="option-description">Other location not listed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="5">← Back</a>
                    </div>

                    <!-- ORIGINAL Step 1 (Now Step 8) -->
                    <div class="step-section step8" data-step="8">
                        <div class="step-header">
                            <span class="step-number">8</span>
                            <h1>Which fuel heats your home?</h1>
                            <p class="step-description">This determines what type of boiler we can install. Most homes in
                                the UK use mains gas.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="fuel"
                                    data-value="Mains Gas">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Mains Gas</a>
                                        <div class="option-description">Connected to gas grid <span class="info-badge">Most
                                                Common</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="fuel" data-value="LPG">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">LPG</a>
                                        <div class="option-description">Liquefied Petroleum Gas (bottled)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="fuel" data-value="Oil">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Oil</a>
                                        <div class="option-description">Heating oil system</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="9" data-field="fuel"
                                    data-value="Unknown">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/gas.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Unknown</a>
                                        <div class="option-description">Not sure what fuel type</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="6">← Back</a>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-section step9" data-step="9">
                        <div class="step-header">
                            <span class="step-number">9</span>
                            <h1>What type is your current boiler?</h1>
                            <p class="step-description">Different boiler types have different installation requirements. If
                                you're unsure, check your boiler's manual or look for a label on the unit.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
                                    data-value="Combi Boiler">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Combi Boiler</a>
                                        <div class="option-description">Heats water on demand, no tank needed <span
                                                class="info-badge">Popular</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
                                    data-value="Regular Boiler">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Regular Boiler</a>
                                        <div class="option-description">Has a hot water cylinder/tank</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
                                    data-value="System Boiler">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">System Boiler</a>
                                        <div class="option-description">Has a hot water cylinder, no cold water tank</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="service1-boxarea next-step" data-next="10" data-field="boiler_type"
                                    data-value="Back Boiler">
                                    <center>
                                        <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt=""></div>
                                    </center>
                                    <div class="space38"></div>
                                    <div class="content-area text-center">
                                        <a href="#" class="title">Back Boiler</a>
                                        <div class="option-description">Behind a fireplace, older style</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="8">← Back</a>
                    </div>

                    <!-- Step 3 -->
                    <div class="step-section step10" data-step="10">
                        <div class="step3-noncombi conditional">
                            <div class="step-header">
                                <span class="step-number">10</span>
                                <h1>How fast does water flow from your cold tap?</h1>
                                <p class="step-description">Turn on your kitchen cold tap and observe the water pressure.
                                    This helps determine the right boiler size for your home.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="service1-boxarea next-step" data-next="11" data-field="water_flow"
                                        data-value="Fast">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/water_flow.png')}}"
                                                    alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Fast</a>
                                            <div class="option-description">Strong, powerful water flow</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="service1-boxarea next-step" data-next="11" data-field="water_flow"
                                        data-value="Average">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/water_flow.png')}}"
                                                    alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Average</a>
                                            <div class="option-description">Moderate water pressure</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="service1-boxarea next-step" data-next="11" data-field="water_flow"
                                        data-value="Slow">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/water_flow.png')}}"
                                                    alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Slow</a>
                                            <div class="option-description">Weak or trickling water flow</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="9">← Back</a>
                    </div>


                    <div class="step-section step11" data-step="11">
                        <div class="step4-slow conditional">
                            <div class="step-header">
                                <span class="step-number">11</span>
                                <h1>How would you describe your current boiler?</h1>
                                <p class="step-description">Understanding the condition of your current boiler helps us
                                    provide the most accurate quote and installation timeline.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="service1-boxarea next-step" data-next="12" data-field="boiler_working"
                                        data-value="Working">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Working</a>
                                            <div class="option-description">Boiler is functioning properly</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Not Working</a>
                                            <div class="option-description">Boiler has broken down</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Old & Inefficient</a>
                                            <div class="option-description">Working but using too much energy</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="10">← Back</a>
                    </div>

                    <div class="step-section step12" data-step="12">
                        <div class="step5-non-slow conditional">
                            <div class="step-header">
                                <span class="step-number">12</span>
                                <h1>Roughly how old is your current boiler?</h1>
                                <p class="step-description">Boilers typically last 10-15 years. Older boilers are less
                                    efficient and may need replacement soon.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="13" data-field="current_boiler_age"
                                        data-value="0-10 Years">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/boiler.png')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">0-10 Years</a>
                                            <div class="option-description">Relatively new</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">11-20 Years</a>
                                            <div class="option-description">Getting older</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">21-25 Years</a>
                                            <div class="option-description">Quite old</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">26+ Years</a>
                                            <div class="option-description">Very old, likely inefficient</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="11">← Back</a>
                    </div>

                    <div class="step-section step13" data-step="13">
                        <div class="step6-non-slow conditional">
                            <div class="step-header">
                                <span class="step-number">13</span>
                                <h1>Would you like to move the boiler location?</h1>
                                <p class="step-description">Moving the boiler to a different location may require additional
                                    pipework and can affect the installation cost.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="14" data-field="move_boiler"
                                        data-value="Yes">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/tick.png')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Yes</a>
                                            <div class="option-description">Move to a different location</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">No</a>
                                            <div class="option-description">Keep in the same location</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="12">← Back</a>
                    </div>

                    <div class="step-section step14" data-step="14">
                        <div class="step7-non-slow conditional">
                            <h1 class="text-center mb-4">Current boiler location?</h1>
                            <div class="row">
                                <div class="col-lg-2 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="15"
                                        data-field="current_boiler_location" data-value="Kitchen">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/kitchen.png')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center"><a href="#" class="title">Kitchen</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="15"
                                        data-field="current_boiler_location" data-value="Utility Room">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/utility_room.png')}}"
                                                    alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center"><a href="#" class="title">Utility Room</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="15"
                                        data-field="current_boiler_location" data-value="Garage">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/garage.png')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center"><a href="#" class="title">Garage</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="15"
                                        data-field="current_boiler_location" data-value="Airing Cupboard">
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
                                    <div class="service1-boxarea next-step" data-next="15"
                                        data-field="current_boiler_location" data-value="Other">
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
                                        <div class="content-area text-center"><a href="#" class="title">Same Room
                                                (+£495)</a>
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
                            <div class="step-header">
                                <span class="step-number">16</span>
                                <h1>What type of home do you live in?</h1>
                                <p class="step-description">The type of property affects heating requirements and
                                    installation considerations.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="17" data-field="home_type"
                                        data-value="Semi-Detached">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Semi-Detached</a>
                                            <div class="option-description">Shared wall with one neighbor</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Detached</a>
                                            <div class="option-description">Standalone house, no shared walls</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Terraced</a>
                                            <div class="option-description">Row house with shared walls</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Bungalow</a>
                                            <div class="option-description">Single-story house</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">Apartment</a>
                                            <div class="option-description">Flat or apartment in a building</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="15">← Back</a>
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
                                        <div class="content-area text-center"><a href="#" class="title">Ground Floor</a>
                                        </div>
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
                                        <div class="content-area text-center"><a href="#" class="title">First Floor</a>
                                        </div>
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
                                        <div class="content-area text-center"><a href="#" class="title">Second Floor +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#" class="back-btn" data-back="3">← Back</a> -->
                    </div>

                    <div class="step-section step18" data-step="18">
                        <div class="step7-non-slow conditional">
                            <div class="step-header">
                                <span class="step-number">18</span>
                                <h1>How many bedrooms does your home have?</h1>
                                <p class="step-description">This helps us determine the right boiler size to efficiently
                                    heat your home and provide hot water.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms"
                                        data-value="1">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">1</a>
                                            <div class="option-description">1 bedroom</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms"
                                        data-value="2">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">2</a>
                                            <div class="option-description">2 bedrooms</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms"
                                        data-value="3">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">3</a>
                                            <div class="option-description">3 bedrooms</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="19" data-field="bedrooms"
                                        data-value="4">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">4</a>
                                            <div class="option-description">4 bedrooms</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">5+</a>
                                            <div class="option-description">5 or more bedrooms</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="17">← Back</a>
                    </div>

                    <div class="step-section step19" data-step="19">
                        <div class="step7-non-slow conditional">
                            <div class="step-header">
                                <span class="step-number">19</span>
                                <h1>How many bathtubs are in your home?</h1>
                                <p class="step-description">Bathtubs require more hot water than showers, so this helps us
                                    size your boiler correctly.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="20" data-field="bathtubs"
                                        data-value="0">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">0</a>
                                            <div class="option-description">No bathtubs</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="20" data-field="bathtubs"
                                        data-value="1">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">1</a>
                                            <div class="option-description">One bathtub</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="20" data-field="bathtubs"
                                        data-value="2">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">2</a>
                                            <div class="option-description">Two bathtubs</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">3+</a>
                                            <div class="option-description">Three or more bathtubs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="18">← Back</a>
                    </div>

                    <div class="step-section step20" data-step="20">
                        <div class="step7-non-slow conditional">
                            <div class="step-header">
                                <span class="step-number">20</span>
                                <h1>How many separate shower cubicles do you have?</h1>
                                <p class="step-description">This helps us calculate your hot water demand. Count only
                                    standalone shower cubicles, not shower-over-bath setups.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="21" data-field="shower_cubicles"
                                        data-value="0">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center">
                                            <a href="#" class="title">0</a>
                                            <div class="option-description">No separate showers</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">1</a>
                                            <div class="option-description">One shower cubicle</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">2</a>
                                            <div class="option-description">Two shower cubicles</div>
                                        </div>
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
                                        <div class="content-area text-center">
                                            <a href="#" class="title">3+</a>
                                            <div class="option-description">Three or more shower cubicles</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="19">← Back</a>
                    </div>

                    <div class="step-section step21" data-step="21">
                        <div class="step7-non-slow conditional">
                            <h1 class="text-center mb-4">Where would you like the flue to exit after boiler relocation?</h1>
                            <div class="row">
                                <div class="col-lg-6 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="22"
                                        data-field="exit_after_relocation" data-value="External Wall">
                                        <center>
                                            <div class="icons"><img src="{{asset('assets/img/icons/s-icons1.svg')}}" alt="">
                                            </div>
                                        </center>
                                        <div class="space38"></div>
                                        <div class="content-area text-center"><a href="#" class="title">External Wall</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-3">
                                    <div class="service1-boxarea next-step" data-next="22"
                                        data-field="exit_after_relocation" data-value="Roof">
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
                                        <div class="content-area text-center"><a href="#" class="title">Under 1 Metre</a>
                                        </div>
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
                                        <div class="content-area text-center"><a href="#" class="title">More Than 30cm</a>
                                        </div>
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
                                        <div class="content-area text-center"><a href="#" class="title">Less Than 30cm</a>
                                        </div>
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
                        <div class="step-header">
                            <span class="step-number">26</span>
                            <h1>Almost Done! Please provide your contact details</h1>
                            <p class="step-description">We'll use this information to send you a personalized quote and
                                contact you about your boiler installation.</p>
                        </div>
                        <div style="max-width: 500px; margin: 0 auto;">
                            <div class="form-group">
                                <label for="full_name">Full Name <span style="color: #dc3545;">*</span></label>
                                <input type="text" id="full_name" name="full_name" class="postcode-input"
                                    placeholder="Enter Your Full Name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address <span style="color: #dc3545;">*</span></label>
                                <input type="email" id="email" name="email" class="postcode-input"
                                    placeholder="Enter Your Email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number <span style="color: #dc3545;">*</span></label>
                                <input type="text" id="phone_number" name="phone_number" class="postcode-input"
                                    placeholder="Enter Your Phone Number" required>
                            </div>

                            <div class="form-group">
                                <label for="postcode">Postcode <span style="color: #dc3545;">*</span></label>
                                <input type="text" id="postcode" name="postcode" class="postcode-input"
                                    placeholder="Enter Your Postcode" required>
                            </div>

                            <div style="text-align: center;">
                                <button type="submit" class="submit-btn">Get My Quote →</button>
                            </div>
                        </div>
                        <a href="#" class="back-btn" data-back="25"
                            style="display: block; text-align: center; margin-top: 30px;">← Back</a>
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
                const totalSteps = 26;
                let formData = {};
                let currentStep = 1;

                function updateProgress(step) {
                    const percentage = (step / totalSteps) * 100;
                    const progressFill = document.getElementById('progressFill');
                    const progressText = document.getElementById('progressText');

                    if (progressFill) {
                        progressFill.style.width = percentage + '%';
                    }
                    if (progressText) {
                        progressText.textContent = `Step ${step} of ${totalSteps}`;
                    }
                }

                function showStep(step) {
                    steps.forEach(s => s.classList.remove("active"));
                    const targetStep = document.querySelector(`.step${step}`);
                    if (targetStep) {
                        targetStep.classList.add("active");
                        currentStep = step;
                        updateProgress(step);

                        // Scroll to top of form
                        window.scrollTo({ top: 0, behavior: 'smooth' });
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
                        let back = parseInt(this.dataset.back);
                        if (back) {
                            showStep(back);
                        }
                    });
                });

                // Handle postcode input
                const postcodeInput = document.querySelector('input[name="postcode"]');
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