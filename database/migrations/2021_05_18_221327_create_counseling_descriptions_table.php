<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_descriptions', function (Blueprint $table) {
            $table->id();
            $table->text("content");
            $table->unsignedBigInteger('counseling_id');
            $table->timestamps();
        });
        Schema::table('counseling_descriptions', function(Blueprint $table) {
            $table->foreign('counseling_id')->references('id')->on('counselings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coulseling_descriptions');
    }
}
