<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>CONTENIDO</th>
        <th>CATEGORIAS</th>
        <th>USUARIO</th>
        <th>ACCION</th>
        <th>tas</th>
      </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)     
      <tr class="success">
        <td >{{ $article->id}}</td>
        <td>{{ $article->title}}</td>
        <td>{{ $article->content}}</td>
        <td>{{ $article->category->name}}</td>
        <td>{{ $article->user->name}}</td>
       
        <td > <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-danger glyphicon glyphicon-refresh"></a> 
             <a href="{{route('admin.articles.destroy',$article->id)}}" onclick="return confirm('Seguro desea eliminar')"class="btn btn-warning glyphicon glyphicon-trash"></a>
         </td>

      </tr>
      
       @endforeach
      
    </tbody>
    
  </table>