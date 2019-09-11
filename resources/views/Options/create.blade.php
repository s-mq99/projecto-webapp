@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Nova Opção </h1>

	
	<form method="POST" action="{{route('options.store', $product)}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="price">Preço</label>
			<input type="text" name="price"
				   id="price" class="form-control">
		</div>

	@foreach($product->datas as $data)	
	@endforeach


<br>	
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>

@endsection