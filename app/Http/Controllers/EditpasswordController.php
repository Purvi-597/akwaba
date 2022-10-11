<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Model\UsersModel;
use Illuminate\Http\Request;

class EditpasswordController extends Controller
{
    public function index()
    {
    	return view ('admin.editpassword.index');
    }


    public function checkoldpassword(Request $request){
          $users = DB::table('users')->where('id', auth()->id())->first();
          $oldpassword = $request->input('password');
          $hashedpassword = $users->password;
         if(Hash::check($oldpassword, $hashedpassword))
         {
          return 0;
         }
         else
         {
           return 1;
         }
    }

    public function edit(Request $request)
    {
    	$users = DB::table('users')->where('id', auth()->id())->get();
    	$oldpassword = $request->input('oldpassword');
    	$users = json_decode($users,true);
    	$hashedpassword = $users[0]['password'];
    	if(Hash::check($oldpassword, $hashedpassword))
    	{
    		$password =  Hash::make($request->input('confirmpassword'));
	    	$update = DB::table('users')->where('id', auth()->id())->update(['password' => $password]);
	    	if($update)
	    	{
	    		return redirect('/');
	    	}
	    }
	    else
	    {
	    	 return redirect()->back()
        		->with('error','Old password is not matching!');
	    }
	}
}
