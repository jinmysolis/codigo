<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
    @foreach($tags as $tag)     
      <tr class="success">
        <td >{{ $tag->id}}</td>
        <td>{{ $tag->name}}</td>
       
       
         <td > <a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-danger glyphicon glyphicon-refresh"></a> 
             <a href="{{route('admin.tags.destroy',$tag->id)}}" onclick="return confirm('Seguro desea eliminar')"class="btn btn-warning glyphicon glyphicon-trash"></a>
         </td>
      </tr>
      
       @endforeach
      
    </tbody>
    
  </table>