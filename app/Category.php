<?php
/*
creado desde consola don el comando
php artisan make:model
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //le desimos el mombre de la tabla con el que se relaciona
    protected $table='categories';
    //para decirle que datos deben de ser mosttrados
    protected $fillable=['name'];

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }

}
