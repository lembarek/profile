<?php

use Illuminate\Database\Eloquent\Factory as EloquentFactory;

$factory = app(EloquentFactory::class);

$factory->define(Lembarek\Profile\Models\Profile::class, function ($faker) {
    return [
    'user_id' =>  factory('Lembarek\Auth\Models\User')->create()->id,
    'country' => 'united states',
    'sex'     => 'male',
    'birth_date'    => $faker->date(),
    ];
});

