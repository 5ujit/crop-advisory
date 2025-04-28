<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropSuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cropSuggestions = [
            [
                'crop_name' => 'Wheat',
                'region' => 'Northern Highlands',
                'soil_type' => 'Loamy',
                'season' => 'Winter (Dec-Feb)',
                'water_availability' => 'Moderate (Limited irrigation)',
                'image_url' => '/images/crop/wheat.jpg', // Assuming wheat image is here
                'profit_potential' => 'Good',
                'growth_duration' => '120-150 days',
                'water_requirement' => 'Medium',
                'temperature_range' => '15-25°C',
            ],
            [
                'crop_name' => 'Rice',
                'region' => 'Central Valley',
                'soil_type' => 'Clay',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'High (Irrigation available)',
                'image_url' => '/images/crop/rice.jpg', // Assuming rice image is here (could be .jpg, .gif, etc.)
                'profit_potential' => 'High',
                'growth_duration' => '100-130 days',
                'water_requirement' => 'High',
                'temperature_range' => '20-35°C',
            ],
            // ... and so on for other crops, adjusting the image URL accordingly
            [
                'crop_name' => 'Corn',
                'region' => 'Southern Plains',
                'soil_type' => 'Sandy',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'High (Irrigation available)',
                'image_url' => '/images/crop/corn.jpg',
                'profit_potential' => 'Good',
                'growth_duration' => '90-120 days',
                'water_requirement' => 'Moderate',
                'temperature_range' => '20-30°C',
            ],
            [
                'crop_name' => 'Barley',
                'region' => 'Northern Highlands',
                'soil_type' => 'Loamy',
                'season' => 'Spring (Mar-May)',
                'water_availability' => 'Low (Rainfed only)',
                'image_url' => '/images/crop/barley.jpg',
                'profit_potential' => 'Medium',
                'growth_duration' => '90-110 days',
                'water_requirement' => 'Low',
                'temperature_range' => '15-22°C',
            ],
            [
                'crop_name' => 'Soybeans',
                'region' => 'Southern Plains',
                'soil_type' => 'Loamy',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'Moderate (Limited irrigation)',
                'image_url' => '/images/crop/soybeans.jpg',
                'profit_potential' => 'High',
                'growth_duration' => '100-130 days',
                'water_requirement' => 'Moderate',
                'temperature_range' => '22-30°C',
            ],
            [
                'crop_name' => 'Potatoes',
                'region' => 'Eastern Foothills',
                'soil_type' => 'Loamy',
                'season' => 'Autumn (Sep-Nov)',
                'water_availability' => 'High (Irrigation available)',
                'image_url' => '/images/crop/potatoes.jpg',
                'profit_potential' => 'Good',
                'growth_duration' => '90-120 days',
                'water_requirement' => 'High',
                'temperature_range' => '15-25°C',
            ],
            [
                'crop_name' => 'Tomatoes',
                'region' => 'Central Valley',
                'soil_type' => 'Loamy',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'Moderate (Limited irrigation)',
                'image_url' => '/images/crop/tomatoes.jpg',
                'profit_potential' => 'High',
                'growth_duration' => '60-90 days',
                'water_requirement' => 'Moderate',
                'temperature_range' => '20-30°C',
            ],
            [
                'crop_name' => 'Spinach',
                'region' => 'Northern Highlands',
                'soil_type' => 'Sandy',
                'season' => 'Spring (Mar-May)',
                'water_availability' => 'Low (Rainfed only)',
                'image_url' => '/images/crop/spinach.jpg',
                'profit_potential' => 'Medium',
                'growth_duration' => '40-50 days',
                'water_requirement' => 'Low',
                'temperature_range' => '15-25°C',
            ],
            [
                'crop_name' => 'Bell Peppers',
                'region' => 'Southern Plains',
                'soil_type' => 'Loamy',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'High (Irrigation available)',
                'image_url' => '/images/crop/bell_peppers.jpg',
                'profit_potential' => 'Good',
                'growth_duration' => '60-80 days',
                'water_requirement' => 'Moderate',
                'temperature_range' => '20-30°C',
            ],
            [
                'crop_name' => 'Groundnuts',
                'region' => 'Southern Plains',
                'soil_type' => 'Sandy',
                'season' => 'Autumn (Sep-Nov)',
                'water_availability' => 'Low (Rainfed only)',
                'image_url' => '/images/crop/groundnuts.jpg',
                'profit_potential' => 'High',
                'growth_duration' => '120-160 days',
                'water_requirement' => 'Low',
                'temperature_range' => '20-30°C',
            ],
            [
                'crop_name' => 'Sugarcane',
                'region' => 'Central Valley',
                'soil_type' => 'Loamy',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'High (Irrigation available)',
                'image_url' => '/images/crop/sugarcane.jpg',
                'profit_potential' => 'High',
                'growth_duration' => '300-365 days',
                'water_requirement' => 'High',
                'temperature_range' => '20-35°C',
            ],
            [
                'crop_name' => 'Mustard',
                'region' => 'Northern Highlands',
                'soil_type' => 'Loamy',
                'season' => 'Winter (Dec-Feb)',
                'water_availability' => 'Low (Rainfed only)',
                'image_url' => '/images/crop/mustard.jpg',
                'profit_potential' => 'Medium',
                'growth_duration' => '100-120 days',
                'water_requirement' => 'Low',
                'temperature_range' => '10-25°C',
            ],
            [
                'crop_name' => 'Cotton',
                'region' => 'Southern Plains',
                'soil_type' => 'Clay',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'Moderate (Limited irrigation)',
                'image_url' => '/images/crop/cotton.jpg',
                'profit_potential' => 'High',
                'growth_duration' => '150-200 days',
                'water_requirement' => 'Moderate',
                'temperature_range' => '25-35°C',
            ],
            [
                'crop_name' => 'Onions',
                'region' => 'Western Coast',
                'soil_type' => 'Sandy Loam', // Assuming a possible soil type
                'season' => 'Winter (Dec-Feb)',
                'water_availability' => 'Moderate (Limited irrigation)',
                'image_url' => '/images/crop/onions.jpg',
                'profit_potential' => 'Good',
                'growth_duration' => '120-150 days',
                'water_requirement' => 'Moderate',
                'temperature_range' => '15-25°C',
            ],
            [
                'crop_name' => 'Mangoes',
                'region' => 'Western Coast',
                'soil_type' => 'Loamy',
                'season' => 'Summer (Jun-Aug)',
                'water_availability' => 'Low (Rainfed only)', // Mature trees are often rainfed
                'image_url' => '/images/crop/mangoes.jpg',
                'profit_potential' => 'High',
                'growth_duration' => 'N/A (Perennial)',
                'water_requirement' => 'Low',
                'temperature_range' => '25-35°C',
            ],
        ];

        foreach ($cropSuggestions as $suggestion) {
            DB::table('crop_suggestions')->updateOrInsert(
                [
                    'crop_name' => $suggestion['crop_name'],
                    'region' => $suggestion['region'],
                    'soil_type' => $suggestion['soil_type'],
                    'season' => $suggestion['season'],
                    'water_availability' => $suggestion['water_availability'],
                ],
                $suggestion
            );
        }
    }
}