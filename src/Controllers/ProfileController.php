<?php

namespace Lembarek\Profile\Controllers;

use Lembarek\Profile\Repositories\ProfileRepositoryInterface;

class ProfileController extends Controller
{

    protected $profileRepo;

    public function __construct(ProfileRepositoryInterface $profileRepo)
    {
        $this->middleware('auth');
        $this->profileRepo = $profileRepo;
    }


    /**
     * show all variables variables and its value
     *
     * @return Response
     */
    public function index()
    {
        $variables = $this->profileRepo->getForUser();
        return view('profile::index', compact('variables'));
    }
}
