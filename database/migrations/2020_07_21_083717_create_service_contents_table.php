<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('service_category_id');
            $table->string('content');
            $table->string('image');
            $table->string('slug');
            $table->integer('status')->default(0)->comment('0:passiv 1:aktiv');
            $table->softDeletes();
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
        Schema::dropIfExists('service_contents');
    }
}
