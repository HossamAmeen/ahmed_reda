<?php

Route::get('/test', function () {
    return "test";
});

Auth::routes();
Route::namespace('BackEnd')->prefix('admin')->group(function(){
    Route::middleware('auth')->group(function () {
            // Route::get('/', 'BriefController@index');
            // Route::resource('briefs', 'BriefController');briefs.update
            Route::get('/', 'BriefController@editPrefs');
            Route::get('/prefs', 'BriefController@editPrefs')->name('prefs');
            Route::put('/prefs', 'BriefController@update')->name('briefs.update');
            Route::resource('users', 'UserController')->middleware('checkAdmin');
            Route::resource('services', 'ServiceController');
            Route::resource('news', 'NewsController');
            Route::resource('articals', 'ArticalController');
            Route::resource('questions', 'QuestionController')->except('show');  
            Route::resource('drugs', 'DrugController');
            Route::resource('operations', 'OperationController');  
            Route::resource('clinics', 'ClinicController');  
    });
});

Route::get('/', 'HomeController@home')->name('home');
Route::get('change/language/{lang}', 'HomeController@change_language');
Route::prefix('ar')->group(function(){
    Route::get('/', 'HomeController@home');
    Route::get('index', 'HomeController@index');
    Route::get('news', 'HomeController@news');
    Route::get('articles', 'HomeController@articles');
    Route::get('news/{id}', 'HomeController@show_news');
    Route::get('artical/{id}', 'HomeController@show_artical');
    Route::get('services', 'HomeController@services');
    Route::get('questions', 'HomeController@questions');
    Route::any('booking', 'HomeController@booking');
    Route::any('help', 'HomeController@help');
    Route::get('about/us', 'HomeController@aboutUs');
});

Route::prefix('en')->group(function(){

    Route::get('index', 'HomeController@home')->name('en.index');
    Route::get('/', 'HomeController@home')->name('en.index');
    Route::get('news', 'HomeController@news');
    Route::get('news/{id}', 'HomeController@show_news');
    Route::get('articles', 'HomeController@articles');
    Route::get('artical/{id}', 'HomeController@show_artical');
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