<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qc', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->string('des');
            $table->unsignedInteger('baihat_id');
            $table->foreign("baihat_id")->references("id")->on("baihats");
            $table->integer('status');
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
        Schema::dropIfExists('qc');
    }
}
