<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class SocialController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {
        try{
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);

                return redirect()->route('home');
            }
            else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' =>$user->id,
                    'password' => encrypt('user'),
                ]);

                FacadesAuth::login($createUser);
                return redirect()->route('home');
            }
        }
        catch(Exception $exception){
            dd($exception->getMessage());
        }
    }
}

?>