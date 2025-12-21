<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();

            // Customer Information
            $table->string('full_name')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('zip_code')->nullable();

            // Property & Ownership
            $table->string('ownership')->nullable();
            $table->string('home_type')->nullable();
            $table->string('flat_floor')->nullable();
            $table->string('bungalow_floors')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathtubs')->nullable();
            $table->string('separate_showers')->nullable();
            $table->string('radiators')->nullable();

            // Boiler Information
            $table->string('fuel_type')->nullable();
            $table->string('current_boiler_type')->nullable();
            $table->string('convert_to_combi')->nullable();
            $table->string('boiler_condition')->nullable();
            $table->string('boiler_mounting')->nullable();
            $table->string('boiler_age')->nullable();
            $table->string('current_boiler_location')->nullable();

            // Relocation & Installation
            $table->string('stay_duration')->nullable();
            $table->string('relocate_boiler')->nullable();
            $table->string('new_boiler_location')->nullable();
            $table->string('accept_access_charges')->nullable();

            // Additional Features
            $table->string('trvs')->nullable();
            $table->string('water_meter')->nullable();

            // Flue Information
            $table->string('flue_location');
            $table->string('roof_type')->nullable();
            $table->string('roof_position')->nullable();
            $table->string('wall_distance')->nullable();
            $table->string('flue_ground_height')->nullable();
            $table->string('flue_property_distance')->nullable();
            $table->string('flue_under_structure')->nullable();
            $table->string('flue_door_window_distance')->nullable();

            // Product Selection
            $table->unsignedBigInteger('product_id')->nullable();
            $table->decimal('product_price', 10, 2)->nullable();

            // Transaction Information
            $table->enum('transaction_type', ['financing', 'checkout'])->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected', 'completed'])->default('pending');
            $table->string('stripe_session_id')->nullable();
            $table->string('stripe_payment_intent')->nullable();
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
