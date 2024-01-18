<?php

namespace Database\Seeders;

use App\Models\Jasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jasa::create([
            'game_id' => '1',
            'product_id' => '1',
            'name' => 'GM V - Epic V',
            'price' => '132500'
        ]);
        
        Jasa::create([
            'game_id' => '1',
            'product_id' => '1',
            'name' => 'Epic V - Legend V',
            'price' => '150000'
        ]);
        Jasa::create([
            'game_id' => '1',
            'product_id' => '1',
            'name' => 'Legend V - Mythic',
            'price' => '180000'
        ]);
        Jasa::create([
            'game_id' => '1',
            'product_id' => '1',
            'name' => 'Mythic - Mythic Honor',
            'price' => '200000'
        ]);

        Jasa::create([
            'game_id' => '2',
            'product_id' => '2',
            'name' => 'Silver - Gold',
            'price' => '70000'
        ]);
        Jasa::create([
            'game_id' => '2',
            'product_id' => '2',
            'name' => 'Gold - Platinum',
            'price' => '10000'
        ]);
        Jasa::create([
            'game_id' => '2',
            'product_id' => '2',
            'name' => 'Platinum - Diamond',
            'price' => '300000'
        ]);
        Jasa::create([
            'game_id' => '2',
            'product_id' => '2',
            'name' => 'Diamond - Asscendant',
            'price' => '750000'
        ]);
        Jasa::create([
            'game_id' => '2',
            'product_id' => '2',
            'name' => 'Asscendant - Immortal',
            'price' => '1000000'
        ]);
        Jasa::create([
            'game_id' => '2',
            'product_id' => '2',
            'name' => 'Immortal - Radiant',
            'price' => '1500000'
        ]);


        Jasa::create([
            'game_id' => '4',
            'product_id' => '3',
            'name' => 'Platinum - Diamond',
            'price' => '200000'
        ]);
        Jasa::create([
            'game_id' => '4',
            'product_id' => '3',
            'name' => 'Diamond - Master',
            'price' => '250000'
        ]);
        Jasa::create([
            'game_id' => '4',
            'product_id' => '3',
            'name' => 'Master - Grandmaster',
            'price' => '500000'
        ]);



        Jasa::create([
            'game_id' => '3',
            'product_id' => '4',
            'name' => 'Diamond - Crown',
            'price' => '75000'
        ]);
        Jasa::create([
            'game_id' => '3',
            'product_id' => '4',
            'name' => 'Crown - Ace',
            'price' => '80000'
        ]);
        Jasa::create([
            'game_id' => '3',
            'product_id' => '4',
            'name' => 'Ace - Ace Master',
            'price' => '120000'
        ]);
        Jasa::create([
            'game_id' => '3',
            'product_id' => '4',
            'name' => 'Ace Master - Ace Domi',
            'price' => '250000'
        ]);
        Jasa::create([
            'game_id' => '3',
            'product_id' => '4',
            'name' => 'Ace Domi - Conqueror',
            'price' => '900000'
        ]);

    }
}
