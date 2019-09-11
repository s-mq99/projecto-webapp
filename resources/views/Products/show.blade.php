	@extends ('layouts.app')
	@section ('content')

	<div class="container">
		<h1> Editar Produto </h1>
		<form method="POST">
			@method('PUT')
			@csrf()
			<div class="form-group">
				<label for="name">Nome do Produto</label>
				<input type="text" name="name"
					   id="name" value="{{$product['name']}}" class="form-control">
			</div>
			<div class="form-group">
				<label for="notes">Notas</label>
				<textarea name="notes"
					   id="notes" class="form-control">{{$product['notes']}}</textarea>
			</div>

		<div class="form-group">
		<label for="status"> Estado </label>
		<select name="status">
			<option value="Em curso" selected>Em curso</option>
			<option value="Terminado">Terminado</option>
		</select>
		<br>
		</div>

		<button type="submit" class="btn btn-info">Guardar</button>


	</form>

	<br>
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

			@foreach($product->datas as $data)
			<tr>
				<td>{{$data ['name']}}</td>
				<td>{{$data ['type']}}</td>
				<td>
						<form method="POST" 
							  action="{{route('data.destroy', $data)}}">
							@method('DELETE')
							@csrf()
							<button type="submit" 
									onclick="return confirm('Tem a certeza que pretende eliminar este ponto?')"
									class="btn btn-outline-info btn-sm" >Eliminar</button>
						</form>
				</td>
			</tr>
	@endforeach
			</tbody>
		</table>

		<a href="{{route('data.create', $product)}}" class="btn btn-info">Adicionar Ponto</a>

	<br><br>
	<h2>Lista de Opções</h2>

		<a href="{{route('options.create', $product)}}" class="btn btn-info">Adicionar Opção</a>

		<table class="table">
			<thead>
				<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Data</th>
				<th>Imagem</th>
				<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($options as $option)
				<tr>
					<td>{{ $option['name'] }}</td>

					<td>{{ $option['price'] }}</td>
					
					<td>{{ $option['created_at'] }}</td>

					<td>{{ $option['image'] }}</td>
					<td>
						<a href="" class="btn btn-outline-info btn-sm" >Ver</a>
					</td>
					<td>
						<form method="POST" 
							  action="{{route('option.destroy', $product)}}">
							@method('DELETE')
							@csrf()
							<button type="submit" 
									onclick="return confirm('Tem a certeza que pretende eliminar este produto?')"
									class="btn btn-outline-info btn-sm" >Eliminar</button>
						</form>
					</td>
				</tr>
				@endforeach

			
		</tbody>
	</table>
	</div>

	@endsection