<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Laracasts\Flash\Flash;

class CategoriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
                $categories= category::name($request->get('name'))->orderBy('id','DESC')->paginate(5);
                return view('admin.categories.index')->with('categories',$categories);
            
            
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryRequest $request)
	{
		 $category = new Category($request->all());
                 $category->save();
                 flash::success("Categoria creada correctamente");
                 return redirect()->route('admin.categories.index');
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
            
                $category= Category::find($id);
                return view('admin.categories.edit')->with('category',$category);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
            
            $category = Category::find($id);
		$category->fill($request->all());
                $category->save();
                flash::warning("categoria editada correctamente");
                return redirect()->route('admin.categories.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$category= Category::find($id);
                $category->delete();
         
           flash::error('La categoria ha sido borrado correctamente');
           return redirect()->route('admin.categories.index');
	}

}
