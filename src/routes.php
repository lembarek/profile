<?php

Route::group(['as' => 'profile::', 'middleware' => ['web'], 'namespace' => 'Lembarek\Profile\Controllers'], function () {

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
