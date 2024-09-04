<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

       $request->session()->regenerate();

        $user = Auth::user();
        $sessionData = [
            'user_id' => $user->id,
            'user_name' => $user->firstname,
           'first_name_initial' => substr($user->name, 0, 1),
            // Add other user attributes as needed
        ];


        // $request->validate([
        //     'Firstname' => 'required|string|max:255',
        //     'Middlename' => 'required|string|max:255',
        //     'Lastname' => 'required|string|max:255',
        //     'Username' => 'required|string|max:255|unique:users',
        //     'Password' => ['required','confirmed', Rules\Password::defaults()],
        //     // 'UserRoleId' => 'required|integer|in:1,2'
    
        // ]);

        // $user = User::create([
        //     'Firstname' => $request->Firstname,
        //     'Middlename' => $request->Middlename,
        //     'Lastname' => $request->Lastname,
        //     'Username' => $request->Username,
        //     'UserRoleId' => 1,
        //     // ... other fields
        // ]);
        $sessionData = [
            'user_id' => $user->id,
            'user_name' => $user->name,
           'first_name_initial' => substr($user->name, 0, 1),
            // Add other user attributes as needed
        ];

        session($sessionData);


        return redirect()->intended(RouteServiceProvider::HOME);


            // $request->validate([ 
            //     'email' => 'required|email',
            //     'password' => 'required',
            // ]);

            // if (Auth::attempt($request->only('email', 'password'))) {
            //     $request->session()->regenerateToken();
            //     return view('pages.dashboard'); // Replace 'dashboard' with the actual name of your dashboard view
            // }

            // return back()->withErrors([
            //     'email' => 'Invalid credentials.',
            // ]);

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
