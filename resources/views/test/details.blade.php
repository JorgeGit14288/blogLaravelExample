<!DOCTYPE html>
</!DOCTYPE html>
<html lang="en">
<head>
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
</head>
<body>

	<center><h4>Estoy en Details de la carpeta test redirigido por TestController en la funcion details</h4></center>
	<br><br>
	<h1>{{ $article->title }}</h1>
	<hr>
	{{$article->contenido}}
	<hr>
	{{$article->user->name}}

	@foreach($article->tag as $tag)
	{{$tag->name}}
	@endforeach

</body>
</html>
