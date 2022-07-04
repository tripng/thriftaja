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
        Schema::create('rincian_pengirimen', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('detail_address');
            $table->string('city');
            $table->integer('postcode');
            $table->string('handphone');
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
        Schema::dropIfExists('rincian_pengirimen');
    }
};