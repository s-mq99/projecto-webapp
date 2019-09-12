@extends('layouts.app')
@section('content')

<div class="container" style="max-width: 500px">
	<h3 align="center"> EDITAR OPÇÃO </h3>

	
	<form method="POST">
		@method('PUT')
		@csrf()

		<div class="form-group">
			<label for="ref">Referencia</label>
			<input type="text" name="ref"
				   id="ref" class="form-control" value="{{$option['ref']}}">
		</div>
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control" value="{{$option['name']}}">
		</div>
		<div class="form-group">
			<label for="price">Preço</label>
			<input type="text" name="price"
				   id="price" class="form-control" value="{{$option['price']}}">
		</div>
		<div class="custom-file">
         	<input type="file" class="custom-file-input" id="images" name="images">
          	<label class="custom-file-label" for="images">Inserir imagens</label>
      	</div>

      	<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
				   id="notes" class="form-control">{{$option['notes']}}</textarea>
		</div>

      	<div class="form-group">
			<label for="compra">Link Compra</label>
			<input type="text" name="compra" placeholder="Este campo é opcional"
				   id="compra" class="form-control" value="{{$option['compra']}}">
		</div>
			<div class="form-group">
			<label for="info">Link Informação</label>
			<input type="text" name="info" placeholder="Este campo é opcional"
				   id="info" class="form-control"  value="{{$option['info']}}">
		</div>


	@foreach($product->datas as $data)	

	<form method="POST" action="{{route('options.store', $product)}}">
		@csrf()
		<div class="form-group">
			<label for="{{$data['name']}}">{{$data['name']}}</label>
			<input type="text" name="{{$data['id']}}" id="{{$data['id']}}" class="form-control">
		</div>

	@endforeach


<br>	
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>

@endsection