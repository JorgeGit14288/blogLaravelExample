<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        //creamos una tabla de muchos a muchos articles y tags que llamaremos articles_tags
        Schema::create('article_tag', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('article_id')->unsigned(); // para relaciones de muchos a muchos
            $table->integer('tag_id')->unsigned(); //para relaciones de muchos a muchos
            //creamos las referencias
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('tag_id')->references('id')->on('tags');
        });


        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tags');
        Schema::dropIfExists('articles_tags');
    }
}
