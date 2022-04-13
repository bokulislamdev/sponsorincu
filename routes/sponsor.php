<?php

use Illuminate\Support\Facades\Route;



Route::prefix('sponsor')
    ->as('sponsor.')
    ->namespace('Account\Sponsor')
    ->middleware(['sponsor'])
    ->group(function () {
        // Dashboard
        Route::get('/dashboard', 'SponsorController@dashboard')->name('dashboard');
      

    });

