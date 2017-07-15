<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use laracast\Flash\Flash;

class UsersController extends Controller
{
    public function Index()
    {
        //dd("Estoy en el index");
        //retorna todos los usuarios con paginacion de 5
        $users= User::orderBy('id','ASC')->paginate(10);
        //return view('admin/users/index', $users);
        flash('Usuarios disponibles en la base de datos')->success();
        return view('admin/users/index')->with('users',$users);

    }
    public function create()
    {
    	//http://localhost/Blog/public/admin/users/create
    	//dd('Hola este es un mensaje'); // para probar si sirve la vista
    	return view('admin.users.create');
    }
    public function store(Request $request)
    {
       // dd("estoy en store");
        //creamos un usuario para guardar los datos
        //este metodo agarra los usuarios $request->all(
        $usuario= new User($request->all());
        $usuario->password=bcrypt($request->password);
        //dd($usuario);
        $usuario->save();
        flash('Usuario '.$usuario->name .'Registrado exitosamente')->success();
        return redirect('admin/users');
    }

    public function show()
    {
       return redirect('admin/users');
    }
    public function delete()
    {
        dd("Estoy en el delete");
    }
    public function destroy($id)
    {
        g
    }
}
