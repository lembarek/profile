<?php

namespace Lembarek\Profile\Controllers;

use Lembarek\Core\Schema\Schema;
use Lembarek\Profile\Repositories\ProfileRepositoryInterface;
use Illuminate\Http\Request;
use Lembarek\Profile\Requests\ProfileRequest;

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


    /**
     * edit a variable
     *
     * @param  string  $name
     * @return Response
     */
    public function edit($name)
    {
        return view('profile::edit.index', compact('name'));

    }


    /**
     * to store a value in profile when edit
     *
     * @return Response
     */
    public function update(ProfileRequest $request)
    {
        $request = $request->except('_token', '_method');


        $this->profileRepo->where('user_id', \Auth::user()->id)->update($request);

        return redirect(route('profile::profiles.index'));
    }
}
