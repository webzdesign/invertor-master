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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string("quotation_no")->nullable();
            $table->string("customer_name");
            $table->string("post_code")->nullable();
            $table->string("phone")->nullable();
            $table->string("country_dial_code")->nullable();
            $table->string("country_iso_code")->nullable();
            $table->string("purchase_source")->nullable();
            $table->dateTime("quotation_date")->nullable();
            $table->tinyInteger("is_sheet_added")->default(0)->comment("0 = Pending\n1 = Added on Google Sheet");
            $table->tinyInteger("status")->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
