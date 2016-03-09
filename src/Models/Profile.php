<?php

namespace Lembarek\Profile\Models;

class Profile extends Model
{
    protected $fillable = ['user_id', 'country', 'sex', 'birth_date'];

    protected $hidden = ['id', 'user_id','created_at','updated_at'];
}
