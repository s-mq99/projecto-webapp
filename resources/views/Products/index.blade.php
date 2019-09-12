	@extends('layouts.app')

	@section('content')

	<div class="container">


	  <form action="products" method="GET" class="pagination justify-content-end">
	      <input type="text" name="name" id="idName" placeholder="Pesquisar produto" value="">
	        <input type="submit" value="Procurar" class="btn btn-outline-info btn-sm">
	 </form>

	    <br>

		<div>
		<a href="{{route('products.create')}}" class="btn btn-primary btn-sm">Novo Produto</a>
		<a href="/products/ver=all" class="btn btn-primary btn-sm" id="ver">Ver todos</a>
		</div> <br>

	<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Nº de Opções</th>
					<th>Data</th>
					<th>Estado</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{ $product['name'] }}</td>

					<td>{{ count(collect($product['options'])) }}</td>
					
					<td>{{ $product['created_at'] }}</td>

					<td>{{ $product['status'] }}</td>
					<td>
						<a href="{{route('products.show', $product)}}" class="btn btn-outline-info btn-sm" >Ver</a>
					</td>
					<td>
						<form method="POST" 
							  action="{{route('products.destroy',$product)}}">
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

		{{ $products->links() }}

	</div>


	@endsection