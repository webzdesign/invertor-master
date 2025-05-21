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
        Schema::create('quotation_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("quotation_id")->references("id")->on("quotations")->cascadeOnDelete();
            $table->foreignId("product_id")->nullable()->references("id")->on("products")->nullOnDelete();
            $table->foreignId("category_id")->nullable()->references("id")->on("categories")->nullOnDelete();
            $table->string("name")->nullable();
            $table->integer("quantity")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_items');
    }
};
