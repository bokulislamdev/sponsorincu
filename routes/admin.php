<?php

use Illuminate\Support\Facades\Route;



Route::prefix('admin')
    ->as('admin.')
    ->namespace('Account\Admin')
    ->middleware(['admin'])
    ->group(function () {
        // Dashboard
        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');


        // Resource CRUDS
        Route::resources([
            'user' => 'UserController',
        ]);
        Route::get('user/change-password/{id}', 'UserController@adminChangePassword')->name('user.change.password');
        Route::post('user/change-password/post/{id}', 'UserController@adminChangePasswordPost')->name('user.change.password.post');
        Route::get('general-user/all', 'UserController@userAll')->name('general.user.all');
        Route::get('vendor/all', 'UserController@vendorAll')->name('vendor.all');

        Route::get('contract', 'AdminController@index')->name('contract.index');
        Route::get('contract/{id}', 'AdminController@contactShow')->name('contract.show');
        Route::get('delete/{id}', 'AdminController@destroy')->name('contract.destroy');


        Route::resources([

            'websetting' => 'WebSettingController',
            'slider' => 'SliderController',
            'social-media' => 'SocialMediaController',
            'blog-category' => 'BlogCategoryController',
            'blog' => 'BlogController',
            'partner' => 'PartnerController',
            'service' => 'ServiceController',
            'event' => 'EventController',
            'event-type' => 'EventTypeController',
            'event-topic' => 'EventTopicController',
            'sponsor-request' => 'SponsorRequestController',
        ]);

        Route::get('/create-package', 'EventController@packageCreate')->name('create.package');
        Route::post('/create-package/post', 'EventController@packagePost')->name('package.post');

        
        
    });


    Route::post('/basic/package/price/{id}', 'Account\Admin\EventController@basicPackagePrice')->name('basic.package.price.store');
    Route::post('/standard/package/price/{id}', 'Account\Admin\EventController@standardPackagePrice')->name('standard.package.price.store');
    Route::post('/premium/package/price/{id}', 'Account\Admin\EventController@premiumPackagePrice')->name('premium.package.price.store');
    Route::get('admin/getsubcategory', 'Account\Admin\EventTypeController@getsubcategory')->name('get.subcategory');

    Route::get('product/status','AdminController@productStatusModel')->name('change.status.model');
    Route::post('product/status/{id}','AdminController@productStatus')->name('change.update');


    


   



Route::prefix('account')
    ->as('account.')
    ->namespace('Account')
    ->group(function () {
        Route::resources([
            'profile' => 'ProfileController',
        ]);
        Route::get('password', 'ProfileController@password')->name('password');
        Route::post('password/change/{id}', 'ProfileController@changePassword')->name('change.password');
    });

Route::prefix('account')
    ->as('admin.')
    ->namespace('Account\Admin')
    ->group(function () {
        
        Route::get('/subscribe/list', 'AdminController@subscribe')->name('subscribe.list');
        Route::post('/subscribe/destroy/{id}', 'AdminController@subscribedestroy')->name('subscribe.destroy');
    });
