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
use Illuminate\Support\Facades\DB;


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
        $request->validate([
            'Surname' => ['required', 'string', 'max:255'],
            'Username' => ['required', 'string', 'max:255'],
            'Password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //** breeze */
        // $user = User::create([
        //     'Surname' => $request->name,
        //     'Username' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);

        try  
        {
            $result = DB::select('CALL SP_USERS_REGISTRATION(?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                'jean',
                'briguela',
                'jean rose',
                'cotoner',
                null,
                1,
                1,
                'Test SP',
                -1
            ]);
        // Handle successful registration, e.g., flash a success message
        
        
        // Check the result from the stored procedure
            if ($result[0]->success) {
                dd('ok');
        return redirect()->route('login')->with('success', 'Registration successful.');

                // Successful registration
            } else {
                dd('error');
            }
        } catch (\Exception $e) {
            // Handle unexpected errors
            dd($e->getMessage());
        }
        
        // catch (\Exception $e) {
        //     // Handle errors, e.g., log the error, display an error message
        //     return back()->withErrors(['error' => 'Registration failed. Please try again.']);
        // }

         // Call stored procedure for registration

        // DB::select('CALL SP_USERS_REGISTRATION(?, ?, ?)', [$request->Surname, $request->Username, Hash::make($request->Password)]);
        // Check stored procedure result and handle accordingly
    
    }
}
