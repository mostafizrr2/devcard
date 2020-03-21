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

Route::get('/', 'PublicController@index')->name('public.about');
Route::get('/portfolio', 'PublicController@portfolio')->name('public.portfolio');
Route::get('/services', 'PublicController@services')->name('public.services');
Route::get('/resume', 'PublicController@resume')->name('public.resume');
Route::get('/blog', 'PublicController@blog')->name('public.blog');
Route::get('/contact', 'PublicController@contact')->name('public.contact');
Route::get('/hire-me', 'PublicController@hire')->name('public.hire');
Route::get('/article', 'PublicController@article')->name('public.article');
Route::get('/project', 'PublicController@project')->name('public.project');



//Admin Auth
Route::group(
    [
        'prefix' => 'manage',
        'namespace' => 'Admin'
    ], 
function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
    Route::post('/profile', 'AdminController@saveProfile')->name('admin.profile');

    //Resources
    Route::resource('/works', 'WorkController');
    Route::resource('/testimonial', 'TestimonialController');
    Route::resource('/portfolio', 'PortfolioController');

});
