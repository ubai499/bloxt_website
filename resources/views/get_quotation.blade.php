@extends('layouts.master')
@section('content')
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .quotation-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            min-height: 80vh;
        }

        .step-section {
            display: none;
            animation: fadeIn 0.4s ease-in;
        }

        .step-section.active {
            display: block;
        }

        .step-section.stop-message {
            text-align: center;
            padding: 60px 20px;
        }

        .stop-message h2 {
            color: #dc3545;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .stop-message p {
            color: #666;
            font-size: 18px;
            margin-bottom: 30px;
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
            margin-bottom: 50px;
        }

        .step-header h1 {
            font-size: 36px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .step-header .step-number {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .step-description {
            font-size: 16px;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .option-description {
            font-size: 13px;
            color: #6c757d;
            line-height: 1.4;
            margin-top: 8px;
            font-weight: 400;
        }

        .info-badge {
            display: inline-block;
            background: #e7f3ff;
            color: #0066cc;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            margin-left: 8px;
            font-weight: 500;
        }

        .progress-text {
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            font-weight: 500;
            margin-top: 10px;
        }

        .options-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .option-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border: 3px solid #e0e0e0;
            border-radius: 16px;
            padding: 35px 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .option-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 16px;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .option-card:hover {
            border-color: #007bff;
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 8px 24px rgba(0, 123, 255, 0.25);
        }

        .option-card:hover::before {
            opacity: 0.05;
        }

        .option-card.selected {
            border-color: #007bff;
            background: linear-gradient(135deg, #f0f7ff 0%, #e3f2fd 100%);
            box-shadow: 0 8px 24px rgba(0, 123, 255, 0.3);
        }

        .option-card.selected::after {
            content: '✓';
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background: #007bff;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
        }

        .option-card .icon {
            width: 70px;
            height: 70px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .option-card .icon i {
            font-size: 48px;
            color: #007bff;
            transition: all 0.3s ease;
        }

        .option-card:hover .icon i {
            color: #0056b3;
            transform: scale(1.1);
        }

        .option-card.selected .icon i {
            color: #0056b3;
        }

        .option-card .title {
            font-size: 18px;
            font-weight: 600;
            color: #1a1a1a;
            margin: 0;
            position: relative;
            z-index: 1;
            line-height: 1.4;
        }

        .form-input-group {
            max-width: 500px;
            margin: 0 auto 30px;
        }

        .form-input-group label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 12px;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 3px solid #e0e0e0;
            border-radius: 12px;
            font-size: 18px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.1);
        }

        .submit-button {
            display: block;
            width: 100%;
            max-width: 500px;
            margin: 40px auto 0;
            padding: 18px 40px;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        .progress-bar {
            width: 100%;
            height: 6px;
            background: #e0e0e0;
            border-radius: 3px;
            margin-bottom: 50px;
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
            transition: width 0.5s ease;
            width: 0%;
            border-radius: 3px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 8px;
            background: #f0f7ff;
        }

        .back-button:hover {
            color: #0056b3;
            background: #e3f2fd;
            transform: translateX(-5px);
        }

        .back-button svg {
            margin-right: 8px;
        }

        .info-message {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 12px;
            padding: 20px;
            margin: 30px auto;
            max-width: 600px;
            text-align: center;
        }

        .info-message h3 {
            color: #856404;
            margin-bottom: 10px;
        }

        .info-message p {
            color: #856404;
            margin: 0;
        }

        @media (max-width: 768px) {
            .options-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .option-card {
                min-height: 160px;
                padding: 25px 15px;
            }

            .step-header h1 {
                font-size: 24px;
            }

            .option-card .title {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .options-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="quotation-container">
        <form id="quotationForm" method="POST" action="{{ route('quote_boiler.store') }}">
            @csrf

            <!-- Progress Bar -->
            <div
                style="max-width: 800px; margin: 0 auto 50px; padding: 20px; background: #f8f9fa; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
                <div class="progress-text" id="progressText">Step 1 of 30</div>
            </div>

            <!-- Step 1: Ownership -->
            <div class="step-section step1 active" data-step="1">
                <div class="step-header">
                    <span class="step-number">Step 1 of 30</span>
                    <h1>Are you a Homeowner or a Landlord?</h1>
                    <p class="step-description">This helps us understand your situation and provide the most relevant quote
                        for your needs.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="2" data-field="ownership" data-value="Homeowner">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <p class="title">Homeowner</p>
                        <div class="option-description">You own and live in this property</div>
                    </div>
                    <div class="option-card next-step" data-next="2" data-field="ownership" data-value="Landlord">
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <p class="title">Landlord</p>
                        <div class="option-description">You own this property but rent it out to tenants</div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Fuel Type -->
            <div class="step-section step2" data-step="2">
                <a href="#" class="back-button" data-back="1">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 2 of 30</span>
                    <h1>What kind of fuel does your boiler use?</h1>
                    <p class="step-description">This determines what type of boiler we can install. Most homes in the UK use
                        gas or LPG.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="3" data-field="fuel_type" data-value="Gas">
                        <div class="icon">
                            <i class="fas fa-fire-flame-simple"></i>
                        </div>
                        <p class="title">Gas</p>
                        <div class="option-description">Connected to mains gas supply <span class="info-badge">Most
                                Common</span></div>
                    </div>
                    <div class="option-card next-step" data-next="3" data-field="fuel_type" data-value="LPG">
                        <div class="icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <p class="title">LPG</p>
                        <div class="option-description">Liquefied Petroleum Gas (bottled gas)</div>
                    </div>
                    <div class="option-card next-step stop-form" data-field="fuel_type" data-value="Oil"
                        data-stop-message="We currently only offer installations for gas-powered boilers.">
                        <div class="icon">
                            <i class="fas fa-oil-can"></i>
                        </div>
                        <p class="title">Oil</p>
                        <div class="option-description">Heating oil system (not currently available)</div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Current Boiler Type -->
            <div class="step-section step3" data-step="3">
                <a href="#" class="back-button" data-back="2">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 3 of 30</span>
                    <h1>What type of boiler do you currently have?</h1>
                    <p class="step-description">Different boiler types have different installation requirements. If you're
                        unsure, check your boiler's manual or look for a label on the unit.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="5" data-field="current_boiler_type" data-value="Combi Boiler">
                        <div class="icon">
                            <i class="fas fa-fire-burner"></i>
                        </div>
                        <p class="title">Combi</p>
                        <div class="option-description">Heats water on demand, no tank needed <span
                                class="info-badge">Popular</span></div>
                    </div>
                    <div class="option-card next-step" data-next="4" data-field="current_boiler_type" data-value="Standard Boiler">
                        <div class="icon">
                            <i class="fas fa-fire-burner"></i>
                        </div>
                        <p class="title">Standard</p>
                        <div class="option-description">Has a hot water cylinder/tank</div>
                    </div>
                    <div class="option-card next-step" data-next="4" data-field="current_boiler_type" data-value="System Boiler">
                        <div class="icon">
                            <i class="fas fa-fire-burner"></i>
                        </div>
                        <p class="title">System</p>
                        <div class="option-description">Has a hot water cylinder, no cold water tank</div>
                    </div>
                    <div class="option-card next-step" data-next="4" data-field="current_boiler_type"
                        data-value="Back Boiler">
                        <div class="icon">
                            <i class="fas fa-fire-burner"></i>
                        </div>
                        <p class="title">Back Boiler</p>
                        <div class="option-description">Behind a fireplace, older style</div>
                    </div>
                </div>
            </div>

            <!-- Step 4: Conversion Question (only for non-Combi) -->
            <div class="step-section step4" data-step="4">
                <a href="#" class="back-button" data-back="3">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 4 of 30</span>
                    <h1>Do you want to convert to a Combi boiler?</h1>
                    <p class="step-description">Combi boilers provide hot water on demand without needing a storage tank,
                        saving space and often reducing energy costs.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="5" data-field="convert_to_combi" data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="title">Yes</p>
                        <div class="option-description">Convert to a space-saving combi boiler</div>
                    </div>
                    <div class="option-card next-step" data-next="5" data-field="convert_to_combi" data-value="No">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                        <div class="option-description">Keep your current boiler type</div>
                    </div>
                </div>
            </div>

            <!-- Step 5: Boiler Condition -->
            <div class="step-section step5" data-step="5">
                <a href="#" class="back-button" data-back="3">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 5 of 30</span>
                    <h1>How would you describe your current boiler?</h1>
                    <p class="step-description">Understanding the condition of your current boiler helps us provide the most
                        accurate quote and installation timeline.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="6" data-field="boiler_condition" data-value="Not Working">
                        <div class="icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <p class="title">Not Working</p>
                        <div class="option-description">Boiler has broken down completely</div>
                    </div>
                    <div class="option-card next-step" data-next="6" data-field="boiler_condition"
                        data-value="Old & Inefficient">
                        <div class="icon">
                            <i class="fas fa-clock-rotate-left"></i>
                        </div>
                        <p class="title">Old & Inefficient</p>
                        <div class="option-description">Working but using too much energy</div>
                    </div>
                    <div class="option-card next-step" data-next="6" data-field="boiler_condition"
                        data-value="Doesn't Fit With Our Plans">
                        <div class="icon">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <p class="title">Doesn't Fit With Our Plans</p>
                        <div class="option-description">Need to relocate or replace for renovation</div>
                    </div>
                    <div class="option-card next-step" data-next="6" data-field="boiler_condition" data-value="Other">
                        <div class="icon">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <p class="title">Other</p>
                        <div class="option-description">Different reason not listed</div>
                    </div>
                </div>
            </div>

            <!-- Step 6: Boiler Mounting -->
            <div class="step-section step6" data-step="6">
                <a href="#" class="back-button" data-back="5">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 6 of 30</span>
                    <h1>Is your boiler mounted on the wall?</h1>
                    <p class="step-description">Most modern boilers are wall-mounted. This helps us determine the
                        installation requirements.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="7" data-field="boiler_mounting" data-value="Wall Mounted">
                        <div class="icon">
                            <i class="fas fa-arrows-up-down"></i>
                        </div>
                        <p class="title">Wall Mounted</p>
                        <div class="option-description">Your boiler is attached to the wall <span class="info-badge">Most
                                Common</span></div>
                    </div>
                    <div class="option-card next-step" data-next="7" data-field="boiler_mounting"
                        data-value="Floor Standing">
                        <div class="icon">
                            <i class="fas fa-square"></i>
                        </div>
                        <p class="title">Floor Standing</p>
                        <div class="option-description">Your boiler sits on the floor</div>
                    </div>
                </div>
            </div>

            <!-- Step 7: Boiler Age -->
            <div class="step-section step7" data-step="7">
                <a href="#" class="back-button" data-back="6">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 7 of 30</span>
                    <h1>Roughly how old is your boiler?</h1>
                    <p class="step-description">Boilers typically last 10-15 years. Older boilers are less efficient and may
                        need replacement soon.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="8" data-field="boiler_age" data-value="0-10 Years">
                        <div class="icon">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                        <p class="title">0–10 Years</p>
                        <div class="option-description">Relatively new</div>
                    </div>
                    <div class="option-card next-step" data-next="8" data-field="boiler_age" data-value="11-20 Years">
                        <div class="icon">
                            <i class="fas fa-calendar-week"></i>
                        </div>
                        <p class="title">11–20 Years</p>
                        <div class="option-description">Getting older, may need replacement</div>
                    </div>
                    <div class="option-card next-step" data-next="8" data-field="boiler_age" data-value="20+ Years">
                        <div class="icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <p class="title">20+ Years</p>
                        <div class="option-description">Very old, likely inefficient</div>
                    </div>
                    <div class="option-card next-step" data-next="8" data-field="boiler_age" data-value="I Don't Know">
                        <div class="icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <p class="title">I Don't Know</p>
                        <div class="option-description">Not sure of the age</div>
                    </div>
                </div>
            </div>

            <!-- Step 8: How Long You'll Stay -->
            <div class="step-section step8" data-step="8">
                <a href="#" class="back-button" data-back="7">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 8 of 30</span>
                    <h1>How long do you plan to live in your current home?</h1>
                    <p class="step-description">This helps us recommend the best boiler investment for your situation.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="9" data-field="stay_duration" data-value="1-4 Years">
                        <div class="icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <p class="title">1–4 Years</p>
                        <div class="option-description">Short-term stay</div>
                    </div>
                    <div class="option-card next-step" data-next="9" data-field="stay_duration" data-value="5-10 Years">
                        <div class="icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <p class="title">5–10 Years</p>
                        <div class="option-description">Medium-term stay</div>
                    </div>
                    <div class="option-card next-step" data-next="9" data-field="stay_duration" data-value="11+ Years">
                        <div class="icon">
                            <i class="fas fa-calendar-days"></i>
                        </div>
                        <p class="title">11+ Years</p>
                        <div class="option-description">Long-term or permanent home</div>
                    </div>
                </div>
            </div>

            <!-- Step 9: Relocation of Boiler -->
            <div class="step-section step9" data-step="9">
                <a href="#" class="back-button" data-back="8">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 9 of 30</span>
                    <h1>Do you want your new boiler in a different location?</h1>
                    <p class="step-description">Installing in the same location is usually faster and more cost-effective.
                        Moving it may require additional pipework.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="10" data-field="relocate_boiler" data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="title">Yes</p>
                        <div class="option-description">Move it to a different location</div>
                    </div>
                    <div class="option-card next-step" data-next="12" data-field="relocate_boiler" data-value="No">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                        <div class="option-description">Keep it in the current location <span class="info-badge">Most
                                Common</span></div>
                    </div>
                </div>
            </div>

            <!-- Step 10: Where do you want your new boiler? -->
            <div class="step-section step10" data-step="10">
                <a href="#" class="back-button" data-back="9">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 10 of 29</span>
                    <h1>Where do you want your new boiler?</h1>
                    <p class="step-description">The prices for relocations include all required pipework, parts and
                        accessories. Prior to the job commencing, we’ll check the suitability of your proposed boilers new
                        location.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="11" data-field="new_boiler_location"
                        data-value="Same Room">
                        <div class="icon">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <p class="title">Same Room</p>
                        <br/>
                        <span class="info-badge">£ 250</span>
                    </div>
                    <div class="option-card next-step" data-next="11" data-field="new_boiler_location"
                        data-value="Utility Room">
                        <div class="icon">
                            <i class="fas fa-sink"></i>
                        </div>
                        <p class="title">Utility Room</p>
                        <br/>
                        <span class="info-badge">£ 350</span>
                    </div>
                    <div class="option-card next-step" data-next="11" data-field="new_boiler_location" data-value="Kitchen">
                        <div class="icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <p class="title">Kitchen</p>
                        <br/>
                        <span class="info-badge">£ 450</span>
                    </div>
                    <div class="option-card next-step" data-next="11" data-field="new_boiler_location" data-value="Garage">
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <p class="title">Garage</p>
                        <br/>
                        <span class="info-badge">£ 350</span>
                    </div>
                    <div class="option-card next-step" data-next="11" data-field="new_boiler_location"
                        data-value="Airing Cupboard">
                        <div class="icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <p class="title">Airing Cupboard</p>
                        <br/>
                        <span class="info-badge">£ 250</span>
                    </div>
                    <div class="option-card next-step" data-next="11" data-field="new_boiler_location" data-value="Bedroom">
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p class="title">Bedroom</p>
                        <br/>
                        <span class="info-badge">£ 450</span>
                    </div>
                    <div class="option-card next-step" data-next="11" data-field="new_boiler_location"
                        data-value="Loft / Attic">
                        <div class="icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <p class="title">Loft / Attic</p>
                        <br/>
                        <span class="info-badge">£ 250</span>
                    </div>
                </div>
            </div>

            <!-- Step 11: Where is your current boiler located? -->
            <div class="step-section step11" data-step="11">
                <a href="#" class="back-button" data-back="10">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 11 of 29</span>
                    <h1>Where is your current boiler located?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="12" data-field="current_boiler_location"
                        data-value="Utility Room">
                        <div class="icon">
                            <i class="fas fa-sink"></i>
                        </div>
                        <p class="title">Utility Room</p>
                    </div>
                    <div class="option-card next-step" data-next="12" data-field="current_boiler_location"
                        data-value="Kitchen">
                        <div class="icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <p class="title">Kitchen</p>
                    </div>
                    <div class="option-card next-step" data-next="12" data-field="current_boiler_location"
                        data-value="Garage">
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <p class="title">Garage</p>
                    </div>
                    <div class="option-card next-step" data-next="12" data-field="current_boiler_location"
                        data-value="Airing Cupboard">
                        <div class="icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <p class="title">Airing Cupboard</p>
                    </div>
                    <div class="option-card next-step" data-next="12" data-field="current_boiler_location"
                        data-value="Other">
                        <div class="icon">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <p class="title">Other</p>
                    </div>
                </div>
            </div>

            <!-- Step 12: Home Type -->
            <div class="step-section step12" data-step="12">
                <a href="#" class="back-button" data-back="9">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 12 of 30</span>
                    <h1>Which of these best describes your home?</h1>
                    <p class="step-description">The type of property affects heating requirements and installation
                        considerations.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="16" data-field="home_type" data-value="Detached">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <p class="title">Detached</p>
                        <div class="option-description">Standalone house, no shared walls</div>
                    </div>
                    <div class="option-card next-step" data-next="16" data-field="home_type" data-value="Semi-Detached">
                        <div class="icon">
                            <i class="fas fa-home-lg"></i>
                        </div>
                        <p class="title">Semi-Detached</p>
                        <div class="option-description">Shared wall with one neighbor</div>
                    </div>
                    <div class="option-card next-step" data-next="16" data-field="home_type" data-value="Terraced">
                        <div class="icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <p class="title">Terraced</p>
                        <div class="option-description">Row house with shared walls</div>
                    </div>
                    <div class="option-card next-step" data-next="13" data-field="home_type" data-value="Flat">
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <p class="title">Flat</p>
                        <div class="option-description">Apartment or flat in a building</div>
                    </div>
                    <div class="option-card next-step" data-next="15" data-field="home_type" data-value="Bungalow">
                        <div class="icon">
                            <i class="fas fa-house"></i>
                        </div>
                        <p class="title">Bungalow</p>
                        <div class="option-description">Single-story house</div>
                    </div>
                </div>
            </div>

            <!-- Step 13: Flat Floor (Conditional for Flat) -->
            <div class="step-section step13" data-step="13">
                <a href="#" class="back-button" data-back="12">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 13 of 29</span>
                    <h1>Is your flat on or above the second floor?</h1>
                    <p class="step-description">In order to install the boiler, we’ll need to be able to access the flue
                        from the outside. Most of the time it can be done with ladders, but if it’s above the 2nd floor,
                        we’ll need to check more details.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="14" data-field="flat_floor" data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="title">Yes</p>
                    </div>
                    <div class="option-card next-step" data-next="16" data-field="flat_floor" data-value="No">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                    </div>
                </div>
            </div>

            <!-- Step 14: Access Equipment (Conditional for Flat 2nd floor+) -->
            <div class="step-section step14" data-step="14">
                <a href="#" class="back-button" data-back="13">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 14 of 29</span>
                    <h1>Do you accept there may be extra charges for access equipment?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="16" data-field="accept_access_charges" data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="title">Yes</p>
                    </div>
                    <div class="option-card stop-form" data-field="accept_access_charges" data-value="No"
                        data-stop-message="Sorry, we cannot continue with the installation.">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                    </div>
                </div>
            </div>

            <!-- Step 15: Bungalow Floors (Conditional for Bungalow) -->
            <div class="step-section step15" data-step="15">
                <a href="#" class="back-button" data-back="12">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 15 of 29</span>
                    <h1>Is your bungalow one or two floors?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="16" data-field="bungalow_floors" data-value="One Floor">
                        <div class="icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <p class="title">One Floor</p>
                    </div>
                    <div class="option-card next-step" data-next="16" data-field="bungalow_floors" data-value="Two Floors">
                        <div class="icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <p class="title">Two Floors</p>
                    </div>
                </div>
            </div>

            <!-- Step 16: Bedrooms -->
            <div class="step-section step16" data-step="16">
                <a href="#" class="back-button" data-back="12">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 16 of 30</span>
                    <h1>How many bedrooms does your home have?</h1>
                    <p class="step-description">This helps us determine the right boiler size to efficiently heat your home
                        and provide hot water.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="17" data-field="bedrooms" data-value="1">
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p class="title">1</p>
                        <div class="option-description">1 bedroom</div>
                    </div>
                    <div class="option-card next-step" data-next="17" data-field="bedrooms" data-value="2">
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p class="title">2</p>
                        <div class="option-description">2 bedrooms</div>
                    </div>
                    <div class="option-card next-step" data-next="17" data-field="bedrooms" data-value="3">
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p class="title">3</p>
                        <div class="option-description">3 bedrooms</div>
                    </div>
                    <div class="option-card next-step" data-next="17" data-field="bedrooms" data-value="4">
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p class="title">4</p>
                        <div class="option-description">4 bedrooms</div>
                    </div>
                    <div class="option-card next-step" data-next="17" data-field="bedrooms" data-value="5">
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p class="title">5</p>
                        <div class="option-description">5 bedrooms</div>
                    </div>
                    <div class="option-card next-step" data-next="17" data-field="bedrooms" data-value="6+">
                        <div class="icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <p class="title">6+</p>
                        <div class="option-description">6 or more bedrooms</div>
                    </div>
                </div>
            </div>

            <!-- Step 17: Bathtubs -->
            <div class="step-section step17" data-step="17">
                <a href="#" class="back-button" data-back="16">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 17 of 30</span>
                    <h1>How many bathtubs do you have or plan to have?</h1>
                    <p class="step-description">Bathtubs require more hot water than showers, so this helps us size your
                        boiler correctly.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="18" data-field="bathtubs" data-value="0">
                        <div class="icon">
                            <i class="fas fa-bath"></i>
                        </div>
                        <p class="title">0</p>
                        <div class="option-description">No bathtubs</div>
                    </div>
                    <div class="option-card next-step" data-next="18" data-field="bathtubs" data-value="1">
                        <div class="icon">
                            <i class="fas fa-bath"></i>
                        </div>
                        <p class="title">1</p>
                        <div class="option-description">One bathtub</div>
                    </div>
                    <div class="option-card next-step" data-next="18" data-field="bathtubs" data-value="2">
                        <div class="icon">
                            <i class="fas fa-bath"></i>
                        </div>
                        <p class="title">2</p>
                        <div class="option-description">Two bathtubs</div>
                    </div>
                    <div class="option-card next-step" data-next="18" data-field="bathtubs" data-value="3+">
                        <div class="icon">
                            <i class="fas fa-bath"></i>
                        </div>
                        <p class="title">3+</p>
                        <div class="option-description">Three or more bathtubs</div>
                    </div>
                </div>
            </div>

            <!-- Step 18: Separate Showers -->
            <div class="step-section step18" data-step="18">
                <a href="#" class="back-button" data-back="17">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 18 of 30</span>
                    <h1>How many separate showers do you have or plan to have?</h1>
                    <p class="step-description">This helps us calculate your hot water demand. Count only standalone shower
                        cubicles, not shower-over-bath setups.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="19" data-field="separate_showers" data-value="0">
                        <div class="icon">
                            <i class="fas fa-shower"></i>
                        </div>
                        <p class="title">0</p>
                        <div class="option-description">No separate showers</div>
                    </div>
                    <div class="option-card next-step" data-next="19" data-field="separate_showers" data-value="1">
                        <div class="icon">
                            <i class="fas fa-shower"></i>
                        </div>
                        <p class="title">1</p>
                        <div class="option-description">One shower cubicle</div>
                    </div>
                    <div class="option-card next-step" data-next="19" data-field="separate_showers" data-value="2+">
                        <div class="icon">
                            <i class="fas fa-shower"></i>
                        </div>
                        <p class="title">2+</p>
                        <div class="option-description">Two or more shower cubicles</div>
                    </div>
                </div>
            </div>

            <!-- Step 19: Radiators -->
            <div class="step-section step19" data-step="19">
                <a href="#" class="back-button" data-back="18">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 19 of 30</span>
                    <h1>How many radiators do you have?</h1>
                    <p class="step-description">The number of radiators helps us determine the heating capacity needed for
                        your home.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="20" data-field="radiators" data-value="0-5">
                        <div class="icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <p class="title">0–5</p>
                        <div class="option-description">Small property</div>
                    </div>
                    <div class="option-card next-step" data-next="20" data-field="radiators" data-value="6-9">
                        <div class="icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <p class="title">6–9</p>
                        <div class="option-description">Medium property</div>
                    </div>
                    <div class="option-card next-step" data-next="20" data-field="radiators" data-value="10-13">
                        <div class="icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <p class="title">10–13</p>
                        <div class="option-description">Large property</div>
                    </div>
                    <div class="option-card next-step" data-next="20" data-field="radiators" data-value="14-16">
                        <div class="icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <p class="title">14–16</p>
                        <div class="option-description">Very large property</div>
                    </div>
                    <div class="option-card next-step" data-next="20" data-field="radiators" data-value="17+">
                        <div class="icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <p class="title">17+</p>
                        <div class="option-description">Extra large property</div>
                    </div>
                </div>
            </div>

            <!-- Step 20: TRVs -->
            <div class="step-section step20" data-step="20">
                <a href="#" class="back-button" data-back="19">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 20 of 30</span>
                    <h1>Do you have TRVs on all radiators?</h1>
                    <p class="step-description">TRVs (Thermostatic Radiator Valves) allow you to control the temperature of
                        individual radiators, improving energy efficiency.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="21" data-field="trvs" data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="title">Yes</p>
                        <div class="option-description">All radiators have TRVs</div>
                    </div>
                    <div class="option-card next-step" data-next="21" data-field="trvs" data-value="No">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                        <div class="option-description">Some or no radiators have TRVs</div>
                    </div>
                </div>
            </div>

            <!-- Step 21: Water Meter -->
            <div class="step-section step21" data-step="21">
                <a href="#" class="back-button" data-back="20">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 21 of 29</span>
                    <h1>Do you have a water meter?</h1>
                    <p class="step-description">If you have a water meter, you'll pay for the water you use, rather than a
                        fixed monthly cost on your bill</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="22" data-field="water_meter" data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <p class="title">Yes</p>
                    </div>
                    <div class="option-card next-step" data-next="22" data-field="water_meter" data-value="No">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                    </div>
                </div>
            </div>

            <!-- Step 22: Flue Location -->
            <div class="step-section step22" data-step="22">
                <a href="#" class="back-button" data-back="21">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 22 of 29</span>
                    <h1>Where will your flue come out?</h1>
                    <p class="step-description">Most flues go horizontally, out of the wall. They can either be round tubes
                        popping out (modern, fanned flue), or, square shaped ones (balanced flue). Don’t confuse your flue
                        with your chimney.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="23" data-field="flue_location" data-value="Roof">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <p class="title">Roof</p>
                    </div>
                    <div class="option-card next-step" data-next="25" data-field="flue_location" data-value="Wall">
                        <div class="icon">
                            <i class="fas fa-border-all"></i>
                        </div>
                        <p class="title">Wall</p>
                    </div>
                </div>
            </div>

            <!-- Step 23: Roof Type (If Roof selected) -->
            <div class="step-section step23" data-step="23">
                <a href="#" class="back-button" data-back="22">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 23 of 29</span>
                    <h1>Will your flue be on a sloped or flat roof?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="24" data-field="roof_type" data-value="Sloped">
                        <div class="icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <p class="title">Sloped</p>
                    </div>
                    <div class="option-card next-step" data-next="29" data-field="roof_type" data-value="Flat">
                        <div class="icon">
                            <i class="fas fa-square"></i>
                        </div>
                        <p class="title">Flat</p>
                    </div>
                    <div class="option-card stop-form" data-field="roof_type" data-value="I Don't Know"
                        data-stop-message="Sorry, we need more information to continue.">
                        <div class="icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <p class="title">I Don't Know</p>
                    </div>
                </div>
            </div>

            <!-- Step 24: Roof Position (If Sloped) -->
            <div class="step-section step24" data-step="24">
                <a href="#" class="back-button" data-back="23">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 24 of 29</span>
                    <h1>Where on the roof will it be positioned?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="29" data-field="roof_position"
                        data-value="Highest Two-Thirds">
                        <div class="icon">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                        <p class="title">Highest Two-Thirds</p>
                    </div>
                    <div class="option-card next-step" data-next="29" data-field="roof_position" data-value="Lowest Third">
                        <div class="icon">
                            <i class="fas fa-arrow-down"></i>
                        </div>
                        <p class="title">Lowest Third</p>
                    </div>
                </div>
            </div>

            <!-- Step 25: Distance from Wall (If Wall selected) -->
            <div class="step-section step25" data-step="25">
                <a href="#" class="back-button" data-back="22">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 25 of 29</span>
                    <h1>How far will your new boiler be from an outside wall?</h1>
                    <p class="step-description">Please estimate the distance between the planned boiler location and the nearest external wall. 
    This helps us determine if a plume management kit will be required for safe venting of fumes.</p>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="26" data-field="wall_distance" data-value="Under 1 metre">
                        <div class="icon">
                            <i class="fas fa-ruler"></i>
                        </div>
                        <p class="title">Under 1 metre</p>
                    </div>
                    <div class="option-card next-step" data-next="26" data-field="wall_distance" data-value="1-2 metres">
                        <div class="icon">
                            <i class="fas fa-ruler-horizontal"></i>
                        </div>
                        <p class="title">1–2 metres</p>
                    </div>
                    <div class="option-card next-step" data-next="26" data-field="wall_distance" data-value="2-3 metres">
                        <div class="icon">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <p class="title">2–3 metres</p>
                    </div>
                    <div class="option-card next-step" data-next="26" data-field="wall_distance" data-value="3+ metres">
                        <div class="icon">
                            <i class="fas fa-ruler-vertical"></i>
                        </div>
                        <p class="title">3+ metres</p>
                    </div>
                    <div class="option-card stop-form" data-field="wall_distance" data-value="I Don't Know"
                        data-stop-message="Sorry, we need more information to continue.">
                        <div class="icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <p class="title">I Don't Know</p>
                    </div>
                </div>
            </div>

            <!-- Step 26: Flue Height from Ground -->
            <div class="step-section step26" data-step="26">
                <a href="#" class="back-button" data-back="25">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 26 of 29</span>
                    <h1>How close to the ground is your flue?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="27" data-field="flue_ground_height"
                        data-value="More than 2 metres">
                        <div class="icon">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                        <p class="title">More than 2 metres</p>
                    </div>
                    <div class="option-card next-step" data-next="27" data-field="flue_ground_height"
                        data-value="Less than 2 metres">
                        <div class="icon">
                            <i class="fas fa-arrow-down"></i>
                        </div>
                        <p class="title">Less than 2 metres</p>
                    </div>
                </div>
            </div>

            <!-- Step 27: Flue Distance from Property -->
            <div class="step-section step27" data-step="27">
                <a href="#" class="back-button" data-back="26">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 27 of 29</span>
                    <h1>How close is your flue to another property?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="28" data-field="flue_property_distance"
                        data-value="More than 2 metres">
                        <div class="icon">
                            <i class="fas fa-arrows-alt-h"></i>
                        </div>
                        <p class="title">More than 2 metres</p>
                    </div>
                    <div class="option-card next-step" data-next="28" data-field="flue_property_distance"
                        data-value="Less than 2 metres">
                        <div class="icon">
                            <i class="fas fa-compress-arrows-alt"></i>
                        </div>
                        <p class="title">Less than 2 metres</p>
                    </div>
                </div>
            </div>

            <!-- Step 28: Flue Under Structure -->
            <div class="step-section step28" data-step="28">
                <a href="#" class="back-button" data-back="27">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 28 of 29</span>
                    <h1>Will the flue be under a carport, balcony, or other structure?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="29" data-field="flue_under_structure" data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="title">Yes</p>
                    </div>
                    <div class="option-card next-step" data-next="29" data-field="flue_under_structure" data-value="No">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                    </div>
                </div>
            </div>

            <!-- Step 29: Flue Distance from Door/Window -->
            <div class="step-section step29" data-step="29">
                <a href="#" class="back-button" data-back="28">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Step 29 of 29</span>
                    <h1>Will the flue be 30cm or more from a door or window?</h1>
                </div>
                <div class="options-grid">
                    <div class="option-card next-step" data-next="30" data-field="flue_door_window_distance"
                        data-value="Yes">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <p class="title">Yes</p>
                    </div>
                    <div class="option-card next-step" data-next="30" data-field="flue_door_window_distance"
                        data-value="No">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <p class="title">No</p>
                    </div>
                </div>
            </div>

            <!-- Step 30: ZIP Code (Final Step) -->
            <div class="step-section step30" data-step="30">
                <a href="#" class="back-button" id="finalBackButton" data-back="29">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Back
                </a>
                <div class="step-header">
                    <span class="step-number">Final Step</span>
                    <h1>Almost Done! Get Your Quote</h1>
                    <p class="step-description">Please enter your Post Code so we can check installation availability in your
                        area and provide you with a personalized quote.</p>
                </div>
                <div class="form-input-group">
                    <label for="zip_code">Post Code <span style="color: #dc3545;">*</span></label>
                    <input type="text" id="zip_code" name="zip_code" class="form-input" placeholder="Enter your Post code"
                        required>
                </div>
                <button type="submit" class="submit-button">Get My Quote →</button>
            </div>

            <!-- Stop Message Section -->
            <div class="step-section stop-message" id="stopMessage" style="display: none;">
                <h2 id="stopMessageText"></h2>
                <p>Thank you for your interest. Please contact us directly for more information.</p>
            </div>

            <!-- Hidden inputs for storing answers -->
            <input type="hidden" name="ownership">
            <input type="hidden" name="fuel_type">
            <input type="hidden" name="current_boiler_type">
            <input type="hidden" name="convert_to_combi">
            <input type="hidden" name="boiler_condition">
            <input type="hidden" name="boiler_mounting">
            <input type="hidden" name="boiler_age">
            <input type="hidden" name="stay_duration">
            <input type="hidden" name="relocate_boiler">
            <input type="hidden" name="new_boiler_location">
            <input type="hidden" name="current_boiler_location">
            <input type="hidden" name="home_type">
            <input type="hidden" name="flat_floor">
            <input type="hidden" name="accept_access_charges">
            <input type="hidden" name="bungalow_floors">
            <input type="hidden" name="bedrooms">
            <input type="hidden" name="bathtubs">
            <input type="hidden" name="separate_showers">
            <input type="hidden" name="radiators">
            <input type="hidden" name="trvs">
            <input type="hidden" name="water_meter">
            <input type="hidden" name="flue_location">
            <input type="hidden" name="roof_type">
            <input type="hidden" name="roof_position">
            <input type="hidden" name="wall_distance">
            <input type="hidden" name="flue_ground_height">
            <input type="hidden" name="flue_property_distance">
            <input type="hidden" name="flue_under_structure">
            <input type="hidden" name="flue_door_window_distance">
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const steps = document.querySelectorAll(".step-section:not(.stop-message)");
            const totalSteps = 30;
            let currentStep = 1;
            let formData = {};

            function updateProgress() {
                const progress = (currentStep / totalSteps) * 100;
                const progressFill = document.getElementById('progressFill');
                const progressText = document.getElementById('progressText');

                if (progressFill) {
                    progressFill.style.width = progress + '%';
                }
                if (progressText) {
                    progressText.textContent = `Step ${currentStep} of ${totalSteps}`;
                }
            }

            function showStep(step) {
                steps.forEach(s => s.classList.remove("active"));
                const targetStep = document.querySelector(`.step${step}`);
                if (targetStep) {
                    targetStep.classList.add("active");
                    currentStep = step;
                    updateProgress();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            }

            function showStopMessage(message) {
                steps.forEach(s => s.classList.remove("active"));
                document.getElementById('stopMessage').style.display = 'block';
                document.getElementById('stopMessageText').textContent = message;
                document.getElementById('progressFill').style.width = '100%';
            }

            function updateHiddenInput(field, value) {
                const hiddenInput = document.querySelector(`input[name="${field}"]`);
                if (hiddenInput) {
                    hiddenInput.value = value;
                }
            }

            // Handle conditional navigation
            function getNextStep(currentStepNum, field, value) {
                // Step 3: If Combi, skip step 4
                if (field === 'current_boiler_type' && value === 'Combi') {
                    return 5;
                }

                // Step 9: If No relocation, skip steps 10-11
                if (field === 'relocate_boiler' && value === 'No') {
                    return 12;
                }

                // Step 12: Home type routing
                if (field === 'home_type') {
                    if (value === 'Flat') return 13;
                    if (value === 'Bungalow') return 15;
                    return 16;
                }

                // Step 13: Flat floor routing
                if (field === 'flat_floor') {
                    if (value === 'Yes') return 14;
                    return 16;
                }

                // Step 22: Flue location routing
                if (field === 'flue_location') {
                    if (value === 'Roof') return 23;
                    if (value === 'Wall') return 25;
                }

                // Step 23: Roof type routing
                if (field === 'roof_type') {
                    if (value === 'Sloped') return 24;
                    if (value === 'Flat') return 29;
                }

                // Default: use data-next attribute
                return null;
            }

            // Handle option card clicks
            document.querySelectorAll(".option-card").forEach(card => {
                card.addEventListener("click", function (e) {
                    e.preventDefault();

                    // Check if this is a stop form card
                    if (this.classList.contains('stop-form')) {
                        const message = this.dataset.stopMessage || "We cannot continue with your request.";
                        showStopMessage(message);
                        return;
                    }

                    // Check if this is a next-step card
                    if (!this.classList.contains('next-step')) {
                        return;
                    }

                    // Remove selected class from all cards in this step
                    const currentStepElement = this.closest('.step-section');
                    currentStepElement.querySelectorAll('.option-card').forEach(c => {
                        c.classList.remove('selected');
                    });

                    // Add selected class to clicked card
                    this.classList.add('selected');

                    let next = parseInt(this.dataset.next);
                    const field = this.dataset.field;
                    const value = this.dataset.value;

                    if (field) {
                        formData[field] = value;
                        updateHiddenInput(field, value);
                    }

                    // Check conditional logic
                    const conditionalNext = getNextStep(currentStep, field, value);
                    if (conditionalNext !== null) {
                        next = conditionalNext;
                    }

                    // Small delay for visual feedback
                    setTimeout(() => {
                        showStep(next);
                    }, 200);
                });
            });

            // Handle back button with conditional logic
            document.querySelectorAll(".back-button").forEach(btn => {
                btn.addEventListener("click", function (e) {
                    e.preventDefault();
                    let back = parseInt(this.dataset.back);

                    // Handle conditional back navigation
                    // If going back from step 12 and home_type was Flat/Bungalow, need to go to correct step
                    if (back === 12 && formData.home_type) {
                        if (formData.home_type === 'Flat') {
                            if (formData.flat_floor === 'Yes' && formData.accept_access_charges === 'Yes') {
                                back = 14;
                            } else if (formData.flat_floor === 'Yes') {
                                back = 13;
                            } else {
                                back = 13;
                            }
                        } else if (formData.home_type === 'Bungalow') {
                            back = 15;
                        }
                    }

                    // If going back from step 16+ and relocate_boiler was Yes, go to step 11
                    if (back === 12 && formData.relocate_boiler === 'Yes') {
                        back = 11;
                    }

                    // Handle final step back button based on flue path
                    if (this.id === 'finalBackButton') {
                        if (formData.flue_location === 'Roof') {
                            if (formData.roof_type === 'Sloped') {
                                back = 24;
                            } else if (formData.roof_type === 'Flat') {
                                back = 23;
                            } else {
                                back = 23;
                            }
                        } else if (formData.flue_location === 'Wall') {
                            back = 28;
                        } else {
                            back = 29;
                        }
                    }

                    showStep(back);
                });
            });

            // Handle form submission
            const form = document.getElementById('quotationForm');
            if (form) {
                form.addEventListener('submit', function (e) {
                    console.log('Form Data:', formData);
                    console.log('Hidden Inputs:', Array.from(form.querySelectorAll('input[type="hidden"]')).map(i => ({
                        name: i.name,
                        value: i.value
                    })));
                });
            }

            // Initialize
            updateProgress();
        });
    </script>

@endsection