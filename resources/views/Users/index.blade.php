@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Painel de Administrador</h1>

    	<a href="{{route('users.create')}}" class="btn btn-primary">Novo Utilizador</a>
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
			</tr>
		</thead>

		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user['photo'] }}

				<?php if(!empty($user["photo"])):?>
					<img class="photoUser" src='<?=$user["photo"];?>'
					alt="Foto de Utilizador">

					<?php else: ?>
					<img class="photoUser"
					src="photos/user.png"
					alt="Foto de Utilizador"
					width="100px" height="100px">

			<?php endif; ?></td>

				<td>{{ $user['name'] }}</td>
				<td>{{ $user['email'] }}</td>
				<td>{{ $user['password'] }}</td>
				<td>{{ $user['status'] }}</td>
				<td>{{ $user['admin'] }}</td>	
			</tr>
			@endforeach
		</tbody>
</table>
{{ $users->links() }}
</div>
@endsection