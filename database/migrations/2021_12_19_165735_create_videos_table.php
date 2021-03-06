<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{

    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->text('description')->nullable();
            $table->tinyInteger('number');
            $table->foreignId('course_id')->nullable()->constrained();
            $table->tinyInteger('part')->default(1);
            $table->string('source');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
