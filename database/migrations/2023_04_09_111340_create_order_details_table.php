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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            //first_name, last_name, phone, address1, address2, city, state, zipcode, country_code
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('city',45);
            $table->string('state',45)->nullable();
            $table->string('zipcode',45);
            $table->string('country_code',3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
