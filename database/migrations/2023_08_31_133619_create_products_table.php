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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->unsignedInteger('price');
            $table->unsignedBigInteger('stock')->nullable();
            $table->longtext('description', 300);
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign("shop_id")->references("user_id")->on("shops");
            $table->foreign("category_id")->references("id")->on("categories");

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
