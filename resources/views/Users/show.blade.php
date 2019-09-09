@extends ('layouts.app')
@section ('content')

<div class="container">
	<h1> Editar Utilizador</h1>
	<form method="POST">
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" value="{{$user['name']}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email"
				   id="email" value="{{$user['email']}}" class="form-control">
		</div>


		<div class="form-group">
	<label for="status"> Estado </label>
	<select name="status">
		<option value="Activo" selected>Activo</option>
		<option value="Inactivo">Inactivo</option>
	</select>
	<br>
</div>

	<button type="submit" class="btn btn-info">Guardar</button>

</form>
</div>

@endsection