<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorshipDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentorship_descriptions', function (Blueprint $table) {
            $table->id();
            $table->text("content");
            $table->unsignedBigInteger('mentorship_id');
            $table->unsignedBigInteger('icon_id')->default(0);
            $table->timestamps();
        });
        Schema::table('mentorship_descriptions', function(Blueprint $table) {
            $table->foreign('mentorship_id')->references('id')->on('mentorships');
            $table->foreign('icon_id')->references('id')->on('icons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentorship_descriptions');
    }
}
