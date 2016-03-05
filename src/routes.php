<?php

use Lembarek\Profile\Controllers\ProfileController;

Route::group(['middleware' => ['web']], function () {

    Route::get('/profile', [
        'as' => 'profile',
        'uses' => ProfileController::class.'@index',
        ]);

    Route::get('/profile/{name}/edit', [
        'as' => 'profile.edit',
        'uses' => ProfileController::class.'@edit',
        ]);

    Route::post('/profile/edit', [
        'as' => 'profile.edit.store',
        'uses' => ProfileController::class.'@postEdit',
        ]);

});
