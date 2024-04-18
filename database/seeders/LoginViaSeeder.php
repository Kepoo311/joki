<?php

namespace Database\Seeders;

use App\Models\LoginVia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginViaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ML
        LoginVia::create([
            'product_id' => '1',
            'name' => 'Moonton'
        ]);
        LoginVia::create([
            'product_id' => '1',
            'name' => 'Facebook'
        ]);
        LoginVia::create([
            'product_id' => '1',
            'name' => 'TikTok'
        ]);
        LoginVia::create([
            'product_id' => '1',
            'name' => 'VK'
        ]);
        // VALO
        LoginVia::create([
            'product_id' => '2',
            'name' => 'Riot'
        ]);
        LoginVia::create([
            'product_id' => '2',
            'name' => 'Facebook'
        ]);
        LoginVia::create([
            'product_id' => '2',
            'name' => 'Google'
        ]);
        // FF
        LoginVia::create([
            'product_id' => '3',
            'name' => 'Facebook'
        ]);
        LoginVia::create([
            'product_id' => '3',
            'name' => 'Google'
        ]);
        LoginVia::create([
            'product_id' => '3',
            'name' => 'Twitter'
        ]);
        LoginVia::create([
            'product_id' => '3',
            'name' => 'VK'
        ]);
        // PUBG
        LoginVia::create([
            'product_id' => '4',
            'name' => 'Facebook'
        ]);
        LoginVia::create([
            'product_id' => '4',
            'name' => 'Google'
        ]);
        LoginVia::create([
            'product_id' => '4',
            'name' => 'Twitter'
        ]);
    
        LoginVia::create([
            'product_id' => '4',
            'name' => 'Email'
        ]);
        // DOTO
        LoginVia::create([
            'product_id' => '5',
            'name' => 'Stem'
        ]);
        // CSGO
        LoginVia::create([
            'product_id' => '6',
            'name' => 'Steam'
        ]);
        // WAR THUNDER
        LoginVia::create([
            'product_id' => '7',
            'name' => 'Gaijin'
        ]);

        LoginVia::create([
            'product_id' => '7',
            'name' => 'Steam'
        ]);
    }
}
