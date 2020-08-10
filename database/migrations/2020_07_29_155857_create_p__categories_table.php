<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p__categories', function (Blueprint $table) {
            $table->id('id');
            $table->string('Basliq');
            $table->Integer('sira');
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
        Schema::dropIfExists('p__categories');
    }
}
