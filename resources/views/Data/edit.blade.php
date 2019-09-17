@extends('layouts.app')

@section('content')

<div class="container" style="max-width: 500px">
	<h5 align="center"> EDITAR PONTO DE DADOS </h5>
	<br>

<form method="POST" action="{{route('data.show', $data->product)}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control" value="{{$data['name']}}">
		</div>
		<div class="form-group">
			<label for="notes">Tipo de Dados</label>

	
	<select name="type">
		<option value="Numérico superior">Numérico superior</option>
		<option value="Numérico inferior">Numérico inferior</option>
		<option value="Texto">Texto</option>
		<option value="Data">Data</option>
	</select>
			<br><br>
			<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
			<br><br>
			
</div> 


@endsection