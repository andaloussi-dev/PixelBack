<?php

namespace App\Customer\Policy;

use App\Issue\Issue;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class IssuePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(User $user)
    {
        return $user->isCustomer();
    }

    public function create(User $user)
    {
        return $user->isCustomer();
    }

    public function show(User $user,Issue $issue)
    {
        return $user->id == $issue->user->id;
    }

    public function destroy(User $user,Issue $issue)
    {
        return $user->id == $issue->user->id;
    }

}
