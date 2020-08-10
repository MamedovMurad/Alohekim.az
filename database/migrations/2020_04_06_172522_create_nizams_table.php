<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNizamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nizams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('address');
            $table->string('favicon');
            $table->string('logo');
            $table->string('robot_txt');
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('github');
            $table->string('slug');
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
        Schema::dropIfExists('nizams');
    }
}
