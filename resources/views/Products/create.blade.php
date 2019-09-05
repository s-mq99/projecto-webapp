@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Novo Produto </h1>
	<form method="POST" action="{{route('products.store')}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome do Produto</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
				   id="notes" class="form-control"></textarea>
		</div>

	<div class="form-group">
	<label for="status"> Estado </label>
	<select name="status">
		<option value="progress" selected>Em curso</option>
		<option value="over">Terminado</option>
	</select>
</div>
	<br>

	<h2>Ponto de dados</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo de Dados</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<td>Nome</td>
			<td>Texto</td>
		</tr>
		<tr>
			<td>Preço</td>
			<td>Número</td>
		</tr>

		</tbody>
	</table>










<br>	
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>

@endsection