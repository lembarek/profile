<?php

use Lembarek\Profile\Controllers\ProfileController;

Route::group(['middleware' => ['web']], function(){

    Route::get('/profile', [
        'as' => 'profile',
        'uses' => ProfileController::class.'@index',
        ]);

});
