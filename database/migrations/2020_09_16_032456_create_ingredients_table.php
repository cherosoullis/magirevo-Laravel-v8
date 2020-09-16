<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order');
            $table->unsignedInteger('heading_id');
            $table->string('heading')->nullable();
            $table->string('quantity', 8, 2)->nullable();
            $table->string('unit')->nullable();
            $table->foreignId('foodstaff_id')->nullable()->references('id')->on('foodstaffs')->onDelete('cascade');
            $table->string('details')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreignId('recipe_id')->references('id')->on('recipes')->onDelete('cascade')->constrained();
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
        Schema::dropIfExists('ingredients');
    }
}
