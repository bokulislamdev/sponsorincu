    <?php

    use Illuminate\Support\Facades\Route;



    Route::prefix('marketer')
        ->as('marketer.')
        ->namespace('Account\Marketer')
        ->middleware(['marketer'])
        ->group(function () {
            // Dashboard
            Route::get('/dashboard', 'MarketerController@dashboard')->name('dashboard');


            // Route::resources([

            //     'product' => 'ProductController',
            // ]);




        });




