@extends('admin.template.tema')

@section('title')
    pagina inicio
@endsection

@section('content')
<div class="container">
    <h3 class="title-front Left">Ultimos Articulos </h3>
    <div class="row">
        
      @foreach($articles as $article)   
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    @foreach($article->images as $image)   
                    <a href="#" class="thumbnail">
                       <img src="{{ asset( 'images/articles/' .  $image->name)}}"  class="img-responsive" style ="height:90px ;"  >       
                        
                      @endforeach        
                    </a> 
                    
                  
                    <h3 class="text-center">{{ $article->title}}</h3>
                    <hr>
                    <i class="fa fa-folder-open-o"></i><a href="">categoria:{{ $article->category->name}}</a>
                    <div class="pull-right">
                        <i class="fa fa-clock-o"></i>hace 3 minutos
                    </div>
                </div>
                
            </div>
            
        </div>
          
          
          
            @endforeach
          
          
    </div>

  
 
 </div>
 
@endsection



