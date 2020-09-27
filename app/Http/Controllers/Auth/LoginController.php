<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\SocialAccount;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Str;
use App\SocialIdentity;
use App\User;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        if (!$user->token) {
            dd('Failed');
        }

        $appUser = User::whereEmail($user->email)->first();

        if (!$appUser) {
            // create a new user
            $appUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => Str::random(7),
            ]);
        } else {
            // retrieve it
            $socialAccount = $appUser->socialAccounts->where('provider', $provider)->first();

            if (!$socialAccount) {
                $socialAccount = SocialAccount::create([
                    'provider' => $provider,
                    'avatar' => $user->avatar,
                    'provider_user_id' => $user->getId(),
                    'user_id' => $appUser->id,
                ]);
            }
        }
        $passportToken = $appUser->createToken('Login Token')->accessToken;

        return view('social_callback', compact('passportToken'));
    }


    public function findOrCreateUser($providerUser, $provider)
    {
        $account = SocialIdentity::whereProviderName($provider)
                   ->whereProviderId($providerUser->getId())
                   ->first();

        if ($account) {
            return $user;
        // return $account->user;
        } else {
            $user = User::whereEmail($providerUser->getEmail())->first();

            if (! $user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name'  => $providerUser->getName(),
                ]);
            }

            $user->identities()->create([
                'provider_id'   => $providerUser->getId(),
                'provider_name' => $provider,
            ]);
            return $user;
        }
    }
}
