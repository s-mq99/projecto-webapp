@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Novo Utilizador </h1>
	<form method="POST" action="{{route('users.store')}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email"
				   id="email" class="form-control">
		</div>
			<div class="form-group">
			<label for="password">Password</label>
			<input type="text" name="password"
				   id="password" class="form-control">
		</div>


	<div class="form-group">
	<label for="status"> Estado </label>
	<select name="status">
		<option value="Activo" selected>Activo</option>
		<option value="Inactivo">Inactivo</option>
	</select>

<br>	
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>

@endsection