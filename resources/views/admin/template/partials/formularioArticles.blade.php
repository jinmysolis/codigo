
<div class="col-md-6">
<div class="form-group">
  {!!Form::label('title', 'Titulo')!!}
  {!!Form::text('title', null,['class'=>'form-control',' placeholder'=>'Nombre del Articulo'])!!}

</div>
  <div class="form-group">
  {!!Form::label('tags', 'Tags')!!}
  {!!Form::select('tags', $tags,null,['class'=>'form-control','placeholder'=>'Selecione una categoria'] )!!}
</div>  
    
 <div class="form-group">
  {!!Form::label('image', 'Imagen')!!}
  {!!Form::file('image')!!}
</div>

</div>


<div class="col-md-6">
<div class="form-group">
  {!!Form::label('category_id', 'Categoria')!!}
  {!!Form::select('category_id', $categories,null,['class'=>'form-control','placeholder'=>'Selecione una categoria'] )!!}
</div>


<div class="form-group">
  {!!Form::label('content', 'Contenido')!!}
  {!!Form::textarea('content',null,['class'=>'form-control'])!!}
</div>
    

</div>