<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->BigIncrements('id');
            //imagenes y multimedias
            $table->BigInteger('image_media_id');
            //comentarios
            $table->BigInteger('comment_id');
            //publicacion
            $table->string('title',50);
            $table->string('url_description');
            $table->BigInteger('like');
            $table->BigInteger('view');
            //1 - publico
            //2 - privado
            //3 - solo amigos
            //4 - personalizado
            $table->string('type_publication',1);//automatico
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
        Schema::dropIfExists('publications');
    }
}
