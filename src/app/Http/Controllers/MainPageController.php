<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainPageController extends Controller
{
    public function index(User $user)
    {
        $this->authorize('view', $user);

        $loginUser = auth()->user();

        return view('main.index', compact('loginUser', 'user'));
    }
}
