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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('is_featured');
            $table->boolean('is_hot');
            $table->decimal('price');
            $table->decimal('sale_price')->nullable();
            $table->boolean('is_out_of_stock');
            $table->integer('depot');
            $table->integer('inventory');
            $table->boolean('is_active');
            $table->boolean('is_sale');
            $table->string('images')->nullable();;
            // $table->foreignId('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->softDeletes(); 
            $table->timestamps();
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
}
