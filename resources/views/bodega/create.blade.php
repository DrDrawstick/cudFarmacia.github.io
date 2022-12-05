<form method="POST" action="{{ route('bodega/store') }}" role="form" enctype="multipart/form-data">

  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="text" name="esteban"> esteban
  <button>hola</button>
  <input type="text"> felipe

  @include('admin.jugos.frm.prt')

</form>


