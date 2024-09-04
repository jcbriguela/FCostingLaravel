<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    //login
    public function Login()
    {
        return view('Login.login');
    }

    //register Api
    public function register(Request $request)
    {
        //** API */
        //    $response = Http::post('localhost:8080/api/register?',[
        //     'name' => 'jean',
        //     'email' => 'jean@mail.com',
        //     'password' => '1234'
        //    ]);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        dd($request->name);

        $user = User::create([
            'Surname' => $request->name,
            'Username' => $request->email,
            'Password' => Hash::make($request->password),
        ]);

       dd($response->json());


    }
    public function registerApi(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        try{
            $http =new \GuzzleHttp\Client;
            $email = $request->email;
            $password = $request->password;

            $response = $http->post('http://localhost/api/v1/auth/register?',[
                'headers' =>[
                    'Authorization' => 'Bearer' . session()->get('token.access_token')
                ],
                'query' => [
                    'name' => $name,
                    'email' => $email,
                    'password' =>$password,
                ]
                ]);

                $result = json_decode((string)$response->getbody(),true);
                return redirect()->route('login');

            
        }catch(\Exception $e){
            return redirect()->back()->with('error','Registration fail, Please try again');
        }
    }

    public function store(Request $request)
    {

        dd("helloStore");

        // try{
        //     $result = DB::select('CALL SP_USERS_REGISTRATION(?, ?, ?, ?, ?, ?, ?, ?, ?)', [
        //         'jean',
        //         'briguela',
        //         'jean rose',
        //         'cotoner',
        //         null,
        //         1,
        //         1,
        //         'Test SP',
        //         -1
        //     ]);
        // // Handle successful registration, e.g., flash a success message
        // return redirect()->route('/')->with('success', 'Registration successful.');
        
        
        // // Check the result from the stored procedure
        //     if ($result[0]->success) {
        //         dd('ok');

        //         // Successful registration
        //     } else {
        //         dd('error');
        //     }
        // } catch (\Exception $e) {
        //     // Handle unexpected errors
        //     dd($e->getMessage());
        // }
    }

    public function __invoke(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();  


        return redirect()->route('login');
    }
        
}
