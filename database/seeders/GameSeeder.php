<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'name' => 'Mobile Legend'
        ]);
        Game::create([
            'name' => 'Valorant'
        ]);
        Game::create([
            'name' => 'Pubg Mobile'
        ]);
        Game::create([
            'name' => 'Free Fire'
        ]);
        Game::create([
            'name' => 'Dota 2'
        ]);
        Game::create([
            'name' => 'CSGO 2'
        ]);
        Game::create([
            'name' => 'War Thunder'
        ]);
    }
}
