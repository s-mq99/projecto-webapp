@extends('layouts.app')

@section('content')
<div class="container">
    <h5>PAINEL DE ADMINISTRADOR</h5>
    	<br>

    	<a href="{{route('users.create')}}" class="btn btn-primary btn-sm">Novo Utilizador</a>
    	<br><br>


<table class="table">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Password</th>
				<th>Estado</th>
				<th>Autorização</th>
				<th colspan="2"></th>
			</tr>
		</thead>

		<tbody>
			@foreach($users as $user)
			<tr>
				<td>

				@if(!empty($user["photo"]))
					<img class="photoUser" src="{{ asset('storage/users/' . $user['photo']) }}"
					alt="Foto de Utilizador"
					width="100px" height="100px">

				@else
					<img class="photoUser"
					src="photos/user.png"
					alt="Foto de Utilizador"
					width="100px" height="100px">

				@endif

				<td>{{ $user['name'] }}</td>
				<td>{{ $user['email'] }}</td>
				<td>{{ $user['password'] }}</td>
				<td>{{ $user['status'] }}</td>
				<td>{{ $user['admin'] }}</td>
				
				<td>
					<a href="{{route('users.show', $user)}}" class="btn btn-outline-info btn-sm" >Editar</a>
				</td>

				<td>
					<form method="POST" 
						  action="{{route('users.destroy',$user)}}">
						@method('DELETE')
						@csrf()
						<button type="submit" 
								onclick="return confirm('Tem a certeza que pretende eliminar este utilizador?')"
								class="btn btn-outline-danger btn-sm" >Eliminar</button>
					</form>
				</td>


			</tr>
			@endforeach
		</tbody>
</table>
{{ $users->links() }}
</div>
@endsection