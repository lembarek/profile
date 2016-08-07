<?php

Route::group([
    'as' => 'profile::',
    'middleware' => ['web'],
    'namespace' => 'Lembarek\Profile\Controllers'
], function () {

    Route::resource('profiles', 'ProfileController', ['only' => ['index', 'edit', 'update']]);

});
