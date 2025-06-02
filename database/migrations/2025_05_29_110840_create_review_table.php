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
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable()->default(null);
            $table->integer('product_id')->nullable()->default(null);
            $table->string('review_title')->nullable()->default(null);
            $table->string('review_description')->nullable()->default(null);
            $table->integer('recommend_product')->nullable()->default(null);
            $table->string('rating')->nullable()->default(null);
            $table->integer('status')->default(1);
            $table->softDeletes('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
