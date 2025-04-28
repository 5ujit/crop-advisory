<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crop;

class CropSeeder extends Seeder
{
    public function run()
    {
        $crops = [
            [
                'name' => 'Wheat',
                'description' => 'Wheat is a staple cereal grain grown worldwide.',
                'ideal_conditions' => 'Cool climate, well-drained loamy soil, moderate rainfall.'
            ],
            [
                'name' => 'Rice',
                'description' => 'Rice is a water-loving grain grown mainly in flooded fields.',
                'ideal_conditions' => 'Warm temperatures, heavy rainfall, clayey soil.'
            ],
            [
                'name' => 'Maize',
                'description' => 'Maize is a widely grown cereal used for food and fodder.',
                'ideal_conditions' => 'Warm climate, sandy loam soil, moderate rainfall.'
            ],
            [
                'name' => 'Sugarcane',
                'description' => 'Used for sugar and juice production.',
                'ideal_conditions' => 'Hot climate, fertile loamy soil, abundant water.'
            ],
            [
                'name' => 'Cotton',
                'description' => 'Cotton is a fiber crop used in the textile industry.',
                'ideal_conditions' => 'Warm climate, black soil, moderate rainfall.'
            ],
            [
                'name' => 'Mustard',
                'description' => 'Mustard seeds are used to produce oil and condiments.',
                'ideal_conditions' => 'Cool temperatures, loamy soil, low to moderate rainfall.'
            ],
            [
                'name' => 'Barley',
                'description' => 'Barley is used as food, fodder, and in brewing.',
                'ideal_conditions' => 'Cool climate, well-drained soil, less water.'
            ],
            [
                'name' => 'Bajra (Pearl Millet)',
                'description' => 'Drought-resistant cereal crop used for food and fodder.',
                'ideal_conditions' => 'Hot and dry climate, sandy soil.'
            ],
            [
                'name' => 'Groundnut (Peanut)',
                'description' => 'Oilseed crop grown in tropical regions.',
                'ideal_conditions' => 'Warm climate, sandy loam soil, moderate rainfall.'
            ],
            [
                'name' => 'Soybean',
                'description' => 'Protein-rich legume used for oil and food.',
                'ideal_conditions' => 'Warm climate, well-drained soil, good sunlight.'
            ],
            [
                'name' => 'Chickpea (Gram)',
                'description' => 'Pulse crop rich in protein, grown in rabi season.',
                'ideal_conditions' => 'Cool, dry climate, well-drained loam soil.'
            ],
            [
                'name' => 'Lentil',
                'description' => 'Pulse crop that fixes nitrogen in the soil.',
                'ideal_conditions' => 'Cool climate, sandy loam soil.'
            ],
            [
                'name' => 'Tomato',
                'description' => 'Widely used vegetable in cooking and salads.',
                'ideal_conditions' => 'Warm climate, well-drained soil, regular watering.'
            ],
            [
                'name' => 'Potato',
                'description' => 'Root vegetable used globally in many dishes.',
                'ideal_conditions' => 'Cool climate, sandy loam soil.'
            ],
            [
                'name' => 'Onion',
                'description' => 'Aromatic bulb crop essential in Indian cuisine.',
                'ideal_conditions' => 'Well-drained soil, warm weather, low humidity.'
            ],
            [
                'name' => 'Garlic',
                'description' => 'Medicinal and culinary crop with strong aroma.',
                'ideal_conditions' => 'Cool season, sandy loam soil, good drainage.'
            ],
            [
                'name' => 'Banana',
                'description' => 'Tropical fruit crop, grows year-round.',
                'ideal_conditions' => 'Humid climate, rich loamy soil, high rainfall.'
            ],
            [
                'name' => 'Papaya',
                'description' => 'Fast-growing tropical fruit plant.',
                'ideal_conditions' => 'Warm climate, well-drained soil.'
            ],
            [
                'name' => 'Mango',
                'description' => 'Popular seasonal fruit known as the king of fruits.',
                'ideal_conditions' => 'Tropical/subtropical climate, well-drained soil.'
            ],
            [
                'name' => 'Tea',
                'description' => 'Beverage crop grown on hills.',
                'ideal_conditions' => 'Cool and moist climate, acidic soil, high humidity.'
            ]
        ];

        foreach ($crops as $crop) {
            Crop::create($crop);
        }
    }
}
