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
            'name' => 'Google'
        ]);
        // VALO
        LoginVia::create([
            'product_id' => '2',
            'name' => 'Google'
        ]);
        // PUBG
        LoginVia::create([
            'product_id' => '3',
            'name' => 'Google'
        ]);
        // FF
        LoginVia::create([
            'product_id' => '4',
            'name' => 'Google'
        ]);
        // DOTO
        LoginVia::create([
            'product_id' => '5',
            'name' => 'Google'
        ]);
        // CSGO
        LoginVia::create([
            'product_id' => '6',
            'name' => 'Google'
        ]);
        // WAR THUNDER
        LoginVia::create([
            'product_id' => '7',
            'name' => 'Google'
        ]);
    }
}
