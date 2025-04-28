<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropSuggestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'crop_name',
        'profit_potential',
        'growth_duration',
        'water_requirement',
        'temperature_range',
        'image_url', // Add image_url here
    ];
}
