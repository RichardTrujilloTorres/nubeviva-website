<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cast_id')->index()->unsigned();

            $table->string('title');
            $table->string('description');

            $table->string('uid');
            $table->string('thumbnail')->nullable();
            $table->string('filename')->nullable();

            $table->boolean('processed')->default(false);
            $table->integer('processed_percentage')->nullable();

            $table->boolean('allow_comments')->default(false);
            $table->boolean('allow_votes')->default(false);

            $table->softDeletes();
            $table->timestamps();

            // $table->foreign('cast_id')->references('id')->on('casts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
