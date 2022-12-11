<!--<table class="table" >
  <tr>
    <th>
      Nombre
    </th>
    <th>
      Cantidad medicamentos
    </th>
  </tr>
  @foreach ($bodegas as $bodega)
    <tr>
      <td>{{ $bodega->nombre }}</td>
      <td>{{ $bodega->cantidad_medicamentos }}</td>
    </tr>
  @endforeach
</table>

<form method="post" action="">
   <input type="text" name="nombre" placeholder="Ingrese el nombre para la bodega">
   <input type="text" name="cantidad_medicamentos" placeholder="Ingrese su correo electrónico">
   <button type="submit">Enviar</button>
</form>-->

<!--@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif-->

<form method="post" action="{{ route('bodega.create') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Nombre bodega: </label>
		<div class="col-md-8">
			<input type="text" name="nombre" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">asdasdasdas:</label>
		<div class="col-md-8">
			<input type="text" name="cantidad_medicamentos" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
	</div>

</form>

@endsection