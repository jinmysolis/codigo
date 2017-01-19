@extends('admin.template.main')

@section('title')  editar Tags  @endsection

@section('content')

 {!!Form::model($tag,['route'=>['admin.tags.update',$tag->id],'method'=>'PUT'])!!}

 @include('admin.template.partials.formularioTags')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Editar Tags</button></center>
 </p>

{!!Form::close()!!}
@endsection