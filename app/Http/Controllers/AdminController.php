<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getUsers()
    {
        $users = User::paginate(5);
        // $response = [
        //     'pagination' => [
        //         'total' => $users->total(),
        //         'per_page' => $users->perPage(),
        //         'current_page' => $users->currentPage(),
        //         'last_page' => $users->lastPage(),
        //         'from' => $users->firstItem(),
        //         'to' => $users->lastItem()
        //     ],
        //     'data' => $users
        // ];
        // return response()->json($response);
        return $users;
    }
    public function getUser($user)
    {
        $user = \App\User::where('id', $user)->first();

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


        return $user;
    }

    public function deleteUser($user)
    {
        $user = User::find($user);
        $user->delete();
        return true;
    }
}
