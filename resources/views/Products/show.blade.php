	@extends ('layouts.app')
	@section ('content')

	<div class="container">
		<div style="max-width: 500px">
		<h5> EDITAR PRODUTO </h5>
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

		<button type="submit" class="btn btn-primary btn-sm">Guardar</button>


	</form>

	<br>
	<br>


		<h5> PONTOS DE DADOS </h5>
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Tipo de Dados</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td>Referência</td>
				<td>Texto</td>
			</tr>
			<tr>
				<td>Nome</td>
				<td>Número</td>
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
					<a href="{{route('data.edit', $data)}}" class="btn btn-outline-info btn-sm">Editar</a>
				</td>
				<td>
						<form method="POST" 
							  action="{{route('data.destroy', $data)}}">
							@method('DELETE')
							@csrf()
							<button type="submit" 
									onclick="return confirm('Tem a certeza que pretende eliminar este ponto?')"
									class="btn btn-outline-danger btn-sm" >Eliminar</button>
						</form>
				</td>
			</tr>
	@endforeach
			</tbody>
		</table>

		</div>

		<a href="{{route('data.create', $product)}}" class="btn btn-primary btn-sm">Adicionar Ponto</a>
		<!--<button onclick="myFunction()" class="btn btn-outline-info btn-sm">Mostrar Todos</button>-->		
		

	<br><br><br>
	<h5> LISTA DE OPÇÕES </h5>

		
		<table class="table">
			<thead>
				<tr>
				<th>Referência</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Imagem</th>
				<th>Data</th>
				<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>

				@if( sizeof($product->optionsResumed) )

				<tr>

				@php 
					$i=0;
					$a = $product->optionsResumed[0]->ref;
				@endphp

				@foreach($product->optionsResumed as $option)
					@php $i++ @endphp

					@if( $a != $option->ref)
						</tr><tr>
						@php 
							$i = 1;
							$a = $option->ref;
						@endphp
					@endif
					
					@if($i < 5)
						<td>{{ $option['value'] }}</td>
					@endif

					@if( $i==5)
					<td>{{$option->updated_at}}</td>
					<td>
						<a href="{{route('options.show', $option)}}" class="btn btn-outline-info btn-sm" >Ver/Editar</a>
					</td>
					<td>
						<form method="POST" 
							  action="{{route('options.destroy', $option)}}">
							@method('DELETE')
							@csrf()
							<button type="submit" 
									onclick="return confirm('Tem a certeza que pretende eliminar este produto?')"
									class="btn btn-outline-danger btn-sm" >Eliminar</button>
						</form>
					</td>
					@endif
				@endforeach

				</tr>

				@endif
		

			
			</tbody>
	</table>
	<a href="{{route('options.create', $product)}}" class="btn btn-primary btn-sm">Adicionar Opção</a>
	<br><br>
	<a href="{{route('products.index')}}" class="btn btn-outline-info btn-sm"> 🡠 </a>
	</div>

	@endsection