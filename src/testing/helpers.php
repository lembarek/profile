<?php

use Lembarek\Profile\Models\Profile;
function  createProfile($overs = [])
{
    return ufactory(Profile::class)->create($overs);
}

