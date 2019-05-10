<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaihatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baihats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('album_id');
            $table->foreign("album_id")->references("id")->on("albums");
            $table->unsignedInteger('theloai_id');
            $table->foreign("theloai_id")->references("id")->on("theloais");
            $table->unsignedInteger('playlist_id');
            $table->foreign("playlist_id")->references("id")->on("playlists");
            $table->string('name');
            $table->text('image');
            $table->text('link');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('baihats');
    }
}
