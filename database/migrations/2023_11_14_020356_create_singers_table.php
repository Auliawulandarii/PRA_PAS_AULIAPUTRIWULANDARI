<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('singers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('genre');
            $table->integer('debut_year');
            $table->string('Bio');
            $table->date('date_Birth');
            $table->string('Place_Birth');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('singers');
    }
};
