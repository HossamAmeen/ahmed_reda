<?php

Route::get('/test', function () {
    return "test";
});

Auth::routes();
Route::namespace('BackEnd')->prefix('admin')->group(function(){
    Route::middleware('auth')->group(function () {
            Route::get('/', 'BriefController@index');
            Route::resource('briefs', 'BriefController');
            Route::resource('users', 'UserController')->middleware('checkAdmin');
            Route::resource('services', 'ServiceController');
            Route::resource('news', 'NewsController');
            Route::resource('galleries', 'GalleryController');
            Route::resource('questions', 'QuestionController')->except('show');  
            Route::resource('drugs', 'DrugController');
            Route::resource('operations', 'OperationController');  
            Route::resource('clinics', 'ClinicController');  
    });
});
Route::get('/', 'HomeController@index');
Route::get('change/language/{lang}', 'HomeController@change_language');
Route::prefix('ar')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::get('index', 'HomeController@index');
    Route::get('news', 'HomeController@news');
    Route::get('news/{id}', 'HomeController@show_news');
    Route::get('services', 'HomeController@services');
    Route::get('questions', 'HomeController@questions');
    Route::any('booking', 'HomeController@booking');
    Route::any('help', 'HomeController@help');
    Route::get('about/us', 'HomeController@aboutUs');
});
Route::prefix('en')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::get('index', 'HomeController@index');
    Route::get('news', 'HomeController@news');
    Route::get('news/{id}', 'HomeController@show_news');
    Route::get('services', 'HomeController@services');
    Route::get('questions', 'HomeController@questions');
    Route::any('booking', 'HomeController@booking');
    Route::any('help', 'HomeController@help');
    Route::get('about/us', 'HomeController@aboutUs');
});
// Route::fallback(function () {
//     //
//     return view('not_found');
// });