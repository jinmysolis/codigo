@extends('admin.template.main')

@section('title')  Listar articles @endsection

@section('content')

  <a class="btn btn-info" href="{{route('admin.articles.create')}}" role="button">Crear Nuevo Articulo</a>

{!!Form::open(['route'=>'admin.articles.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right role="search" '])!!}

        <div class="form-group">
         {!!Form::text('title', null,['class'=>'form-control',' placeholder'=>'Introduzca su Busqueda'])!!}
                                            
                                  
         </div>
<button type="submit" class="btn btn-info">Buscar</button>
                                        
{!!Form::close()!!}
@include('admin.template.partials.tableArticles')
<div class="text-center">
{!! $articles->setPath('')->render()!!}
</div>
@endsection