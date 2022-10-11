<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
		
         $this->middleware('auth');
    }

    public function root(Request $request)
    {
            
        $data['users'] = DB::table('users')->where('is_deleted',0)->where('user_type','!=','admin')->count();
    
        return view('admin.dashboard.index',$data);
    
    }
   
}