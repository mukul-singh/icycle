<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Site@index');
Route::get('/login', 'Site@login');
Route::get('/about', 'Site@about');
Route::get('/annual-events', 'Site@annualEvents');
Route::get('/corporate-events', 'Site@corporateEvents');
Route::get('/weekend-events', 'Site@weekendEvents');
Route::get('/weekend-events/{trail}/{date}', 'Site@weekendEventsDetail');
Route::get('/stories', 'Site@stories');
Route::get('/contact', 'Site@contact');
Route::get('/hire-a-bicycle', 'Site@hireBicycle');

// adminme Route
Route::get('/adminme', 'Admin@login');
Route::get('/adminme/events/weekend-event/{action}', 'Admin@weekendEvent');
Route::post('/admin/actions', 'Admin@actions');
