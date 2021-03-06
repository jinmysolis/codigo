@extends('admin.template.tema')

@section('title')  Listar usuario  @endsection

@section('content')

  <a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Crear Nuevo Usuario</a>

{!!Form::open(['route'=>'admin.users.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right role="search" '])!!}

        <div class="form-group">
         {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Introduzca su Busqueda'])!!}
                                            
                                  
         </div>
<button type="submit" class="btn btn-info">Buscar</button>
                                        
{!!Form::close()!!}
<div class="text-center">
@include('admin.template.partials.table')
</div>
<div class="text-center">
{!! $users->setPath('')->render()!!}
</div>
@endsection