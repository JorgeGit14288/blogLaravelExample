<?php
//creado desde consola con php artisan make:model Image
namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //le decimos la tabla con la que se relaciona
    protected $table="images";
    //datos que quermos mostrar
    protected $fillable=['name','article_id'];
        //relacion de un articulo muchas imagenes
    public function article()
    {
    	return $this->belongsTo('App\Article');
    }
}
