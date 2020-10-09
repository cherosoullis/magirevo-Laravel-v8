<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->string('difficulty')->nullable();
            $table->string('photo')->default('food.png');
            $table->string('video')->nullable();
            // $table->longText('execution');
            $table->time('prep_time')->default(0)->nullable();   //minutes
            $table->time('cook_time')->default(0)->nullable();   //minutes
            $table->string('portion')->nullable();//how many servings or portions
            $table->string('serving_size')->nullable();//what size the serving is (people, cups, etc)
            // $table->foreignId('tag_id')->references('id')->on('tags')->onDelete('cascade')->constrained();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->constrained();
            $table->foreignId('cuisine_id')->nullable()->references('id')->on('cuisines')->onDelete('cascade')->constrained();
            $table->foreignId('feature_id')->nullable()->references('id')->on('features')->onDelete('cascade')->constrained();
            $table->text('notes')->nullable();
            $table->enum('availability', ['private', 'public']);
            $table->enum('status', ['published', 'unpublished'])->nullable();
            $table->string('source')->nullable();
            $table->string('source_url')->nullable();
            $table->integer('votes')->nullable();
            $table->integer('view_count')->default(0);
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
        Schema::dropIfExists('recipes');
    }
}
