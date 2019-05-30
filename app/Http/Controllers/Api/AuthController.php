<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register (Request $request) {

//        $validator = Validator::make($request->all(), [
//            'name' => 'required|string|max:15',
//            'email' => 'required|string|email|max:30|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//
//        if ($validator->fails())
//        {
//            return response(['errors'=>$validator->errors()->all()], 422);
//        }
//
//        $request['password']=Hash::make($request['password']);
//        $user = User::create($request->toArray());
//
//        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
//        $response = ['token' => $token];
//
//        return response($response, 200);

        $request->validate([
            'name' => 'required|string|max:15',
            'email' => 'required|string|email|max:30|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

    }

    public function login (Request $request) {

//        $user = User::where('email', $request->email)->first();
//
//        if ($user) {
//
//            if (Hash::check($request->password, $user->password)) {
//                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
//                $response = ['token' => $token];
//                return response($response, 200);
//            } else {
//                $response = "Password missmatch";
//                return response($response, 422);
//            }
//
//        } else {
//            $response = 'User does not exist';
//            return response($response, 422);
//        }
        $http = new \GuzzleHttp\Client;
        try {
            $response = $http->post(config('services.passport.login_endpoint'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                    'username' => $request->username,
                    'password' => $request->password,
                ]
            ]);
            return $response->getBody();
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() === 400) {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            } else if ($e->getCode() === 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }
            return response()->json('Something went wrong on the server.', $e->getCode());
        }

    }

    public function logout (Request $request) {

//        $token = $request->user()->token();
//        $token->revoke();
//
//        $response = 'You have been succesfully logged out!';
//        return response($response, 200);

        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        return response()->json('Logged out successfully', 200);

    }
}
