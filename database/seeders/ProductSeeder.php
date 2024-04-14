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
            'img' => '2.webp',
            'webm' => 'ml.webm'
        ]);
        Product::create([
            'game_id' => '2',
            'name' => 'Joki Competitive',
            'img' => '1.webp',
            'webm' => 'valo.webm'
        ]);
        Product::create([
            'game_id' => '4',
            'name' => 'Joki Rank',
            'img' => '3.webp',
            'webm' => 'ff.webm'
        ]);
        Product::create([
            'game_id' => '3',
            'name' => 'Joki Classic Ranked',
            'img' => '4.webp',
            'webm' => 'pubg.webm'
        ]);
        Product::create([
            'game_id' => '5',
            'name' => 'Joki Rank Dota 2',
            'img' => '5.webp',
            'webm' => 'dota2.webm'
        ]);
        Product::create([
            'game_id' => '6',
            'name' => 'Joki Tier',
            'img' => '6.webp',
            'webm' => 'csgo.webm'
        ]);
        Product::create([
            'game_id' => '7',
            'name' => 'Joki Tier War',
            'img' => '7.webp',
            'webm' => 'thunder.webm'
        ]);

        
    }
}
