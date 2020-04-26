<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeam2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team2', function (Blueprint $table) {
            $table->id();
            $table->string('img_path', 100);
            $table->string('name', 30);
            $table->string('job', 30);
            $table->string('url1', 70)->nullable();
            $table->string('url2', 70)->nullable();
            $table->string('url3', 70)->nullable();
            $table->string('url4', 70)->nullable();
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
        Schema::dropIfExists('team2');
    }
}
