<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Model\UsersModel;
use Auth;
use Exception;
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
     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }   

    public function handleGoogleCallback()
    {
        try {
  
            $user = Socialite::driver('google')->user();
   
            $finduser = UsersModel::where('google_id', $user->id)->first();

            if($finduser){              

                Auth::login($finduser);
  
                return redirect('/'); 
   
            }else{
               
       
        $users = new UsersModel();

        $users->firstname = $user->name;
        $users->email = $user->email;
        $users->google_id =  $user->id;

        $users->save(); 
  
               Auth::login($users, true);
       
                 return redirect('/'); 
            }
  
        } catch (Exception $e) {
            // return redirect('auth/google');
             dd($e->getMessage());
            echo "catch Error";
        }
    }
     public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin()
    {
        // echo "hii";die;
         $users = new UsersModel();

            $user = Socialite::driver('facebook')->stateless()->user();
            $facebookId = UsersModel::where('facebook_id', $user->id)->first();
           
                    if($facebookId){
            Auth::login($facebookId, true);
               return redirect('/'); 
            }else{
                $users = new UsersModel();

                 $users->firstname = $user->name;
                 $users->email = $user->email;
                 $users->facebook_id = $user->id;
                 $users->save(); 
                 Auth::login($users, true);  
                return redirect('/'); 
        }
    }
}
