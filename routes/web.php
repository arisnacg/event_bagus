<?php

Route::get('/test', 'TestController@index');

///////////////////////////////////////////////////////////////////
//Auth user
Auth::routes();

///////////////////////////////////////////////////////////////////
//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile');
<<<<<<< HEAD
Route::get('/change_password', 'HomeController@changePassword');
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1

///////////////////////////////////////////////////////////////////
//Direktori root
Route::get('/', 'PageController@index');
Route::get('/not_found', 'PageController@not_found');
<<<<<<< HEAD
Route::get('/filter', 'PageController@filter');
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1

///////////////////////////////////////////////////////////////////
//Event
Route::resource('/events', 'EventController');
Route::get('/events/{id}/ticket', 'EventController@ticket');

///////////////////////////////////////////////////////////////////
//Ticket
Route::resource('/tickets', 'TicketController');
Route::post('/tickets/{id}/confirm', 'TicketController@toggle_confirm');
Route::post('/tickets/confirm', 'TicketController@code_confirm');

///////////////////////////////////////////////////////////////////
//Notif
Route::resource('/notif', 'NotifController');
<<<<<<< HEAD
Route::post('/notif/clear', 'NotifController@clear');
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1

///////////////////////////////////////////////////////////////////
//User
Route::resource('/users', 'UserController');
<<<<<<< HEAD
Route::post('/users/change_password', 'UserController@changePassword');

///////////////////////////////////////////////////////////////////
//Admin
Route::get('/admin/home', 'AdminController@index');
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Admin\LoginController@login');
Route::get('/admin/events', 'AdminController@events');
Route::delete('/admin/events/{id}', 'AdminController@events_destroy');
Route::get('/admin/change_password', 'AdminController@passwordForm');
Route::post('/admin/change_password', 'AdminController@changePassword');

=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
