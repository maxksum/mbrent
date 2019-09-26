<?php

Route::get('/', 'MainController@getMainPage');
Route::get('/conditions', 'MainController@getConditionsPage');
Route::get('/about', 'MainController@getAboutPage');
Route::get('/auto/{id}', 'MainController@getAutoPage');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('/sendrequest', 'MainController@addRequest');
Route::post('/addreview', 'MainController@addReview');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/logout', 'Auth\LoginController@errorPageReturn');
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
  Route::get('/', 'AdminController@getAdminDashbordPage');
  Route::get('/cars', 'AdminController@getAdminCarsPage');
  Route::get('/car/{id}', 'AdminController@getAdminCarPage');
  Route::get('/requests', 'AdminController@getAdminRequestsPage');
  Route::get('/reviews', 'AdminController@getAdminReviewsPage');
  Route::get('/orders', 'AdminController@getAdminOrdersPage');
  Route::get('/clients', 'AdminController@getAdminClients');
  Route::get('/neworder', 'AdminController@createOrder');
  Route::get('/newservice', 'AdminController@createService');
  Route::get('/confirmreview/{id}', 'AdminController@confirmReview');
  Route::get('/deletereview/{id}', 'AdminController@deleteReview');
  Route::post('/savecomment', 'AdminController@saveComment');
  Route::get('/endorder/{id}', 'AdminController@closeOrder');
  Route::get('/acceptrequest/{id}', 'AdminController@acceptRequest');
});
