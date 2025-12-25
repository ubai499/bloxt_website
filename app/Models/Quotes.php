<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'address',
        'email',
        'zip_code',
        'ownership',
        'home_type',
        'flat_floor',
        'bungalow_floors',
        'bedrooms',
        'bathtubs',
        'separate_showers',
        'radiators',
        'fuel_type',
        'current_boiler_type',
        'convert_to_combi',
        'boiler_condition',
        'boiler_mounting',
        'boiler_age',
        'current_boiler_location',
        'stay_duration',
        'relocate_boiler',
        'new_boiler_location',
        'accept_access_charges',
        'trvs',
        'water_meter',
        'flue_location',
        'roof_type',
        'roof_position',
        'wall_distance',
        'flue_ground_height',
        'flue_property_distance',
        'flue_under_structure',
        'flue_door_window_distance',
        'product_id',
        'product_price',
        'transaction_type',
        'status',
        'stripe_session_id',
        'stripe_payment_intent',
        'payment_status',
        'client_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
