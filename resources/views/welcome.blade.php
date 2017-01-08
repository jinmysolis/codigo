@extends('admin.template.main')

@section('title')
    pagina inicio
@endsection

@section('content')
<div class="container">
    <div class="row">
   <h1>hola bb</h1>
<a href="" class="btn btn-success">voy a casa</a>


  {!!Form::open()!!}
                                  
   <div class="form-group">
  {!!Form::label('email', 'Correo Electronico')!!}
  {!!Form::text('email', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Email'])!!}
    </div>
 <button type="submit" class="btn btn-info">Crear Usuario</button>
                                   
 {!!Form::close()!!}
 
 </div>
 </div>
@endsection



