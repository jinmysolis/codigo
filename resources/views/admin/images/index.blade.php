@extends('admin.template.main')

@section('title')  Listar imagenes @endsection

@section('content')

<div class="row">
    @foreach($images as $image)
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="{{ asset( 'images/articles/' .  $image->name)}}"  class="img-responsive" style ="height:90px ;"  >       
     
            </div>
            <div class="panel-footer">{{$image->article->title}} </div>
                
            </div  >
    </div>
        @endforeach
   
    
</div>
  

@endsection