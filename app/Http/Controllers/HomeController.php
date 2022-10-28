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
            
       
        $data['users'] = DB::table('users')->where('deleted_at',0)->where('role','!=','admin')->count();
    
        return view('admin.dashboard.index',$data);
    
    }

    // $currentURL = $request->segment(1);
    // if($currentURL == "en"){
    //  $data['users'] = DB::table('users')->where('deleted_at',0)->where('role','!=','admin')->count();
    // }else{
    //  $data = array();
    
    // }     
   
}