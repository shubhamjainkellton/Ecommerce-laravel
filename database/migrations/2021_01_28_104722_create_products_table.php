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
            $table->integer('category_id');
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->longText('short_desc')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('technical_specification')->nullable();
            $table->longText('uses')->nullable();
            $table->longText('warranty')->nullable();
            $table->integer('status');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('lead_time')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('is_promo');
            $table->string('is_featured');
            $table->string('is_discounted');
            $table->string('is_tranding');
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
