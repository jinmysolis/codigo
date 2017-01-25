<?php namespace App\Http\Controllers;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Carbon\Carbon;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
//              Carbon::setLocale('es');
                
	}

       
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)      
	{      
               $tags= Tag::all();
               $users= User::all();
               $articles= Article::orderBy('id','DESC')->paginate(6);
               $articles->each(function($articles){
                    $articles->category;
                    $articles->images;
                    $articles->user;
                  
                });
                return view('welcome')
                        ->with('articles',$articles)
                        ->with('users',$users)
                        ->with('tags',$tags)
                        ;
	}
        
        public function searchCategory($name)
         {
            $category= Category::Name($name)->first();
            $articles=$category->articles()->paginate(4);
            $articles->each(function($articles){
                    $articles->category;
                    $articles->images;
                  
                });
            
         return view('welcome')->with('articles',$articles);
	}
        
        
}
