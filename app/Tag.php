<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //relacionamos con la tabla tags
    protected $table='tags';
    protected $fillable=['name'];

    //para establecer una relacio a articles
    public function articles()
    {
    	//hacemos referencia a nuestro modelo Article con una relcion de uno a muchos
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }
}
