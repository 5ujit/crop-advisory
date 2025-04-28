<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PestAlert;

class PestAlertSeeder extends Seeder
{
    public function run()
    {
        DB::table('pest_alerts')->truncate(); // Optional: clear old data

        $alerts = [
            [
                'location' => 'Northern',
                'crop' => 'Corn',
                'severity' => 'High',
                'description' => 'Corn borer infestation in 60% of surveyed fields'
            ],
            [
                'location' => 'Southern',
                'crop' => 'Rice',
                'severity' => 'Medium',
                'description' => 'Rice blast fungus detected in paddies'
            ],
            [
                'location' => 'Central',
                'crop' => 'Wheat',
                'severity' => 'Critical',
                'description' => 'Severe aphid attack damaging wheat crops'
            ],
            [
                'location' => 'Eastern',
                'crop' => 'Soybean',
                'severity' => 'Low',
                'description' => 'Mild leaf spot detected in soybean fields'
            ],
            [
                'location' => 'Western',
                'crop' => 'Vegetables',
                'severity' => 'High',
                'description' => 'Whiteflies spreading rapidly in brinjal crops'
            ],
            [
                'location' => 'Northern',
                'crop' => 'Fruits',
                'severity' => 'Medium',
                'description' => 'Fruit borers found in apple orchards'
            ],
            [
                'location' => 'Southern',
                'crop' => 'Corn',
                'severity' => 'Critical',
                'description' => 'Fall armyworm outbreak spreading quickly'
            ],
            [
                'location' => 'Central',
                'crop' => 'Vegetables',
                'severity' => 'Critical',
                'description' => 'Whitefly and leaf miner attack on tomatoes'
            ],
            [
                'location' => 'Western',
                'crop' => 'Cotton',
                'severity' => 'High',
                'description' => 'Pink bollworm larvae in cotton bolls'
            ],
            [
                'location' => 'Eastern',
                'crop' => 'Potatoes',
                'severity' => 'Medium',
                'description' => 'Early signs of late blight in potatoes'
            ],
            [
                'location' => 'Southern',
                'crop' => 'Fruits',
                'severity' => 'High',
                'description' => 'Mango hoppers causing flower drop'
            ],
            [
                'location' => 'Northern',
                'crop' => 'Sugarcane',
                'severity' => 'Critical',
                'description' => 'Red rot disease confirmed in fields'
            ],
            [
                'location' => 'Central',
                'crop' => 'Groundnut',
                'severity' => 'Medium',
                'description' => 'Leaf miner activity increasing'
            ],
            [
                'location' => 'Eastern',
                'crop' => 'Banana',
                'severity' => 'Critical',
                'description' => 'Fusarium wilt detected in plantations'
            ],
            [
                'location' => 'Western',
                'crop' => 'Vegetables',
                'severity' => 'High',
                'description' => 'Thrips damaging chilli crops'
            ],
            [
                'location' => 'Southern',
                'crop' => 'Tea',
                'severity' => 'Medium',
                'description' => 'Mosquito bug populations rising'
            ]
        ];

        foreach ($alerts as $alert) {
            PestAlert::create($alert);
        }
    }
}

