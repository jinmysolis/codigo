@extends('admin.template.main')

@section('title')  editar articulos  @endsection

@section('content')

 {!!Form::model($article,['route'=>['admin.articles.update',$article->id],'method'=>'PUT'])!!}

 @include('admin.template.partials.formularioArticlesEdit')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Editar articulos</button></center>
 </p>

{!!Form::close()!!}
@endsection