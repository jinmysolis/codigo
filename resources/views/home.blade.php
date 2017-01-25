@extends('admin.template.main')

@section('title')  Listar usuario  @endsection

@section('content')
<h1>Ultimos 10 Usuarios</h1>
<p> 
  <a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Crear Nuevo Usuario</a>
</p>

@include('admin.template.partials.table')
{!! $users->setPath('')->render()!!}
@endsection