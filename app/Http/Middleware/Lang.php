<?php
namespace App\Http\Middleware;
use Closure;
class Lang {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {

        // lang is helper function from File Helper.php 
        app()->setLocale(lang());
		return $next($request);

        // session()->has('lang') ? app()->setLocale(session('lang')) : app()->setLocale('ar');

	}
}