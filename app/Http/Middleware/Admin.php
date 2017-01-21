<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\User;

class Admin {

	protected $auth;

	
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
        
        
        
	public function handle($request, Closure $next)
	{
            
            dd($this->auth->user()->member);
            
		return $next($request);
	}

}
