<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->float('price', 10, 2);
            $table->string('tag');
            $table->unsignedBigInteger('category_id')->nullable(); // Menggunakan column baru "category_id" dengan tipe unsignedBigInteger
            $table->text('description');
            $table->text('photo')->nullable();
            $table->text('benefits')->nullable();
            $table->text('additional_information')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); // Menambahkan foreign key relasi ke table "categories"
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
