<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users= User::orderBy('id','ASC')->paginate(2);
                return view('admin.users.index')->with('users',$users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
           $user = new User($request->all());
           $user->password= bcrypt($request->password);
           $user->save();
           flash::success("insertado correctamente");
          
           return redirect()->route('admin.users.index');
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
            
            $users = User::find($id);
            return view('admin.users.edit')->with('users',$users);
            
            dd($user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
            $user = User::find($id);
                $user->fill($request->all());
                $user->save();
                flash::success("Usuario editado correctamente");
                return redirect()->route('admin.users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
           $user= User::find($id);
           $user->delete();
         
           flash::warning('El usuario ha sido borrado correctamente');
           return redirect()->route('admin.users.index');
	}

}
