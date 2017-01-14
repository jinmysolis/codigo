@extends('admin.template.main')

@section('title')  Listar tags @endsection

@section('content')
<p> 
  <a class="btn btn-info" href="{{route('admin.tags.create')}}" role="button">Crear Nuevo Tag</a>
</p>
@include('admin.template.partials.tableTags')
<div class="text-center">
{!! $tags->setPath('')->render()!!}
</div>
@endsection