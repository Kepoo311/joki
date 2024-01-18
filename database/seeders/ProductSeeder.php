<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'game_id' => '1',
            'name' => 'Joki Rank S-13',
            'img' => 'https://i.ibb.co/brcTjPD/card.png'
        ]);
        Product::create([
            'game_id' => '2',
            'name' => 'Joki Competitive',
            'img' => 'https://i.ibb.co/2v98y1W/20240110-084110.png'
        ]);
        Product::create([
            'game_id' => '4',
            'name' => 'Joki Rank',
            'img' => 'https://i.ibb.co/3ydd8rf/20240110-084505.png'
        ]);
        Product::create([
            'game_id' => '3',
            'name' => 'Joki Classic Ranked',
            'img' => 'https://i.ibb.co/fFvhb9p/20240110-084936.png'
        ]);

    }
}
