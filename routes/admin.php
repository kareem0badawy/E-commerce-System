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
            return view('admin.dashboard');
        });

        Route::resource('admin','AdminController');
        Route::delete('admin/destroy/all', 'AdminController@multi_delete');


        Route::resource('users','UsersController');
        Route::delete('users/destroy/all', 'UsersController@multi_delete');

        Route::resource('countries', 'CountriesController');
        Route::delete('countries/destroy/all', 'CountriesController@multi_delete');

        Route::resource('cities', 'CitiesController');
        Route::delete('cities/destroy/all', 'CitiesController@multi_delete');

        Route::resource('states', 'StatesController');
        Route::delete('states/destroy/all', 'StatesController@multi_delete');

        Route::resource('trademarks', 'TradeMarksController');
        Route::delete('trademarks/destroy/all', 'TradeMarksController@multi_delete');

        Route::resource('manufacturers', 'ManufacturersController');
        Route::delete('manufacturers/destroy/all', 'ManufacturersController@multi_delete');

        Route::resource('shipping', 'ShippingController');
        Route::delete('shipping/destroy/all', 'ShippingController@multi_delete');

        Route::resource('departments', 'DepartmentsController');

        Route::resource('malls', 'MallsController');
        Route::delete('malls/destroy/all', 'MallsController@multi_delete');
  
        Route::resource('colors', 'ColorsController');
        Route::delete('colors/destroy/all', 'ColorsController@multi_delete');


        Route::any('logout', 'AuthController@logout');
        Route::get('settings', 'Settings@setting');
        Route::post('settings', 'Settings@setting_save');

        Route::get('lang/{lang}', function ($lang) {
            session()->has('lang') ? session()->forget('lang') : '';
            $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
            return back();
        });
        
    });
});