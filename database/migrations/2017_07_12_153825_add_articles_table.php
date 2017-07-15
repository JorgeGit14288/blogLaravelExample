<?php
/*
se creo esta clase a partir de migraciones con los comandos
php artisan make:migration add_categories_table
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table){
            $table-> increments('id');
            $table->string('title');// por defecto le da un tama;o de 55 caracteres
            $table->text('contenido');
            $table->integer('user_id')->unsigned();//para decirles que son positivos
            $table->integer('category_id')->unsigned();
                 //creamos las llaves foraneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // foranea a la tabla users
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
       
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
        Schema::dropIfExists('articles');
    }
}
