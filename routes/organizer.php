<?php

use Illuminate\Support\Facades\Route;



Route::prefix('organizer')
    ->as('organizer.')
    ->namespace('Account\Organizer')
    ->middleware(['organizer'])
    ->group(function () {
        // Dashboard
        Route::get('/dashboard', 'OrganizerController@dashboard')->name('dashboard');
      

    });




