<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->boolean('helthy')->nullable();
            $table->boolean('quick')->nullable();
            $table->boolean('easy')->nullable();
            $table->boolean('sugarfree')->nullable();
            $table->boolean('glutenfree')->nullable();
            $table->boolean('diet')->nullable();
            $table->boolean('spicy')->nullable();
            $table->boolean('vegan')->nullable();
            $table->boolean('protein')->nullable();
            $table->boolean('pot')->nullable();//κατσαρόλα
            $table->boolean('hull')->nullable();//γαστρα
            $table->boolean('oven')->nullable();//φούρνο
            $table->boolean('pan')->nullable();//τηγάνι
            $table->boolean('charcoal')->nullable();//καρβουνα
            $table->boolean('wood_oven')->nullable();//καρβουνα
            $table->boolean('rotisserie')->nullable();//ψησταριά
            $table->boolean('christmas')->nullable();
            $table->boolean('easter')->nullable();
            $table->boolean('valendines')->nullable();
            $table->boolean('fasting')->nullable();//νηστείες
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
        Schema::dropIfExists('features');
    }
}
