<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role == '1') {
            return redirect('/main/' . $user->id)->with(compact('user'));
        } else {
            return redirect('/gurdian_users');
        }
    }
}
