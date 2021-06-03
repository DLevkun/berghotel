<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tourinfo/{id}', 'ToursController@getTourInfo')->name('tour-info');

Route::get('/tourscontainer', 'ToursController@showAll')->name('tours-container');

Route::get('/suiteinfo/{id}', 'RoomsController@getRoomInfo')->name('room-info');

Route::get('/suitescontainer', 'RoomsController@showAll')->name('rooms-container');

Route::get('/suitescontainer/search', 'RoomsController@searchRoom')->name('search-room');

Route::post('/suiteinfo/submit/{id}', 'SuiteFormController@store')->name('room-form');

Route::post('/tourinfo/submit/{id}', 'TourFormController@store')->name('tour-form');

Route::get('/tourinfo/submit/{id}/form', 'ToursController@getInfo')->name('after-tourform');

Route::get('/suiteinfo/submit/{id}/form/{checkDates}', 'RoomsController@getInfo')->name('after-suiteform');

Route::get('/info', function () {
    return view('aftertourbooking');
})->name('aftertourbooking');