<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\payment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();

        User::create([
            'profil' => 'potoPP.png',
            'fullname' => 'kepo',
            'username' => 'kepo',
            'email' => 'eeeeee',
            'role' => "user",
            'noTelpon' => "1234567892341",
            'password' => "12345",
        ]);

        payment::create([
            "payment_method" =>  "Gopay",
            "img" => "https://www.pointstar-consulting.com/wp-content/uploads/2022/02/gopay-integration.png"
        ]);
        payment::create([
            "payment_method" =>  "Ovo",
            "img" => "https://www.linkqu.id/wp-content/uploads/2021/07/ovologo.png.webp"
        ]);
        payment::create([
            "payment_method" =>  "ShopeePay",
            "img" => "https://play-lh.googleusercontent.com/H7Ja21f7Q66xICkTSzWzjR3E9IB_2YQUbt0xlHtFdXSdUOdbOqQxxCVxiA73mm8heA"
        ]);
        payment::create([
            "payment_method" =>  "Dana",
            "img" => "https://siberkota.com/wp-content/uploads/2023/09/DANA.jpg"
        ]);
        payment::create([
            "payment_method" =>  "Qris",
            "img" => "https://home.oxygen.id/assets/images/info-pembayaran/qris-logo.png"
        ]);

        $this->call([
            GameSeeder::class,
            JasaSeeder::class,
            ProductSeeder::class,
            roleSeeder::class,
            RolePermisSeeder::class,
            JokiRules::class
        ]);
    }
}
