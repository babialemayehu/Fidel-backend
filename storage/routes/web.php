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
    return view('layouts.content');
});
Route::get('/calander',function(){
    return view("pages.c");
});
Route::get("/cources",function(){
    return view('pages.cources');
});
Route::get("/app store",function(){
    return view('pages.appStore');
});
Route::get("/profile",function(){
    return view('pages.profile');
});
Route::get("/notification",function(){
    return view('pages.notification');
});
Route::get("/grade report",function(){
    return view('pages.gradeReport');
});
Route::get("/shelf",function(){
    return view('pages.cource.shelf');
});
Route::get("/cource/outline",function(){
    return view('pages.cource.outline');
});
Route::get("/cource/shelf",function(){
    return view('pages.cource.shelf');
});
Route::get("/cource/mark",function(){
    return view('pages.cource.mark');
});
Route::get("/cource/assignment",function(){
    return view('pages.cource.assignment');
});