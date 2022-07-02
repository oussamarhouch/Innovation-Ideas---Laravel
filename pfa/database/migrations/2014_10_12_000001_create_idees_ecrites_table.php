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
        Schema::create('idees_ecrites', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('idee');
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');
            $table->integer('rating')->default('0');
            $table->string('defi');
            $table->rememberToken();
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
        Schema::dropIfExists('idees_ecrites');
    }
};
