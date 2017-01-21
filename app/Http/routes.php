<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('categories/{name}/',[
            'uses'=>'WelcomeController@searchCategory', 
            'as'=> 'front.search.category'
         ]);

Route::get('articles/{slug}/',[
            'uses'=>'WelcomeController@viewArticle', 
            'as'=> 'front.view.article'
         ]);

Route::get('tags/{name}/',[
            'uses'=>'WelcomeController@searchTags', 
            'as'=> 'front.search.tag'
         ]);

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy',[
            'uses'=>'UsersController@destroy', 
            'as'=> 'admin.users.destroy'
         ]);
    
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy',[
            'uses'=>'CategoriesController@destroy', 
            'as'=> 'admin.categories.destroy'
         ]);
     Route::resource('tags', 'TagsController');
     Route::get('tags/{id}/destroy',[
            'uses'=>'TagsController@destroy', 
            'as'=> 'admin.tags.destroy'
         ]);
    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{id}/destroy',[
            'uses'=>'ArticlesController@destroy', 
            'as'=> 'admin.articles.destroy'
         ]);
    
    Route::get('images',[
            'uses'=>'ImagesController@index', 
            'as'=> 'admin.images.index'
         ]);
     
     
     
     
});

Route::resource('registro', 'RegisterController');

 