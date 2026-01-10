@extends('layouts.master')
@section('content')
    <style>
        .products-section {
            padding: 80px 0;
            background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
        }

        .products-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .products-header h2 {
            font-size: 42px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .products-header p {
            font-size: 18px;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        .product-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
            border: 1px solid #e9ecef;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 123, 255, 0.15);
            border-color: #007bff;
        }

        .product-image-wrapper {
            position: relative;
            overflow: hidden;
            background: #f8f9fa;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-image-wrapper img {
            transform: scale(1.1);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            z-index: 2;
            box-shadow: 0 2px 8px rgba(0, 123, 255, 0.3);
        }

        .product-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 22px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
            line-height: 1.3;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .product-title:hover {
            color: #007bff;
        }

        .product-description {
            font-size: 15px;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .product-meta {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .product-meta-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .product-meta-item:last-child {
            border-bottom: none;
        }

        .product-meta-label {
            font-size: 14px;
            color: #6c757d;
            font-weight: 500;
        }

        .product-meta-value {
            font-size: 14px;
            color: #2c3e50;
            font-weight: 600;
        }

        .product-price {
            font-size: 28px;
            font-weight: 700;
            color: #007bff;
            margin: 10px 0;
        }

        .product-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            margin-top: auto;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
        }

        .product-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
            color: #fff;
        }

        .product-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .product-link:hover i {
            transform: translateX(5px);
        }

        .empty-state {
            text-align: center;
            padding: 80px 20px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .empty-state-icon {
            font-size: 80px;
            color: #dee2e6;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 28px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .empty-state p {
            font-size: 16px;
            color: #6c757d;
            max-width: 500px;
            margin: 0 auto;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
        }

        .hero-content h1 {
            font-size: 56px;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-breadcrumb {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 30px;
            backdrop-filter: blur(10px);
        }

        .hero-breadcrumb a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
            background: #ffffff;
        }

        .faq-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .faq-header h2 {
            font-size: 42px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .faq-header p {
            font-size: 18px;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto;
        }

        .faq-item {
            background: #fff;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item.active {
            border-color: #007bff;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.1);
        }

        .faq-question {
            padding: 25px 30px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            transition: color 0.3s ease;
        }

        .faq-item.active .faq-question {
            color: #007bff;
        }

        .faq-icon {
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        .faq-answer-content {
            padding: 0 30px 25px;
            color: #6c757d;
            line-height: 1.8;
            font-size: 16px;
        }

        /* Product Modal */
        .product-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            overflow-y: auto;
            animation: fadeIn 0.3s ease;
        }

        .product-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-content {
            background: #fff;
            border-radius: 20px;
            max-width: 1200px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: slideUp 0.4s ease;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            color: #6c757d;
        }

        .modal-close:hover {
            background: #dc3545;
            color: #fff;
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 40px;
        }

        .modal-product-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .modal-product-image {
            border-radius: 16px;
            overflow: hidden;
            background: #f8f9fa;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-product-info h2 {
            font-size: 32px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .modal-product-price {
            font-size: 36px;
            font-weight: 700;
            color: #007bff;
            margin: 20px 0;
        }

        .modal-product-meta {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .modal-meta-badge {
            background: #f8f9fa;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #2c3e50;
        }

        .modal-product-description {
            font-size: 16px;
            color: #6c757d;
            line-height: 1.8;
            margin: 30px 0;
        }

        .modal-actions {
            display: flex;
            gap: 20px;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid #e9ecef;
        }

        .modal-btn {
            flex: 1;
            padding: 18px 30px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-financing {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: #fff;
        }

        .btn-financing:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(40, 167, 69, 0.3);
        }

        .btn-checkout {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
        }

        .btn-checkout:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
        }

        /* Form Modal */
        .form-modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            overflow-y: auto;
            animation: fadeIn 0.3s ease;
        }

        .form-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .form-modal-content {
            background: #fff;
            border-radius: 20px;
            max-width: 600px;
            width: 100%;
            position: relative;
            animation: slideUp 0.4s ease;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .form-modal-content .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .form-modal-header {
            padding: 30px 40px 20px;
            border-bottom: 2px solid #e9ecef;
        }

        .form-modal-header h3 {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin: 0;
        }

        .form-modal-body {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .form-group label .required {
            color: #dc3545;
            margin-left: 3px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            font-family: inherit;
            box-sizing: border-box;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .form-btn {
            flex: 1;
            padding: 14px 28px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-btn-submit {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
        }

        .form-btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
        }

        .form-btn-cancel {
            background: #f8f9fa;
            color: #6c757d;
            border: 2px solid #e9ecef;
        }

        .form-btn-cancel:hover {
            background: #e9ecef;
            color: #2c3e50;
        }

        /* Success Message */
        .success-message {
            display: none;
            text-align: center;
            padding: 60px 40px;
        }

        .success-message.active {
            display: block;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #28a745, #20c997);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            animation: scaleIn 0.5s ease;
        }

        .success-icon i {
            font-size: 40px;
            color: #fff;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        .success-message h3 {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .success-message p {
            font-size: 16px;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .success-btn {
            padding: 14px 40px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .success-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 36px;
            }

            .hero-content p {
                font-size: 16px;
            }

            .products-header h2,
            .faq-header h2 {
                font-size: 32px;
            }

            .product-image-wrapper {
                height: 220px;
            }

            .product-content {
                padding: 20px;
            }

            .product-title {
                font-size: 20px;
            }

            .modal-product-header {
                grid-template-columns: 1fr;
            }

            .modal-body {
                padding: 20px;
            }

            .modal-actions {
                flex-direction: column;
            }
        }
    </style>

    <section id="subheader" class="jarallax text-light">
            <img src="{{ asset('assets/images/background/11.webp')}}" class="jarallax-img" alt="">
            <div class="container relative z-index-1000">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Discover</div>
                        <h1>Products</h1>
                        <ul class="crumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Products</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="fs-20 fw-600 no-bottom sm-hide">Air Conditioning and Heating Specialists</div>
                    </div>
                </div>
            </div>
            <div class="de-overlay"></div>
        </section>
        
    <!--===== SERVICE AREA STARTS =======-->
    <div class="products-section">
        <div class="container">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="80">
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                @if($product->category)
                                    <span class="product-badge">{{ $product->category }}</span>
                                @endif
                                <img src="{{ asset($product->image ?? 'assets/upload/default-boiler.png') }}"
                                    alt="{{ $product->name }}">
                            </div>
                            <div class="product-content">
                                <a href="{{ route('product_details', $product->id) }}" class="product-title">
                                    {{ $product->name }}
                                </a>
                                <p class="product-description">
                                    {!! Str::limit(strip_tags($product->description), 120, '...') !!}
                                </p>
                                <div class="product-meta">
                                    @if($product->product_type)
                                        <div class="product-meta-item">
                                            <span class="product-meta-label">Type:</span>
                                            <span class="product-meta-value">{{ $product->product_type }}</span>
                                        </div>
                                    @endif
                                    @if($product->category)
                                        <div class="product-meta-item">
                                            <span class="product-meta-label">Category:</span>
                                            <span class="product-meta-value">{{ $product->category }}</span>
                                        </div>
                                    @endif
                                </div>
                                @php
    // Price increments based on new boiler location
    $locationIncrements = [
        'Same Room' => 250,
        'Utility Room' => 350,
        'Kitchen' => 450,
        'Garage' => 350,
        'Airing Cupboard' => 250,
        'Bedroom' => 450,
        'Loft / Attic' => 250
    ];

    // Get selected location (array or string)
    $selectedLocation = $formData['new_boiler_location'] ?? '';

    // If it's array (e.g. checkboxes), pick first element
    if (is_array($selectedLocation)) {
        $selectedLocation = $selectedLocation[0] ?? '';
    }

    // Calculate final price
    $increment = $locationIncrements[$selectedLocation] ?? 0;
    $finalPrice = $product->price + $increment;
@endphp

@if($product->price)
    <div class="product-price">£ {{ $finalPrice }}</div>
@endif

<a href="#" class="product-link view-details-btn"
    data-product-id="{{ $product->id }}"
    data-product-name="{{ $product->name }}"
    data-product-image="{{ asset($product->image ?? 'assets/upload/default-boiler.png') }}"
    data-product-description="{{ strip_tags($product->description) }}"
    data-product-category="{{ $product->category }}"
    data-product-type="{{ $product->product_type }}"
    data-product-price="{{ $finalPrice }}">
    View Details <i class="fa-solid fa-arrow-right"></i>
</a>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="empty-state" data-aos="fade-up" data-aos-duration="800">
                            <div class="empty-state-icon">
                                <i class="fa-solid fa-box-open"></i>
                            </div>
                            <h3>No Products Found</h3>
                            <p>We couldn't find any products matching your criteria. Please try adjusting your filters or check
                                back later.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== FAQ SECTION STARTS =======-->
    <div class="faq-section">
        <div class="container">
            <div class="faq-header" data-aos="fade-up" data-aos-duration="800">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our boiler products and services</p>
            </div>

            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="faq-item" data-aos="fade-up" data-aos-duration="800">
                        <div class="faq-question">
                            <span>What types of boilers do you offer?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                We offer a wide range of boiler types including Combi boilers, System boilers, Regular
                                boilers, and Back boilers. Each type is designed to meet different heating and hot water
                                needs for various property sizes and requirements.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="faq-question">
                            <span>How do I know which boiler is right for my home?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                The right boiler depends on several factors including the size of your property, number of
                                bathrooms, water pressure, and your hot water usage. Our expert team can help you choose the
                                perfect boiler through our free consultation service. You can also use our online quote tool
                                to get personalized recommendations.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="faq-question">
                            <span>Do you offer financing options?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Yes! We offer flexible financing options to make your boiler purchase more affordable. You
                                can spread the cost over 12, 24, or 36 months with competitive interest rates. Our financing
                                partners offer quick approval and flexible payment plans to suit your budget.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="faq-question">
                            <span>What warranty do your boilers come with?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                All our boilers come with comprehensive warranties ranging from 5 to 10 years depending on
                                the model. This includes parts and labor coverage. We also offer extended warranty options
                                for additional peace of mind.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="faq-question">
                            <span>How long does installation take?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Most boiler installations are completed within 1-2 days. Simple replacements can be done in
                                a single day, while more complex installations involving relocation or system upgrades may
                                take 2-3 days. Our team will provide a detailed timeline during your free consultation.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <div class="faq-question">
                            <span>Do you provide after-sales support and maintenance?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Absolutely! We offer comprehensive after-sales support including annual maintenance
                                services, emergency repairs, and 24/7 customer support. Our maintenance plans help keep your
                                boiler running efficiently and can extend its lifespan significantly.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== FAQ SECTION ENDS =======-->

    <!--===== PRODUCT MODAL STARTS =======-->
    <div id="productModal" class="product-modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeProductModal()">
                <i class="fa-solid fa-times"></i>
            </button>
            <div class="modal-body">
                <div class="modal-product-header">
                    <div class="modal-product-image">
                        <img id="modalProductImage" src="" alt="Product Image">
                    </div>
                    <div class="modal-product-info">
                        <h2 id="modalProductName"></h2>
                        <div class="modal-product-meta">
                            <span class="modal-meta-badge" id="modalProductCategory"></span>
                            <span class="modal-meta-badge" id="modalProductType"></span>
                        </div>
                        <div class="modal-product-price" id="modalProductPrice"></div>
                        <div class="modal-product-description" id="modalProductDescription"></div>
                    </div>
                </div>
                <div class="modal-actions">
                    <button class="modal-btn btn-financing" onclick="handleFinancing()">
                        <i class="fa-solid fa-credit-card"></i>
                        Apply for Financing
                    </button>
                    <button class="modal-btn btn-checkout" onclick="handleCheckout()">
                        <i class="fa-solid fa-shopping-cart"></i>
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--===== PRODUCT MODAL ENDS =======-->

    <!--===== FINANCING FORM MODAL STARTS =======-->
    <div id="financingModal" class="form-modal">
        <div class="form-modal-content">
            <button class="modal-close" onclick="closeFormModal('financingModal')">
                <i class="fa-solid fa-times"></i>
            </button>
            <div class="form-modal-header">
                <h3><i class="fa-solid fa-credit-card"></i> Apply for Financing</h3>
            </div>
            <div class="form-modal-body">
                <form id="financingForm" onsubmit="handleFormSubmit(event, 'financing')">
                    <div class="form-group">
                        <label>Full Name <span class="required">*</span></label>
                        <input type="text" name="full_name" required placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label>Address <span class="required">*</span></label>
                        <textarea name="address" required placeholder="Enter your full address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Email Address <span class="required">*</span></label>
                        <input type="email" name="email" required placeholder="Enter your email address">
                    </div>
                    <div class="form-actions">
                        <button type="button" class="form-btn form-btn-cancel"
                            onclick="closeFormModal('financingModal')">Cancel</button>
                        <button type="submit" class="form-btn form-btn-submit">Submit Application</button>
                    </div>
                </form>
                <div id="financingSuccess" class="success-message">
                    <div class="success-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h3>Application Submitted Successfully!</h3>
                    <p>Thank you for your financing application. Our team will review your request and contact you within 24
                        hours.</p>
                    <button class="success-btn" onclick="closeFormModal('financingModal')">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===== FINANCING FORM MODAL ENDS =======-->

    <!--===== CHECKOUT FORM MODAL STARTS =======-->
    <div id="checkoutModal" class="form-modal">
        <div class="form-modal-content">
            <button class="modal-close" onclick="closeFormModal('checkoutModal')">
                <i class="fa-solid fa-times"></i>
            </button>
            <div class="form-modal-header">
                <h3><i class="fa-solid fa-shopping-cart"></i> Checkout</h3>
            </div>
            <div class="form-modal-body">
                <form id="checkoutForm" onsubmit="handleFormSubmit(event, 'checkout')">
                    <div class="form-group">
                        <label>Full Name <span class="required">*</span></label>
                        <input type="text" name="full_name" required placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label>Address <span class="required">*</span></label>
                        <textarea name="address" required placeholder="Enter your full address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Email Address <span class="required">*</span></label>
                        <input type="email" name="email" required placeholder="Enter your email address">
                    </div>
                    <div class="form-actions">
                        <button type="button" class="form-btn form-btn-cancel"
                            onclick="closeFormModal('checkoutModal')">Cancel</button>
                        <button type="submit" class="form-btn form-btn-submit">Complete Purchase</button>
                    </div>
                </form>
                <div id="checkoutSuccess" class="success-message">
                    <div class="success-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h3>Order Placed Successfully!</h3>
                    <p>Thank you for your purchase! We've received your order and will send a confirmation email shortly.
                        Our team will contact you to schedule the installation.</p>
                    <button class="success-btn" onclick="closeFormModal('checkoutModal')">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--===== CHECKOUT FORM MODAL ENDS =======-->

    <script>
        function handleFormSubmit(event, type) {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const modalId = type === 'financing' ? 'financingModal' : 'checkoutModal';
            const successId = type === 'financing' ? 'financingSuccess' : 'checkoutSuccess';

            // Get form values
            const fullName = formData.get('full_name');
            const address = formData.get('address');
            const email = formData.get('email');

            // Get product ID from modal
            const productId = document.getElementById('productModal').getAttribute('data-product-id');
            const finalPrice = document.getElementById('productModal').getAttribute('data-product-price');
            // Prepare data to send
            const submitData = {
                full_name: fullName,
                address: address,
                email: email,
                product_id: productId,
                finalprice:finalPrice
            };

            // Get CSRF token from meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            if (!csrfToken) {
                alert('Security token not found. Please refresh the page and try again.');
                return;
            }

            // Determine the endpoint
            const endpoint = type === 'financing' ? '/store-financing' : '/store-checkout';

            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;

            if (type === 'financing') {
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting Application...';
            } else {
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Processing Payment...';
            }
            submitBtn.disabled = true;

            // Send data to server
            fetch(endpoint, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(submitData),
                credentials: 'same-origin'
            })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            throw new Error(err.message || 'Server error occurred');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        if (type === 'financing') {
                            // For financing, just show success message
                            form.style.display = 'none';
                            document.getElementById(successId).classList.add('active');

                            console.log('Financing application saved with Quote ID:', data.quote_id);
                        } else {
                            // For checkout, redirect to Stripe
                            if (data.stripe_url) {
                                console.log('Order created with Quote ID:', data.quote_id);
                                console.log('Redirecting to Stripe checkout...');
                                window.location.href = data.stripe_url;
                            } else {
                                throw new Error('Payment URL not received');
                            }
                        }
                    } else {
                        throw new Error(data.message || 'Something went wrong');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error: ' + error.message);
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                });
        }

        // Close form modals and reset
        function closeFormModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
            document.body.style.overflow = 'auto';

            // Reset form and hide success message
            const form = document.querySelector('#' + modalId + ' form');
            const success = document.getElementById(modalId.replace('Modal', 'Success'));

            if (form) {
                form.reset();
                form.style.display = 'block';

                // Reset submit button
                const submitBtn = form.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.disabled = false;
                    if (modalId === 'financingModal') {
                        submitBtn.innerHTML = 'Submit Application';
                    } else {
                        submitBtn.innerHTML = 'Complete Purchase';
                    }
                }
            }
            if (success) {
                success.classList.remove('active');
            }
        }

        // Add hidden input for product_id to forms
        function handleFinancing() {
            closeProductModal();

            const productId = document.getElementById('productModal').getAttribute('data-product-id');

            // Add product_id to form if not exists
            const financingForm = document.getElementById('financingForm');
            let productInput = financingForm.querySelector('input[name="product_id"]');
            if (!productInput) {
                productInput = document.createElement('input');
                productInput.type = 'hidden';
                productInput.name = 'product_id';
                financingForm.appendChild(productInput);
            }
            productInput.value = productId;

            document.getElementById('financingModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function handleCheckout() {
            closeProductModal();

            const productId = document.getElementById('productModal').getAttribute('data-product-id');

            // Add product_id to form if not exists
            const checkoutForm = document.getElementById('checkoutForm');
            let productInput = checkoutForm.querySelector('input[name="product_id"]');
            if (!productInput) {
                productInput = document.createElement('input');
                productInput.type = 'hidden';
                productInput.name = 'product_id';
                checkoutForm.appendChild(productInput);
            }
            productInput.value = productId;

            document.getElementById('checkoutModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        // FAQ Toggle Functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function () {
                const faqItem = this.parentElement;
                const isActive = faqItem.classList.contains('active');

                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });

                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

        // Product Modal Functionality
        document.querySelectorAll('.view-details-btn').forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();

                const productId = this.getAttribute('data-product-id');
                const productName = this.getAttribute('data-product-name');
                const productImage = this.getAttribute('data-product-image');
                const productDescription = this.getAttribute('data-product-description');
                const productCategory = this.getAttribute('data-product-category');
                const productType = this.getAttribute('data-product-type');
                const productPrice = this.getAttribute('data-product-price');

                // Populate modal
                document.getElementById('modalProductName').textContent = productName;
                document.getElementById('modalProductImage').src = productImage;
                document.getElementById('modalProductImage').alt = productName;
                document.getElementById('modalProductDescription').textContent = productDescription;
                document.getElementById('modalProductPrice').textContent = '£ ' + productPrice;

                if (productCategory) {
                    document.getElementById('modalProductCategory').textContent = productCategory;
                    document.getElementById('modalProductCategory').style.display = 'inline-block';
                } else {
                    document.getElementById('modalProductCategory').style.display = 'none';
                }

                if (productType) {
                    document.getElementById('modalProductType').textContent = productType;
                    document.getElementById('modalProductType').style.display = 'inline-block';
                } else {
                    document.getElementById('modalProductType').style.display = 'none';
                }

                // Store product ID for checkout/financing
                document.getElementById('productModal').setAttribute('data-product-id', productId);
                document.getElementById('productModal').setAttribute('data-product-price', productPrice);

                // Show modal
                document.getElementById('productModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeProductModal() {
            document.getElementById('productModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('productModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeProductModal();
            }
        });

        // Close form modals when clicking outside
        document.getElementById('financingModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeFormModal('financingModal');
            }
        });

        document.getElementById('checkoutModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeFormModal('checkoutModal');
            }
        });

        // Close modals on ESC key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                if (document.getElementById('productModal').classList.contains('active')) {
                    closeProductModal();
                }
                if (document.getElementById('financingModal').classList.contains('active')) {
                    closeFormModal('financingModal');
                }
                if (document.getElementById('checkoutModal').classList.contains('active')) {
                    closeFormModal('checkoutModal');
                }
            }
        });
    </script>
@endsection