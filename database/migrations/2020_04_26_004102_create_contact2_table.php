<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContact2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact2', function (Blueprint $table) {
            $table->id();
            $table->string('icon_address', 50);
            $table->string('titre_address', 30);
            $table->string('address', 100);
            $table->string('icon_phone', 50);
            $table->string('titre_phone', 30);
            $table->string('phone', 100);
            $table->string('icon_email', 50);
            $table->string('titre_email', 30);
            $table->string('email', 100);
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
        Schema::dropIfExists('contact2');
    }
}
