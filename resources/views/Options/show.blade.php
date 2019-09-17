@extends('layouts.app')
@section('content')

<div class="container" style="max-width: 500px">
	<h5 align="center"> EDITAR OPÇÃO </h5>

	
	<form method="POST">
		@method('PUT')
		@csrf()

		<div class="form-group">
			<label for="ref">Referência</label>
			<input type="text" name="ref"
			id="ref" class="form-control" value="{{ $options[0]->value }}">
		</div>

		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
			id="name" class="form-control" value="{{ $options[1]->value }}">
		</div>

		<div class="form-group">
			<label for="price">Preço</label>
			<input type="text" name="price"
			id="price" class="form-control" value="{{ $options[2]->value }}">
		



		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
			id="notes" class="form-control">{{ $options[4]->value }}</textarea>
		</div>

		<div class="form-group">
			<label for="compra">Link Compra</label>
			<input type="text" name="compra" placeholder="Este campo é opcional"
			id="compra" class="form-control" value="{{ $options[5]->value }}">
		</div>
		<div class="form-group">
			<label for="info">Link Informação</label>
			<input type="text" name="info" placeholder="Este campo é opcional"
			id="info" class="form-control"  value="{{ $options[6]->value }}">
		</div>

		<!--@for($i=7; $i < sizeof($options); $i++)

			<div class="form-group">
				<label for="{{ $options[$i]->id }}">Link Informação</label>
				<input type="text" name="{{ $options[$i]->id }}" placeholder="Este campo é opcional"
				id="{{ $options[$i]->id }}" class="form-control"  value="{{ $options[$i]->value }}">
			</div>

		@endfor-->

		<br>	
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>


</div>


@endsection