<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)     
      <tr class="success">
        <td >{{ $category->id}}</td>
        <td>{{ $category->name}}</td>
       
       
         <td > <a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-danger glyphicon glyphicon-refresh"></a> 
             <a href="{{route('admin.categories.destroy',$category->id)}}" onclick="return confirm('Seguro desea eliminar')"class="btn btn-warning glyphicon glyphicon-trash"></a>
         </td>
      </tr>
      
       @endforeach
      
    </tbody>
    
  </table>