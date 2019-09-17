@extends('layouts.app')
@section('content')

<div class="container" style="max-width: 500px">
	<h5 align="center"> NOVO PRODUTO </h5>
	<br>
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
		<option value="Em curso" selected>Em curso</option>
		<option value="Terminado">Terminado</option>
	</select>


<br><br>	
<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
</form>
</div>

@endsection