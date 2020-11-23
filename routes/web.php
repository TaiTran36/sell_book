<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cms.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
    Route::group(['middleware' => ['can:admin']], function() {
//        Route::get('/dashboard','DashboardController@index')->name('dashboard');
        Route::get('/dashboard','UserController@index')->name('dashboard');
        Route::get('/permission','UserController@show')->name('permission');
        Route::post('/permission','UserController@remove')->name('permission.remove');
        Route::put('/permission','UserController@update')->name('permission.update');
        Route::get('/permission/get-permission','UserController@getPermission')->name('permission.get-permission');

        Route::group(['prefix' => 'e-commerce'], function (){

            Route::group(['prefix' => 'categories'], function (){
                Route::get('/', 'Admin\CategoryController@index');
                Route::post('/create-category', 'Admin\CategoryController@store');
                Route::delete('/delete-category', 'Admin\CategoryController@remove');
                Route::get('/get-category', 'Admin\CategoryController@getCategory');
                Route::put('/update-category', 'Admin\CategoryController@updateCategory');
                Route::put('/active-category', 'Admin\CategoryController@activeCategory');
            });

            Route::group(['prefix' => 'subcategories'], function (){
                Route::get('/', 'Admin\SubCategoryController@index');
                Route::post('/create-subcategory', 'Admin\SubCategoryController@createWithName');
            });
        });
    });

});
//Route::get('/list-user','UserController@index')->name('list-user');



