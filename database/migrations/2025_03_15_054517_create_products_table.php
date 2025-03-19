<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create categories table first
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); // id is unsigned by default
            $table->string('name');
            $table->timestamps();
        });

        // Create discounts table next
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id'); // id is unsigned by default
            $table->string('name');
            $table->decimal('discount_percentage', 5, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        // Create products table last
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id'); // id is unsigned by default
            $table->string('name');
            $table->string('price');
            $table->longText('description');
            $table->string('quantity');
            $table->unsignedInteger('category_id'); // Ensure this matches the referenced column
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('featured_image');
            $table->unsignedInteger('discount_id'); // Ensure this matches the referenced column
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        // Drop tables in reverse order
        Schema::dropIfExists('products');
        Schema::dropIfExists('discounts');
        Schema::dropIfExists('categories');
    }
}