<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;



class ApiAuthController extends Controller
{
    //

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }   

    public function handleGoogleCallback()
    {
        try {
  
            $user = Socialite::driver('google')->user();
   
          
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
              
   
                Auth::login($finduser);
  
                return redirect('/home');
                echo "home";
   
            }else{
               
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => "jainil",
                ]);
  
                Auth::login($newUser);
       
                return redirect()->back();
            }
  
        } catch (Exception $e) {
            // return redirect('auth/google');
             dd($e->getMessage());
            echo "catch Error";
        }
    }
    

}
