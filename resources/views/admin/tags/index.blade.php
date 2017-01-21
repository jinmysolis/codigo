@extends('admin.template.tema')

@section('title')  Listar tags @endsection

@section('content')

  <a class="btn btn-info" href="{{route('admin.tags.create')}}" role="button">Crear Nuevo Tag</a>

{!!Form::open(['route'=>'admin.tags.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right role="search" '])!!}

        <div class="form-group">
         {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Introduzca su Busqueda'])!!}
                                            
                                  
         </div>
<button type="submit" class="btn btn-info">Buscar</button>
                                        
{!!Form::close()!!}
@include('admin.template.partials.tableTags')
<div class="text-center">
{!! $tags->setPath('')->render()!!}
</div>
@endsection