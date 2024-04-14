<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ongoings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('product_id');
            $table->string('nickname');
            $table->string('logVia');
            $table->string('email');
            $table->string('password');
            $table->string('reqHero');
            $table->string('pesan');
            $table->string('paket-joki');
            $table->string('rank');
            $table->string('harga');
            $table->string('payment');
            $table->string('noTelpon');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongoings');
    }
};
