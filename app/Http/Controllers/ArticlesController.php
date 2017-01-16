<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$articles= Article::orderBy('id','DESC')->paginate(2);
                 return view('admin.articles.index')->with('articles',$articles);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{       $categories= Category::orderBy('name','ASC')->lists('name','id');
              
                $tags=Tag::orderBy('name','ASC')->lists('name','id');
                
		return view('admin.articles.create')
                        ->with('categories',$categories)
                        ->with('tags',$tags);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
        {  
            if ($request->file('image')){
		$file=$request->file('image');
                $name='agenda_'. time(). '.'.$file->getClientOriginalExtension();
                $path= public_path(). '/images/articles/';
                $file->move($path,$name);
                }
                
            $article= new Article($request->all());
            $article->user_id = \Auth::user()->id ;
            $article->save() ;
            
             $article->tags()->sync($request->tags) ;
            
            $image= new Image();
            $image->name =$name;
            $image->article()->associate($article);
            $image->save();
             flash::success("Articulo creado correctamente");
             return redirect()->route('admin.articles.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}

}
