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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('landing-page', 'WelcomeController@landingPage')->name('landing');

Auth::routes();

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::patch('cancel-event/{id}', 'HomeController@cancelEvent')->name('event.cancel');

Route::middleware(['auth'])->group(function(){
    Route::get('/create-event', 'EventController@createForm1')->name('event.create');
    Route::post('/create-event', 'EventController@storeForm1')->name('event.store');
    Route::get('/create-event-2', 'EventController@createForm2')->name('event.create.2');
    Route::get('/create-event-venue/{id}', 'EventController@showVenue')->name('event.venue');
    Route::post('/create-event-venue/{id}', 'EventController@storeFormVenue')->name('event.venue.store');
    Route::get('/create-event-summary', 'EventController@createFormSummary')->name('event.summary');
    Route::post('/create-event-summary', 'EventController@storeFormSummary')->name('event.store.summary');
    Route::get('/venue-360', 'EventController@show360Venue')->name('venue.360');
});


Route::prefix('eo')->group(function () {
    Route::get('/', 'EventOrganizerController@index')->name('eo.dashboard');
    Route::get('/register', 'EventOrganizerController@create')->name('eo.register');
    Route::post('/register', 'EventOrganizerController@store')->name('eo.register.store');
    Route::get('/login', 'Auth\EventOrganizerLoginController@login')->name('eo.auth.login');
    Route::post('/login', 'Auth\EventOrganizerLoginController@loginEventOrganizer')->name('eo.auth.loginEventOrganizer');
    Route::post('logout', 'Auth\EventOrganizerLoginController@logout')->name('eo.auth.logout');
    Route::post('/post-member', 'EventOrganizerMemberController@store')->name('eo.member.store');
    Route::get('profile', 'EventOrganizerMemberController@profile')->name('eo.profile');
    Route::get('event/{id}', 'EventStatusController@showEvent')->name('eo.show.event');
    Route::patch('receive-event/{id}', 'EventStatusController@receiveEvent')->name('eo.receive.event');
    Route::delete('delete-event/{id}', 'EventStatusController@confirmCancelEvent')->name('event.delete');
    Route::get('events', 'EventSearchController@index')->name('events.index');
    Route::get('events-search', 'EventSearchController@search')->name('eo.search');
    Route::patch('status-update', 'EventStatusController@updateEventStatus')->name('event.status.update');
  });
