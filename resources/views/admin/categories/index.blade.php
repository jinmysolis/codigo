@extends('admin.template.main')

@section('title')  Listar categoria  @endsection

@section('content')
<p> 
  <a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Crear Nueva categoria</a>
</p>
@include('admin.template.partials.tableCategorias')
{!! $categories->setPath('')->render()!!}
<h1>pitito</h1>
@endsection