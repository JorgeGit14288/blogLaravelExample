<?php
//creado desde consola con php artisan make:controller TestController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
    public function view($id)
    {
    	//dd($id);
    	//vamos a buscar en la base de dataos un articulo y mostrarlo
    	$article = Article::find($id);
    	$article->user;
    	$article->category;
    	$article->tags;
    	dd($article);
    }
    public function details($id)
    {
    	$article = Article::find($id);
    	$article->user;
    	$article->category;
    	$article->tags;
    	//dd($article);
    	//las vistas a retornar estaran en la carpeta resources y view, el punto. tiene la misma funcion que el slash //en las vistas
    	//return view('test/details');// al retornar la vista no se coloca test.balade.php solo el nombre

    	// de esta forma pasamos el atributo $article a una vista
    	return view('test/details', ['article'=>$article]);//le pasamos la variable article como un arreglo.

    }
}
