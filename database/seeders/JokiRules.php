<?php

namespace Database\Seeders;

use App\Models\JokiRule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JokiRules extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JokiRule::create([
            'product_id' => '1',
            'rules' => 'Matikan centang verify di pengaturan ML.'
        ]);
        JokiRule::create([
            'product_id' => '1',
            'rules' => 'Jika dilogin 3x selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa direfund.'
        ]);
        JokiRule::create([
            'product_id' => '2',
            'rules' => 'Jika dilogin tanpa ijin selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa direfund.'
        ]);

        JokiRule::create([
            'product_id' => '3',
            'rules' => 'Jika dilogin tanpa ijin selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa direfund.'
        ]);
        JokiRule::create([
            'product_id' => '4',
            'rules' => 'Jika dilogin tanpa ijin selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa direfund.'
        ]);
        JokiRule::create([
            'product_id' => '5',
            'rules' => 'Jika dilogin tanpa ijin selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa direfund.'
        ]);
        JokiRule::create([
            'product_id' => '6',
            'rules' => 'Jika dilogin tanpa ijin selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa direfund.'
        ]);
        JokiRule::create([
            'product_id' => '7',
            'rules' => 'Jika dilogin tanpa ijin selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa direfund.'
        ]);
    }
}
