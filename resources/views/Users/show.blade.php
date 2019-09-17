@extends ('layouts.app')
@section ('content')

<div class="container" style="max-width: 500px">
	<h5> EDITAR UTILIZADOR </h5>
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
			<label for="password">Password</label>
			<input type="text" name="password"
				   id="password" value="{{$user['password']}}" class="form-control">
		</div>

      	<div class="custom-file">
         	 <input type="file" class="custom-file-input" id="photo" name="photo">
          	<label class="custom-file-label" for="photo">Actualizar foto de perfil</label>
      	</div>

      		<br><br>

    @if( auth()->user() && auth()->user()->admin == 1 ) 
	
	<label for="status"> Estado </label>
	<select name="status">
		<option value="Activo">Activo</option>
		<option value="Inactivo">Inactivo</option>
	</select>
	
	
	<label for="status"> Administrador </label>
	<select name="status">
		<option value="1">Sim</option>
		<option value="0">Não</option>
	</select>
	@endif

	<br><br>

	<button type="submit" class="btn btn-primary btn-sm">Guardar</button>

</form>
</div>

@endsection