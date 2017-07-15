@extends('admin.template.main')
@section('title','Lista de Usuarios')

@section('content')

	<center><h3>Usuarios registrados</h3></center>
	
	<a href="{{ url('admin/users/create') }}" class="btn btn-info">Registrar</a>
	<br>
	<hr>
	<table id="tUsers" class="table table-responsive table-striped table-bordered"> 
		<thead>
			<tr>
				<td>id</td>
				<td>Nombre</td>
				<td>Correo</td>
				<td>Tipo</td>
				<td>Accion</td>
			</tr>
		</thead>
		<tbody>

			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
					@if($user->type =='admin')
						<span class="label label-danger" >{{ $user->type }}</span>
					@else

						<span class="label label-primary" >{{ $user->type }}</span>
					@endif
					
					</td>
						<td><a href="{{ url('admin/users/destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminarlo?')">Eliminar</a> | 

						<a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-warning">Editar</a> |
						<a href="{{ url('admin/users/show',$user->id) }}" class="btn btn-info">Detalles</a> 

					</td>
				</tr>
			@endForeach
		</tbody>
	</table>
	{!! $users->render() !!}

@endsection