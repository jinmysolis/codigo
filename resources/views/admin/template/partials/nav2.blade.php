<div class="top-info-bar bg-color-7 hidden-xs">
        
     

      <!-- NAVBAR -->
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active dropdown singleDrop color-1">
                <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-home bg-color-1" aria-hidden="true"></i> <span>Inicio</span>
                </a>
                
              </li>
              
               @if(Auth::user())
               <li class="dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul bg-color-3" aria-hidden="true"></i> <span>Usuarios</span></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  
                  <li>Usuarios</li>
                  <li><a href="{{route('admin.users.index')}}">Listar</a></li>
                  <li><a href="{{route('admin.users.create')}}">Crear</a></li>
                  
                  
                </ul>
              </li>
              <li class="dropdown singleDrop color-3">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul bg-color-3" aria-hidden="true"></i> <span>Articulos</span></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  
                  <li>Articulos</li>
                  <li><a href="{{route('admin.articles.index')}}">Listar</a></li>
                  <li><a href="{{route('admin.articles.create')}}">Crear</a></li>
                  
                  
                </ul>
              </li>
              <li class=" dropdown megaDropMenu color-2">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">
                  <i class="fa fa-file-text-o bg-color-2" aria-hidden="true"></i> 
                  <span>Categoria</span>
                </a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-6">
                    <ul class="list-unstyled">
                      <li>Categorias</li>
                      <li><a href="{{route('admin.categories.index')}}">Listar</a></li>
                      <li><a href="{{route('admin.categories.create')}}">Crear</a></li>
                  
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop color-4">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i> 
                  <span>Tag</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  
                 <li><a href="{{route('admin.tags.index')}}">Listar</a></li>
                 <li><a href="{{route('admin.tags.create')}}">Crear</a></li>
                  
                  
                </ul>
              </li>
              
              
                 <li class="dropdown singleDrop color-4">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i> 
                  <span>Imagenes</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  
                 <li><i class="fa fa-unlock-alt bg-color-5" aria-hidden="true"></i>  <li><a href="{{route('admin.images.index')}}">Listar</a></li>
                    
                  
                </ul>
              </li>
              
              
              
              <li class="dropdown singleDrop color-4">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i> 
                  <span>Salir</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                
                <li><i class="fa fa-unlock-alt bg-color-5" aria-hidden="true"></i> <a href='{{ url('/auth/logout') }}' data-toggle="modal" >Salir</a>
                  
                </ul>
              </li>
        
            </ul>
          </div>
              @endif
          
        </div>
      </nav>







<!--mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<!--<nav class="navbar navbar-default">
  <div class="container-fluid">
     Brand and toggle get grouped for better mobile display 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
    </div>

     Collect the nav links, forms, and other content for toggling 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        @if(Auth::user())
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.users.index')}}">Listar</a></li>
            <li><a href="{{route('admin.users.create')}}">Crear</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.categories.index')}}">Listar</a></li>
            <li><a href="{{route('admin.categories.create')}}">Crear</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tags <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.tags.index')}}">Listar</a></li>
            <li><a href="{{route('admin.tags.create')}}">Crear</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.articles.index')}}">Listar</a></li>
            <li><a href="{{route('admin.articles.create')}}">Crear</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Imagenes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.images.index')}}">Listar</a></li>
            
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        
      </ul>
      
        
        @endif
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/auth/login') }}">Entrar</a></li>
        <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
       <li><a href="{{ url('/registro/create') }}">registrar</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
       

    </div> /.navbar-collapse 
  </div> /.container-fluid 
</nav>-->
