<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class ChangepasswordController extends Controller
{
    public function index()
    {
		 return view('admin.changepassword.index');
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
	    		return redirect('index');
	    	}
	    }
	    else
	    {
	    	 return redirect()->back()
        		->with('error','Old password is not matching!');
	    }
	}
}
