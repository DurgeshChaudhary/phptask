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


// home page
Route::get('/', function(){
	return view('pages.index');
});


Route::get('pages/index2', function(){
	return view('pages.index2');
});
Route::get('404', function()
{
	return view('pages.404');
});

Route::get('about', function()
{
	return view('pages.about');
});

Route::get('service', function()
{
	return view('pages.service');
});

Route::get('team', function()
{
	return view('pages.team');
});

Route::get('blog', function()
{
 return view('pages.blog');	
});

Route::get('shop', function()
{
 return view('pages.shop');	
});

Route::get('cart', function()
{
 return view('pages.cart');	
});