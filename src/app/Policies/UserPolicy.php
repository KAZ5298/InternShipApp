<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function view(User $user, User $model): bool
    {
        if ($user->role == '1') {
            return $user->id === $model->id;
        } else {
            return true;
        }
    }
}
