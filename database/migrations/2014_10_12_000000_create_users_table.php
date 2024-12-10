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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('0,1,2')->default('0'); // 0 = admin, 1 = user, 2 = customer
            $table->boolean('status')->default(0); // o belum aktif 1 = aktif
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('hp');
            $table->string('foto'); 
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
