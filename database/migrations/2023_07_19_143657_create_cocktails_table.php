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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->string("idDrink", 10);
            $table->string("strDrink", 100);
            $table->string("strCategory", 50);
            $table->string("strAlcoholic", 30);
            $table->string("strGlass", 30);
            $table->text("strInstructions");
            $table->text("strInstructionsIT");
            $table->text("strDrinkThumb");
            $table->id();
       
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
        Schema::dropIfExists('cocktails');
    }
};
