@extends('layouts.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 mx-auto">
                                    <div class="quote-overview mb-4">
                                        <h5 class="mb-3">Quote Overview</h5>

                                        <!-- Customer Information -->
                                        <div class="info-section mb-3">
                                            <h6 class="text-muted mb-2">Customer Information</h6>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <strong>Name:</strong> {{ $quote->full_name }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Email:</strong> {{ $quote->email }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Address:</strong> {{ $quote->address }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>ZIP Code:</strong> {{ $quote->zip_code }}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Property Details -->
                                        <div class="info-section mb-3">
                                            <h6 class="text-muted mb-2">Property Details</h6>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <strong>Ownership Status:</strong> {{ $quote->ownership }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Home Type:</strong> {{ $quote->home_type }}
                                                </div>
                                                @if($quote->flat_floor)
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Floor:</strong> {{ $quote->flat_floor }}
                                                    </div>
                                                @endif
                                                @if($quote->bungalow_floors)
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Floors:</strong> {{ $quote->bungalow_floors }}
                                                    </div>
                                                @endif
                                                <div class="col-md-6 mb-2">
                                                    <strong>Bedrooms:</strong> {{ $quote->bedrooms }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Bathtubs:</strong> {{ $quote->bathtubs }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Separate Showers:</strong> {{ $quote->separate_showers }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Radiators:</strong> {{ $quote->radiators }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Stay Duration:</strong> {{ $quote->stay_duration }}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Current Boiler Information -->
                                        <div class="info-section mb-3">
                                            <h6 class="text-muted mb-2">Current Boiler Information</h6>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <strong>Fuel Type:</strong> {{ $quote->fuel_type }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Boiler Type:</strong> {{ $quote->current_boiler_type }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Condition:</strong> {{ $quote->boiler_condition }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Age:</strong> {{ $quote->boiler_age }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Mounting Type:</strong> {{ $quote->boiler_mounting }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Location:</strong> {{ $quote->current_boiler_location }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Convert to Combi:</strong> {{ $quote->convert_to_combi }}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Installation Details -->
                                        <div class="info-section mb-3">
                                            <h6 class="text-muted mb-2">Installation Details</h6>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <strong>Relocate Boiler:</strong> {{ $quote->relocate_boiler }}
                                                </div>
                                                @if($quote->new_boiler_location)
                                                    <div class="col-md-6 mb-2">
                                                        <strong>New Location:</strong> {{ $quote->new_boiler_location }}
                                                    </div>
                                                @endif
                                                <div class="col-md-6 mb-2">
                                                    <strong>TRVs:</strong> {{ $quote->trvs }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Water Meter:</strong> {{ $quote->water_meter }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Accept Access Charges:</strong>
                                                    {{ $quote->accept_access_charges }}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Flue & Roof Information -->
                                        <div class="info-section mb-3">
                                            <h6 class="text-muted mb-2">Flue & Roof Information</h6>
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <strong>Flue Location:</strong> {{ $quote->flue_location }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Roof Type:</strong> {{ $quote->roof_type }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Roof Position:</strong> {{ $quote->roof_position }}
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <strong>Distance from Wall:</strong> {{ $quote->wall_distance }}
                                                </div>
                                                @if($quote->flue_ground_height)
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Flue Ground Height:</strong> {{ $quote->flue_ground_height }}
                                                    </div>
                                                @endif
                                                @if($quote->flue_property_distance)
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Flue Property Distance:</strong>
                                                        {{ $quote->flue_property_distance }}
                                                    </div>
                                                @endif
                                                @if($quote->flue_under_structure)
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Flue Under Structure:</strong>
                                                        {{ $quote->flue_under_structure }}
                                                    </div>
                                                @endif
                                                @if($quote->flue_door_window_distance)
                                                    <div class="col-md-6 mb-2">
                                                        <strong>Flue Door/Window Distance:</strong>
                                                        {{ $quote->flue_door_window_distance }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Transaction & Status -->
                                        @if($quote->transaction_type || $quote->status || $quote->payment_status)
                                            <div class="info-section mb-3">
                                                <h6 class="text-muted mb-2">Transaction & Status</h6>
                                                <div class="row">
                                                    @if($quote->transaction_type)
                                                        <div class="col-md-6 mb-2">
                                                            <strong>Transaction Type:</strong> {{ $quote->transaction_type }}
                                                        </div>
                                                    @endif
                                                    @if($quote->status)
                                                        <div class="col-md-6 mb-2">
                                                            <strong>Status:</strong> <span
                                                                class="badge bg-info">{{ $quote->status }}</span>
                                                        </div>
                                                    @endif
                                                    @if($quote->payment_status)
                                                        <div class="col-md-6 mb-2">
                                                            <strong>Payment Status:</strong> <span
                                                                class="badge bg-success">{{ $quote->payment_status }}</span>
                                                        </div>
                                                    @endif

                                                    @if($quote->product_price)
                                                        <div class="col-md-6 mb-2">
                                                            <strong>Price:</strong> <span
                                                                class="badge bg-success">£ {{ $quote->product_price }}</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="mb-4">
                                        <h5>Interested In:</h5>
                                        <h4>{{ ucwords(str_replace('-', ' ', @$quote->product->title)) }}</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <a href="{{ route('admin.quotes') }}"
                                        class="btn btn-light waves-effect waves-light m-1">
                                        <i class="fe-list me-1"></i> Back to List
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection