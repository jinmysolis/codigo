<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>TTULO</th>
        <th>CONTENIDO</th>
      </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)     
      <tr class="success">
        <td >{{ $article->id}}</td>
        <td>{{ $article->title}}</td>
        <td>{{ $article->content}}</td>
       
       

      </tr>
      
       @endforeach
      
    </tbody>
    
  </table>