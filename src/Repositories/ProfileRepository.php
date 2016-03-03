<?php

namespace Lembarek\Profile\Repositories;

use Lembarek\Profile\Models\Profile;

class ProfileRepository extends Repository implements ProfileRepositoryInterface
{

    protected $model;

    public function __construct(Profile $model)
    {
        $this->model = $model;
    }
}
