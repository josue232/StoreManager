<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursAffectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours_affectations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cours_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('promotion_id');
            $table->timestamps();

            $table->foreign('cours_id')->references('id')->on('cours')->onDelete('Cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('Cascade');
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours_affectations');
    }
}
