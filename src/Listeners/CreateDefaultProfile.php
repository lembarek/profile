<?php

namespace Lembarek\Profile\Listeners;

use Lembarek\Auth\Events\UserHasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Lembarek\Profile\Repositories\ProfileRepositoryInterface;

class CreateDefaultProfile
{
    protected $ProfileRepo;

    /**
    * Create the event listener.
    *
    * @return void
    */

    public function __construct(ProfileRepositoryInterface $profileRepo)
    {
        $this->profileRepo = $profileRepo;
    }

    /**
    * Handle the event.
    *
    * @param  TestEvent  $event
    * @return void
    */
    public function handle(UserHasCreated $event)
    {
        $user_id = $event->user->id;
        $this->profileRepo->create(compact('user_id'));
    }
}
