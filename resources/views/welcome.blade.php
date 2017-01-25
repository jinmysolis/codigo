@extends('admin.template.main')

@section('title')
    pagina inicio
@endsection

@section('content')

<section class="whiteSection full-width clearfix newsSection" id="latestNews">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Articulos</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
          
        <div class="row">
          
            @foreach($articles as $article)
          
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
             
              @foreach($article->images as $image)
	<img class="img-responsive " src="{{ asset('images/articles/' . $image->name)  }}"style ="height:350px ;">
	     @endforeach
              <div class="sticker-round bg-color-1"> <br>{{$article->created_at->diffForHumans() }}</div>
              <div class="caption border-color-1">
                <h3><a href="#" class="color-1">{{ $article->title }}</a></h3>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Contenido</a></li>
                 
                </ul>
                <p>{{ $article->content }} </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="{{ route('front.search.category',$article->category->name) }}" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $article->category->name }}</a></li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
       
            
             
            
        </div>
          <div class="text-center">
       {!! $articles->setPath('')->render()!!}
          </div>
      </div>
    </section>


                 

<section class="countUpSection">
      <div class="container">
        <div class="sectionTitleSmall">
          <h2>Catecorias</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
        </div>
          
        <div class="row">
        @foreach($categories as $category)
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">{{ $category->articles->count() }}</div>
              <div class="counterInfo bg-color-1"><a href="{{ route('front.search.category', $category->name) }}">
							{{ $category->name}}
						</a>
              
              
              </div>
            </div>
          </div>
          @endforeach
          
          
        </div>
      </div>
    </section>

<br>


<div class="counterInfo bg-color-1">
<div class="text-center">
<hr>
<h3>Todas las imagenes</h3>
<hr>
</div>              
           
</div>


 <section class="brandSection clearfix">
      <div class="container">
        <div class="owl-carousel partnersLogoSlider">
             @foreach($articles as $article)
            @foreach($article->images as $image)
          <div class="slide">
            <div class="partnersLogo clearfix">
            <img class="img-responsive " src="{{ asset('images/articles/' . $image->name)  }}"style ="height:120px ;">
            </div>
          
          </div>
           @endforeach
            @endforeach
                  
        </div>              
      </div>
    </section>

<div class="counterInfo bg-color-1">
<div class="text-center">
<hr>
<h3>Todos los Usuarios</h3>
<hr>
</div>                       
</div>
 <section class="brandSection clearfix">
      <div class="container">
        <div class="owl-carousel partnersLogoSlider">
            
            @foreach($users as $user)  
          <div class="slide">
            <div class="partnersLogo clearfix">
            {{ $user->name}}
            {{ $user->email}}
            {{$user->type}}
            </div>
          </div> 
              @endforeach
             
         
        </div>              
      </div>
    </section>


<div class="counterInfo bg-color-1">
<div class="text-center">
<hr>
<h3>Todas las Categorias</h3>
<hr>
</div>                       
</div>
 <section class="brandSection clearfix">
      <div class="container">
        <div class="owl-carousel partnersLogoSlider">
            
           @foreach($categories as $category) 
          <div class="slide">
            <div class="partnersLogo clearfix">
           {{ $category->name}}
            </div>
          </div> 
              @endforeach
             
          
        </div>              
      </div>
    </section>

<div class="counterInfo bg-color-1">
<div class="text-center">
<hr>
<h3>Todos los Tags</h3>
<hr>
</div>                       
</div>
 <section class="brandSection clearfix">
      <div class="container">
        <div class="owl-carousel partnersLogoSlider">
            
          @foreach($tags as $tag)  
          <div class="slide">
            <div class="partnersLogo clearfix">
         {{ $tag->name}}
            </div>
          </div> 
              @endforeach
             
          
        </div>              
      </div>
    </section>


@endsection



