<?php

use Lembarek\Profile\Controllers\ProfileController;

Route::group(['as' => 'profile::', 'middleware' => ['web']], function () {

    Route::get('/profile', [
        'as' => 'index',
        'uses' => ProfileController::class.'@index',
        ]);

    Route::get('/profile/{name}/edit', [
        'as' => 'edit',
        'uses' => ProfileController::class.'@edit',
        ]);

    Route::post('/profile/edit', [
        'as' => 'edit.store',
        'uses' => ProfileController::class.'@postEdit',
        ]);

});
