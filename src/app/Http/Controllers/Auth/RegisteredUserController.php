<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
        //     'fullname' => ['required', 'string', 'max:255'],
        //     'fullname_huri' => ['required', 'string', 'max:255'],
        //     'roll' => ['required'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        // dd($request);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'fullname' => $request->fullname,
            'fullname_huri' => $request->fullname_huri,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
        // return view('auth.register_done', compact('user'));
    }

    // public function show(Request $request)
    // {
    //     $user = $request;

    //     return view('auth.register_check', compact('user'));
    // }
}
