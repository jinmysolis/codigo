@extends('admin.template.tema')

@section('title')  editar usuario.$user->name  @endsection

@section('content')

 {!!Form::model($users,['route'=>['admin.users.update',$users->id],'method'=>'PUT'])!!}

 @include('admin.template.partials.formulario')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Editar Usuario</button></center>
 </p>

{!!Form::close()!!}
@endsection