@extends('admin.template.main')

@section('title')  Listar usuario  @endsection

@section('content')
<p> 
  <a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Crear Nuevo Usuario</a>
</p>
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>ACCION</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)     
      <tr class="success">
        <td class="danger">{{ $user->id}}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        
        
         <td >
             @if ($user->type == "admin")
              <span class="label label-danger ">{{$user->type}}</span>
             @else
              <span class="label label-primary">{{$user->type}}</span>
             @endif
         
         </td>
         <td > <a href="" class="btn btn-danger glyphicon glyphicon-refresh"></a> 
             <a href="{{route('admin.users.destroy',$user->id)}}" onclick="return confirm('Seguro desea eliminar')"class="btn btn-warning glyphicon glyphicon-trash"></a>
         </td>
      </tr>
      
       @endforeach
      
    </tbody>
    
  </table>
{!! $users->setPath('')->render()!!}
@endsection