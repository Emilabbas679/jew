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

        Schema::create('designers', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->tinyInteger('status')->default(1)->index();
            $table->timestamps();
            $table->index('created_at');
            $table->index('updated_at');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('about')->nullable();
            $table->tinyInteger('status')->default(1)->index();
            $table->float('price')->nullable()->index();
            $table->float('sale_price')->nullable()->index();
            $table->float('size')->default(0)->index();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('occasion_id')->nullable();
            $table->unsignedBigInteger('material_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->unsignedBigInteger('designer_id')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('occasion_id')->references('id')->on('occasions')->onDelete('cascade');
            $table->foreign('material_id')->references('id')->on('materials')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('designer_id')->references('id')->on('designers')->onDelete('cascade');
            $table->index('created_at');
            $table->index('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
