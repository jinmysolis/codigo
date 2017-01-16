@extends('admin.template.main')

@section('title')  Listar categoria  @endsection

@section('content')
 
  <a class="btn btn-info" href="{{route('admin.categories.create')}}" role="button">Crear Nueva categoria</a>


{!!Form::open(['route'=>'admin.categories.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right role="search" '])!!}

        <div class="form-group">
         {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Introduzca su Busqueda'])!!}
                                            
                                  
         </div>
<button type="submit" class="btn btn-info">Buscar</button>
                                        
{!!Form::close()!!}




@include('admin.template.partials.tableCategorias')
<div class="text-center">
{!! $categories->setPath('')->render()!!}
</div>
@endsection