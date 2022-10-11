<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Model\UsersModel;

class SettingController extends Controller
{
    
    public function index()
    {
    	$data['data'] = DB::table('users')->where('id','=', auth()->id())->leftjoin('state','state.state_id','=','users.state')->leftjoin('city','city.city_id','=','users.city')->first();
    	$data['country'] = DB::table('country')->get();
       
    	return view('admin.settings',$data);
    }

    public function fetchState(Request $request)
    {
        $data['state'] = DB::table('state')->where("country_id",$request->country_id)->get(["state_name", "state_id"]);
        return response()->json($data);
    }

    public function fetchCity(Request $request)
    {
        $data['city'] = DB::table('city')->where("state_id",$request->state_id)->get(["city_name", "city_id"]);
        return response()->json($data);
    }

    public function update(Request $request)
    {
    	
         $row = array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'zipcode' => $request->input('zipcode'),
            'address' => $request->input('address'),
            'updated_at'=>date("d-m-Y H:i:s")
        );
          // DB::enableQueryLog();

        if(!empty($request->file('profile_pic'))){
        $profile_pic = $request->file('profile_pic');
        $profile_pic_path = public_path().'/uploads/users/';
        $profile_image = md5(time().'_'.$profile_pic->getClientOriginalName()).'.'.$profile_pic->getClientOriginalExtension();
        $profile_pic->move($profile_pic_path, $profile_image);
        }else{
            $profile_image = $request->input('profile_hidden');
        }

        $row['profile_image'] = $profile_image;

        if(!empty($request->input('password')) && !empty($request->input('confirm_password'))){
            $password = Hash::make($request->input('confirm_password'));
              $row['password'] = $password;
        }


         $result= UsersModel::where('id',auth()->id())->update($row);
         // dd(DB::getQueryLog()); die;
    	   if($result)
    	   	{
    			return redirect()->back()
	         		   ->with('success','Updated Succesfully!');
    		}
    		else
    		{
    			return redirect()->back()
	         		   ->with('error','Your Profile is up to date!');
    		}
    }
}
