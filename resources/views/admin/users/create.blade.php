@extends('admin.template.main')
@section('title', 'Crear Usuario')
@section('content')
<center>
<h3>Creacion de usuarios</h3>
</center>
<hr>
<!--creamos el formulario con collective-->
<div class="col-md-1" >
	
</div>
<div class="col-md-6" >
	{!! Form::open(array('url' => 'admin/users','method'=>'POST')) !!}

	<div class="form-group">
		{!! Form::label('name','Nombre') !!}
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Completo','required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email','Correo Electronico') !!}
		{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password','Password') !!}
		{!! Form::password('password',null,['class'=>'form-control','placeholder'=>'*********','required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('type','Tipo') !!}
		{!! Form::select('type',[''=>'Seleccione un nivel', 'member'=>'Miembro' , 'admin'=> 'Administrador'], null, ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		
		{!! Form::submit('Registrar',array('class'=>'btn btn-primary')) !!}
	</div>



{!! Form::close() !!}
</div>


@endsection
