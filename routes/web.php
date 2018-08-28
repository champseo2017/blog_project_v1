<?php
//user route
Route::group(['namespace'=>'User'],function(){
        Route::get('/','HomeController@index');
        Route::get('post/{post}','PostController@post')->name('post');
        Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
        Route::get('post/category/{category}','HomeController@category')->name('category');
});
//admin route 
Route::group(['namespace'=>'Admin'],function(){
     // Home Route
     Route::get('admin/home','HomeController@home')->name('admin.home'); 
    // Users Routes
      Route::resource('admin/user','UserController');
     // Post Routes
      Route::resource('admin/post','PostController');
    // Tag Routes
      Route::resource('admin/tag','TagController');
    // Tag category
      Route::resource('admin/category','CategoryController');
});
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');



