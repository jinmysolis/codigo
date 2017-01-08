<h1>Prueba laravel</h1>
<br>
{{ $article->title }}
<hr>
{{ $article->content }}
<hr>
{{ $article->user->name }} / {{ $article->category->name }}/
@foreach($article->tags as $tag)
   {{$tag->name}}

@endforeach
