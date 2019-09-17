@extends('layouts.app')
@section('content')

<div class="container" style="max-width: 500px">
	<h5 align="center"> NOVA OPÇÃO </h5>

	
	<form method="POST" action="{{route('options.store', $product)}}">
		@csrf()
		<div class="form-group">
			<label for="ref">Referência</label>
			<input type="text" name="ref"
				   id="ref" class="form-control">
		</div>
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
		<div class="custom-file">
         	<input type="file" class="custom-file-input" id="images" name="images" style="background-color: #00ffff">
          	<label class="custom-file-label" for="images">Inserir imagens</label>
      	</div>

      	<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
				   id="notes" class="form-control"></textarea>
		</div>

      	<div class="form-group">
			<label for="compra">Link Compra</label>
			<input type="text" name="compra" placeholder="Este campo é opcional"
				   id="compra" class="form-control">
		</div>
			<div class="form-group">
			<label for="info">Link Informação</label>
			<input type="text" name="info" placeholder="Este campo é opcional"
				   id="info" class="form-control">
		</div>

		<!--@foreach($product->datas as $data)	
	<form method="POST" action="{{route('options.store', $product)}}">
		@csrf()
		<div class="form-group">
			<label for="{{$data['name']}}">{{$data['name']}}</label>
			<input type="text" name="{{$data['id']}}" id="{{$data['id']}}" class="form-control">
		</div>
	@endforeach-->


<br>	
<button type="submit" class="btn btn-primary btn-sm">Guardar</button>
</form>

</div>

@endsection