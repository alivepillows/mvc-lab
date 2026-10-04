<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //menambahkan struktur tabel baru ke dalam database
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->unsignedSmallInteger('year');
            $table->string('isbn')->nullable();
            $table->timestamps(); //disarankan karena untuk mencatat kapan data dibuat dan diubah
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //menghapus struktur tabel dari database
    {
        Schema::dropIfExists('books');
    }
};
