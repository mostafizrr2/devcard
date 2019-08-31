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

Route::get('/', 'publicController@index')->name('public.about');
Route::get('/portfolio', 'publicController@portfolio')->name('public.portfolio');
Route::get('/services', 'publicController@services')->name('public.services');
Route::get('/resume', 'publicController@resume')->name('public.resume');
Route::get('/blog', 'publicController@blog')->name('public.blog');
Route::get('/contact', 'publicController@contact')->name('public.contact');
Route::get('/hire-me', 'publicController@hire')->name('public.hire');
Route::get('/article', 'publicController@article')->name('public.article');
Route::get('/project', 'publicController@project')->name('public.project');
