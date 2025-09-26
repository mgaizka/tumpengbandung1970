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
        Schema::create('menu_nasis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_paket');
            $table->string('card_desc');
            $table->string('desc');
            $table->integer('harga');
            $table->string('kategori');
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_nasis');
    }
};
