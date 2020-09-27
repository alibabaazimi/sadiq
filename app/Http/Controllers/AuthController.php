<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use phpseclib\Crypt\Hash;

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
                    'password' => $request->password
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => FacadesHash::make($request->password),
        ]);
    }

    public function logout()
    {
        # code...
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json("Logout Successfully", 200);
    }

    public function currentUser()
    {
        $user = \App\User::where('id', Auth::user()->id)->first();

        // $image = $user->image;

        $id = $user->id;
        $name = $user->name;
        $email = $user->email;
        $avatar = env('APP_URL').'/'.$user->avatar;


        if (!isset($user->image)) {
            // $user['image'] = ['path'=> ''];
            if ($user->socialAccounts->count()) {
                $avatar = $user->socialAccounts->first()->avatar;
            } else {
                $avatar = asset(env('APP_URL').'/profile-default.jpg');
            }
        }

        $acc = ['id' => $id, 'name' => $name, 'email' => $email, 'avatar' => $avatar];
        return ['user' => $acc];
    }
}