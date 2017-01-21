@extends('admin.template.tema')

@section('title')
    pagina inicio
@endsection

@section('content')
<div class="row">
		<div class="col-md-8">
			<div class="row">
				
				@foreach($articles as $article)

				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="#" class="thumbnail">
								@foreach($article->images as $image)
								<img class="img-responsive img-article img-size-fijo" src="{{ asset('images/articles/' . $image->name)  }}"style ="height:90px ;">
								@endforeach
							</a>
							<a href="#">
								<h3 class="text-center">{{ $article->title }}</h3>
							</a>
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="{{ route('front.search.category',$article->category->name) }}">
							{{ $article->category->name }}</a>
							<div class="pull-right">
								<i class="fa fa-clock-o"></i> {{$article->created_at->diffForHumans() }}
							</div>
						</div>
					</div>
				</div>
				
				@endforeach

			</div>

			{!! $articles->setPath('')->render()!!}
		</div>

		<div class="col-md-4">
                   @include('admin.template.partials.aside')
		</div>

	</div>








@endsection



