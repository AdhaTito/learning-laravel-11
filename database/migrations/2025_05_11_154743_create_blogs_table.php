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
        Schema::create('blogs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('slug', 52)->nullable();
            $table->string('title', 362)->nullable();
            // $table->unsignedBigInteger('author_id');                     
            // $table->foreign('author_id')->references('id')->on('users'); 
            $table->foreignId('author_id')->constrained(             // Kedua baris ini sebagai relasi antar 2 tabel  
                table: 'users',                                     // yaitu tabel blog dan users
                indexName: 'posts_author_id'
            );
            $table->foreignId('category_id')->constrained(             // Kedua baris ini sebagai relasi antar 2 tabel  
                table: 'categories',                                     // yaitu tabel blog dan users
                indexName: 'posts_category_id'
            );
            $table->text('blog')->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
