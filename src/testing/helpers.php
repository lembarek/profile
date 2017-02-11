<?php

use Lembarek\Profile\Models\Profile;
function  createProfile($overs = [])
{
    return factory(Profile::class)->create($overs);
}

