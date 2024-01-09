<?php

namespace App\Http\Controllers;

use App\Models\User;

class PageCreate extends Controller
{
    public function page_cover_create(User $user)
    {
        $loginUser = auth()->user();

        if ($loginUser->role == '1') {
            $disabled1 = '';
            $disabled2 = 'disabled';
        } else {
            $disabled1 = 'disabled';
            $disabled2 = '';
        }

        return view('page_00_cover.create', compact('user', 'disabled1', 'disabled2'));
    }

    public function page_01_create(User $user)
    {
        $loginUser = auth()->user();

        if ($loginUser->role == '1') {
            $disabled1 = '';
            $disabled2 = 'disabled';
        } else {
            $disabled1 = 'disabled';
            $disabled2 = '';
        }

        return view('page_01.create', compact('user', 'disabled1', 'disabled2'));
    }

    public function page_02_create(User $user)
    {
        return view('page_02.create', compact('user'));
    }

    public function page_03_create(User $user)
    {
        return view('page_03.create', compact('user'));
    }

    public function page_04_create(User $user)
    {
        return view('page_04.create', compact('user'));
    }

    public function page_05_create(User $user)
    {
        return view('page_05.create', compact('user'));
    }

    public function page_06_create(User $user)
    {
        return view('page_06.create', compact('user'));
    }

    public function page_07_create(User $user)
    {
        return view('page_07.create', compact('user'));
    }

    public function page_08_create(User $user)
    {
        return view('page_08.create', compact('user'));
    }

    public function page_09_create(User $user)
    {
        return view('page_09.create', compact('user'));
    }

    public function page_10_create(User $user)
    {
        return view('page_10.create', compact('user'));
    }

    public function page_11_create(User $user)
    {
        $loginUser = auth()->user();

        if ($loginUser->role == '3') {
            $disabled1 = '';
            $disabled2 = 'disabled';
        } else {
            $disabled1 = 'disabled';
            $disabled2 = '';
        }

        return view('page_11.create', compact('user', 'disabled1', 'disabled2'));
    }

    public function page_12_create(User $user)
    {
        return view('page_12.create', compact('user'));
    }

    public function page_13_create(User $user)
    {
        return view('page_13.create', compact('user'));
    }

    public function page_14_create(User $user)
    {
        return view('page_14.create', compact('user'));
    }

    public function page_15_create(User $user)
    {
        return view('page_15.create', compact('user'));
    }
}
