@extends('layouts.app')

@section('content')

<div class="container">

<h1>Adicione um Ponto de Dados</h1>
<form method="POST" action="{{route('data.store', $product)}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="notes">Tipo de Dados</label>

	
	<select name="type">
		<option value="Numérico superior">Numérico superior</option>
		<option value="Numérico inferior">Numérico inferior</option>
		<option value="Texto">Texto</option>
		<option value="Data">Data</option>
	</select>
			<br>
			<button type="submit" class="btn btn-outline-dark btn-sm">Guardar</button>
</div> 


@endsection