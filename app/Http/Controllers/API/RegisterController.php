<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response

     */

    public function index(Request $request){
        if (!Auth::check() && $request->path() != 'login') {
            return redirect('http://localhost:4002/');
        }
    }

    public function register(Request $request)

    {
        return  User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),

        ])
    }

        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|string|email|unique:users',
        //     'password' => 'required|string'
        // ]);

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)
        // ]);

        // return response()->json([
        //     'message' => 'Successfully created user!'
        // ], 201);



   

    /**

     * Login api

     *

     * @return \Illuminate\Http\Response

     */

    public function login(Request $request)

    {
        if(!Auth::attempt($request->only('email','password'))){
            return response([
                'message'=>'Invalid Credentials'
            ],Response::HTTP_UNAUTHORIZED);
            
            $user = Auth::user();

            $token = $user->createToken('token')->plainTextToken;

            $cookie = cookie('jwt', $token, 60*24); //1 day

            return response([
                'message'=>$token,
            ])->withCookie($cookie);
        }

    }

    public function login_admin(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);

            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        }
    }

    public function logout(Request $request)
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message'=> 'Success',
        ])->withCookie($cookie);
    }

    protected function redirectTo()
    {
        return 'http://localhost:4003/';
        // $role = Auth::user()->roles(); 

        // switch ($role) {
        //     case 'Super Administrator':
        //             return 'http://localhost:4003/';
        //         break;
        //     case 'Employee':
        //             return '/projects';
        //         break; 
        //     default:
        //             return '/login'; 
        //         break;
        // }
        // if (auth()->user()->roles == 'Super Administrator') {
        //     return 'http://localhost:4003/';
        // }
        // return 'http://localhost:4002/';
    }

}