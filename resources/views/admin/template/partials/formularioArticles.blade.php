
<div class="col-md-6">
<div class="form-group">
  {!!Form::label('title', 'Titulo')!!}
  {!!Form::text('title', null,['class'=>'form-control',' placeholder'=>'Nombre del Articulo'])!!}

</div>
  <div class="form-group">
  {!!Form::label('tags', 'Tags')!!}
  {!!Form::select('tags[]', $tags,null,['class'=>'form-control chosen-select','multiple','placeholder'=>'Selecione una categoria'] )!!}
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
  {!!Form::textarea('content',null,['class'=>'form-control textarea-content'])!!}
</div>
   
</div>
@section('js')

<script>
    $(".chosen-select").chosen({
         placeholder_text_multiple:'Seleccione un maximode 3 tags',
         max_selected_options:3,
         search_contains:true,
        
    });
    
    $(".textarea-content").trumbowyg({
         
        
    });
    
</script>
@endsection