<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use App\Users; 
use App\Tempuser; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use DB;

@session_start();

class SkoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return view('pages-404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'test here';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
	public function sendmail(Request $request){
		
		$input = $request->all();
		$row = DB::table('users')
					->where('email',$input['email'])
					->get();
		if(count($row)>0){
			$temp_pass = base64_encode($row[0]->id);
			$_SESSION['temp'] = $temp_pass;
			DB::update('update users set remember_token = "'.$temp_pass.'" where email = "'.$input['email'].'"');
			$data = array("name"=>"Darshan", "body"=>"Reset Password");
			$to_name = "TIEC";
			$to_email = $input['email'];
			Mail::send('admin.mail',$data, function($message) use($to_name,$to_email){
			$message->to($to_email)->subject('TIEC');
				
		
		});
			
			echo "true";
		}
	}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forgotpass(Request $request)
    {
	
       $input = $request->all();
       $id = $input['id'];
	   $userpassword =  Hash::make($input['userpassword']);
	   $row = array(
				'password' => $userpassword
			); 
	    $sql= DB::table('users')->where('id', '=', $id)->update($row);
	    if($sql){
			echo "true";
		}else{
			echo "false";
		}
    }
    public function verifypass(Request $request){
		$input = $request->all();
		$id = $input['id'];
	    
	  
	
				$row = array(
						'email_verified_at' => date("Y-m-d H:i:s")
					); 
				$sql= DB::table('users')->where('id', '=', $id)->update($row);
				if($sql){
					echo "true";
				}else{
					echo "false";
				}
	
	}
	
/*	public function tempregister($id) 
    { 
	   
		$sql =  DB::table('tempuser')->where('id', '=', $id)->get();
		
		$sql1 =  DB::table('users')->where('email', '=', $sql[0]->email)->where('mobile', '=', $sql[0]->mobile)->get();
		
		if(count($sql1) == 0){
								
					$users = new Users();
                    $users->name = $sql[0]->name;
					$users->email = $sql[0]->email;
					$users->email_verified_at = NULL;
					$users->password = $sql[0]->password;
					$users->mobile = $sql[0]->mobile;
					$users->state = "";
					$users->city = "";
					$users->profile_picture = "";
					$users->profile_picture_path = "";
					$users->verification_code = $sql[0]->verification_code;
					$users->device_type = $sql[0]->device_type;
					$users->device_token = $sql[0]->device_token;
					$users->remember_token = "";
					$users->created_at = date("Y-m-d H:i:s");
					$users->updated_at = date("Y-m-d H:i:s");
					$users->save();	
					$userid = $users->id; 
					if($users->save()){
						return $userid;
					}else{
						return 0;
					}						
					
		}
			
		
    }*/	

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function live()
    {
        return "";
    }
}