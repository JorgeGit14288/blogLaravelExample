<?php
///creado con php artisan make:model Article
namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
        //use sluggable
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => 
            [
                'source' => 'title'               
            ]
        ];
    }

    //le definimos la tabla
    protected $table='Articles';
    //datos que queremos mostrar
    protected $fillable=['title','contenido','category_id','user_id'];

    //un articulo solo pertenece a una categoria por lo cual hacemos una relacion
    public function category()
    {
    	return $this->belongsTo('App\Category');

    }
    //relacion de un usuario por articulo
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    //relacion de muchas imagenes en un articulo
      public function images()
    {
        return $this->hasMany('App\Image');
    }
    public function tag()
    {
        //relacion de muchos a muchos
        return $this->belongsToMany('App\Tag');
    }
}
