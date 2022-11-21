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
        Schema::create('utility', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('brand');
            $table->string('type');
            $table->string('area');
            $table->string('price');
            $table->string('imagename');
            $table->string('imagepath');
            $table->boolean('isRent')->default(false);
            $table->foreignId('cust_id')->nullable()->references('id')->on('users');
            $table->foreignId('owner_id')->nullable()->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utility');
    }
};
