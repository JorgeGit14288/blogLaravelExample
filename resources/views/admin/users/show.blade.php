@extends('admin.template.main')
@section('title','Detalles de usuario')

@section('content')
<center><h2>Detalles de Usuarios</h2></center>
<h4>{{ $usuario->name }}</h4>
<label>Email: </label>{{ $usuario->email }}<br>
<label>Tipo: </label>{{ $usuario->type }}
<br>
<hr>
<a href="{{ url('admin/users') }}" class="btn btn-success" >Regresar a la lista</a>
@endsection