@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Novo Utilizador </h1>
	<form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
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

      	<div class="custom-file">
         	 <input type="file" class="custom-file-input" id="photo" name="photo">
          	<label class="custom-file-label" for="photo">Inserir foto de perfil</label>
      	</div>

      		<br><br>

    @if( auth()->user() && auth()->user()->admin == 1 ) 
	
	<label for="status"> Estado </label>
	<select name="status">
		<option value="Activo">Activo</option>
		<option value="Inactivo">Inactivo</option>
	</select>
	
	
	<label for="admin"> Administrador </label>
	<select name="admin">
		<option value="1">Sim</option>
		<option value="0">Não</option>
	</select>
	@endif
<br>	
<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
</form>
</div>

@endsection