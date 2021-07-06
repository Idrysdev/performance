<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('classe_id');
            $table->foreignId('matiere_id');
            $table->string('image');
            $table->string('duree');
            $table->string('description')->nullable();
            $table->boolean('active')->default(0);
            //les Fichiers a charger ...
            $table->string('video_intro')->nullable();
            $table->string('video_cours')->nullable();
            $table->string('fichier')->nullable();
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
        Schema::dropIfExists('cours');
    }
}
