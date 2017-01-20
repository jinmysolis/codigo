<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;
use Laracasts\Flash\Flash;

class TagsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	
                 $tags= Tag::name($request->get('name'))->orderBy('id','DESC')->paginate(5);
                 return view('admin.tags.index')->with('tags',$tags);
                 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.tags.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TagRequest $request)
	{
		$tag = new Tag($request->all());
                $tag->save();
                 flash::success("Tag creado correctamente");
                 return redirect()->route('admin.tags.index');
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
		$tag= Tag::find($id);
                return view('admin.tags.edit')->with('tag',$tag);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$tag = Tag::find($id);
                $tag->fill($request->all());
                $tag->save();
                flash::success("Tag editado correctamente");
                return redirect()->route('admin.tags.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tag= Tag::find($id);
                $tag->delete();
         
           flash::error('El Tag ha sido borrado correctamente');
           return redirect()->route('admin.tags.index');
	}

}
