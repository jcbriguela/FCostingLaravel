<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function allUserView()
    {
        return $this->user->isAdmin() || $this->user->isApprover() || $this->user->isEncoder();
    }
    public function adminView()
    {
        return $this->user->isAdmin();
    }
    public function approverView()
    {
        return $this->user->isApprover();
    }
    public function encoderView()
    {
        return $this->user->isEncoder();
    }
    public function adminEncoderView()
    {
        return $this->user->isAdmin() || $this->user->isEncoder();
    }
    public function adminApproverView()
    {
        return $this->user->isAdmin() || $this->user->isApprover();
    }


    public function editUser(User $user, User $otherUser)
    {
        return $user->id === $otherUser->id;
    }

    public function isAdmin(User $user)
    {
        return $user->role === 'Admin';
    }

    // ... other policy methods
}