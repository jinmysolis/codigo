@extends('admin.template.tema')

@section('title')  editar categorias  @endsection

@section('content')

 {!!Form::model($category,['route'=>['admin.categories.update',$category->id],'method'=>'PUT'])!!}

 @include('admin.template.partials.formularioCategorie')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Editar Categoria</button></center>
 </p>

{!!Form::close()!!}
@endsection