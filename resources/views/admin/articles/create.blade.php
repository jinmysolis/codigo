@extends('admin.template.tema')

@section('title')  crear articulos  @endsection

@section('content')

 @include('admin.template.partials.errores')

{!!Form::open(['route'=>'admin.articles.store','method'=>'POST','files'=>'true'])!!}

 @include('admin.template.partials.formularioArticles')
 
 
 <div class="form-group">
 <center><button type="submit" class="btn btn-info btn-lg">Agregar Articulo</button></center>
 </div>

{!!Form::close()!!}
@endsection