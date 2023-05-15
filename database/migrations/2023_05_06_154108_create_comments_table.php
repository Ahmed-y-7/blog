<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * comments هنا عملنا بناء في قاعدة البيانات مجلد جديد باسم 
     *  php artisan migrate بعد مانقوم بكتابة البيانات عشان نرفعها الى قاعدة البيانات نقوم بكتابة في ترامنل لورقن  
     */ 
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('body');
            $table->boolean('approved')->default(false);
            $table->foreignId('post_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
