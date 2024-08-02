<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //login
    public function Login()
    {
        return view('Login.login');
    }

    //register Api
    public function UserRegistration(Request $request)
    {
        dd("hello");
       $response = Http::post('localhost:8080/api/register?',[
        'name' => 'jean',
        'email' => 'jean@mail.com',
        'password' => '1234'
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
}
