<?php


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Config::set('auth.defines', 'admin');

    Route::get('login', 'AuthController@login');
    Route::get('forgot/password', 'AuthController@forgotPassword');
    Route::post('reset/password', 'AuthController@resetPassword');
    Route::get('reset/password/{token}', 'AuthController@resetWithTokenPassword');
    Route::post('store/password/{token}', 'AuthController@storeNewPassword');
    Route::post('login', 'AuthController@postLogin');

    Route::group(['middleware' => 'admin:admin'], function () {
        Route::get('/', function () {
            return view('admin.home');
        });

        Route::resource('admin','AdminController');
        Route::delete('admin/destroy/all', 'AdminController@multi_delete');


        Route::resource('users','UsersController');
        Route::delete('users/destroy/all', 'UsersController@multi_delete');


        Route::any('logout', 'AuthController@logout');

        Route::get('lang/{lang}', function ($lang) {
            session()->has('lang') ? session()->forget('lang') : '';
            $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
            return back();
        });
        
    });
});