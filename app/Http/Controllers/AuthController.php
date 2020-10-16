<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $http = new \GuzzleHttp\Client(['verify' => false ]);
        
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
            if ($e->getCode() == 400) {
                return response()->json('Invalid Request. Please enter username and password', $e->getCode());
            } elseif ($e->getCode() == 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }

            return response()->json('Something went wrong on the server', $e->getCode());
        }
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return $validator->messages();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken('Login Token')->accessToken;
        $user->profileImage = $user->avatar;

        return ['user' => $user, 'access_token' => $token];
    }

    public function logout()
    {
        # code...
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json("Logout Successfully", 200);
    }

    public function getUser()
    {
        $user = \App\User::where('id', Auth::user()->id)->first();

        // $image = $user->image;

        $user->profileImage = asset(env('APP_URL').'/profile-default.jpg');


        if (isset($user->image)) {
            $user->profileImage = asset(env('APP_URL').'/'. $user->image->path);
        } else {
            // $user['image'] = ['path'=> ''];
            if ($user->socialAccounts->count()) {
                $user->profileImage= $user->socialAccounts->first()->avatar;
            }
        }


        return ['user' => $user];
    }
}
