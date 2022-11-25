<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Users;
use Auth;
use Carbon\Carbon;
use Session;
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
            //echo session()->get('locale');die;
        // if(session()->get('locale') == 'en'){
        //     echo "english";
        // }else{
        //     echo "french";
        // }
       
        $data['users'] = Users::where('role','!=','admin')->count();
    
        return view('admin.dashboard.index',$data);
    
    }

    // $currentURL = $request->segment(1);
    // if($currentURL == "en"){
    //  $data['users'] = DB::table('users')->where('deleted_at',0)->where('role','!=','admin')->count();
    // }else{
    //  $data = array();
    
    // }     
   
}