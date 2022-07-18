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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('foto')->default('me.jpg');
            $table->enum('genre',['Laki-Laki','Perempuan'])->nullable();
            $table->string('email')->unique();
            $table->string('google_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->string('no')->unique()->nullable();
            $table->string('password');
            $table->decimal('payaja',$precision = 15)->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('role')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};