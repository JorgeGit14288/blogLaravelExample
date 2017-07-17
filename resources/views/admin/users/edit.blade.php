@extends('admin.template.main')
@section('title','Editar Usuario')

@section('content')
<center><h2>Editar Usuario</h2></center>
<h4>{{ $usuario->name }}</h4>
<label>Email: </label>{{ $usuario->email }}<br>
<label>Tipo: </label>{{ $usuario->type }}
<br>
<hr>
<a href="{{ url('admin/users') }}" class="btn btn-success" >Regresar a la lista</a>
@endsection