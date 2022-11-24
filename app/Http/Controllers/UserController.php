<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Users;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Lang;





class UserController extends Controller 
{
	public function index()
    {
    
		$data['users'] = Users::where('role','!=','Admin')->orderBy('id','desc')->get();
        return view('admin.users.index',$data);
	}
	public function create()
    {
    	
        return view('admin.users.create');
    }
	public function store(Request $request)
    {
        $verifyemail = Hash::make($request->input('email'));
        $users = new Users();
		$users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
		$users->email = $request->input('email');
		$users->password = Hash::make($request->input('confirmpassword'));
		$users->contact_no = $request->input('contact_no');
        $users->home_address = $request->input('home_address');
        $users->work_address = $request->input('work_address');
        $users->role = 'User';

        $profile_pic = '';
        if ($files = $request->file('profile_pic')) {
                $userPath = public_path().'/uploads/users/';
                if ($userPicture = $request->file('profile_pic')) {
                    $profile_pic = $request->input('first_name').'_'.time().'.'.$userPicture->getClientOriginalExtension();
                    $userPicture->move($userPath, $profile_pic);

                }
        }
        
        $to_email = $request->input('email');
       
        $user_email = base64_encode($request->input('email'));

        $url = URL::to('/').'/verifyemail?token='.$verifyemail.'&email='.$user_email;

         $usercheck = Users::where('email', '=',$request->input('email'))->first();

         if($usercheck == null){
            
        $users->save();        

        // Mail sending code
        $details = array('email' => $users->email, 'password' => $request->input('password'), 'verification_code' => $verifyemail,'url' => $url);

        $mail = Mail::to($to_email)->send(new TestEmail(($details)));
        return redirect()->action('UserController@index')->with('success',Lang::get('language.email_send'));

    }else{
          return redirect()->action('UserController@create')->with('error',Lang::get('language.email_exist'));
       
    }

    }

	public function edit($id)
    {
        $row['users'] = Users::where('id',$id)->first();
  
        return view('admin.users.edit',$row);
    }

	public function update(Request $request, $id)
    {
        if(!empty($request->file('profile_pic'))){
				$destinationPath = public_path().'/uploads/users/';
				if ($cover_detail_image = $request->file('profile_pic')) {
					$cover_detail = $request->input('first_name').'_'.time().'_'.$cover_detail_image->getClientOriginalExtension();
					$cover_detail_image->move($destinationPath, $cover_detail);
				}
		}else{
			$cover_detail = $request->input('old_image0');
		}
            if($request->input('status')){
            $status = 1;
         }else{
            $status = 0;
        }
        
        $create = Users::where('id',$id)->update([
                "first_name" => $request->input('first_name'),
                "last_name" => $request->input('last_name'),
                "email"=>$request->input('email'),
                "contact_no"=>$request->input('contact_no'),
                "home_address" => $request->input('home_address'),
                "work_address" => $request->input('work_address'),
				"profile_pic"=>$cover_detail,
                "status" => $status
            ]);
			
			 return redirect()->action('UserController@index')->with('success',Lang::get('language.user_update'));
	}
    
    public function userimagedelete(Request $request){
            $id = $request->input('id');
            $update = Users::where('id',$id)->update(['profile_pic' => '']);
            if($update){
                echo "delete";
            }else{
                echo "nodelete";
            }
    }

	public function delete(Request  $request){
        $id = $request->input('id');
        $delete = Users::where('id',$id)->delete();
        if($delete)
        {
            echo "delete";
        }
        else
        {
            echo "notdelete";
        }
    
}

    public function users_status(Request $request)
    {
    	$id = $request->input('id');
    	$status = $request->input('status');
    	if($status == 1)
    	{
    		DB::table('users')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('users')->where('id',$id)->update(['status' => 1]);
                return response()->json(['return' => 'Active']);
    	}
    	else
    	{
    		return redirect()->back()
	         		->with('error','Unable to change the status');
    	}
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

    public function verifyemail(Request $request)
    {
    if(!empty($request->input('token')))
      {
        $email = base64_decode($request->input('email'));
        $check = DB::table('users')->where('email',$email)->where('verification_code',$request->input('token'))->get();
        if(!empty($check))
        {
            // DB::enableQueryLog();
            $update = DB::table('users')->where('email',$email)->where('verification_code',$request->input('token'))
                            ->update(['status' => '1', 'is_verified' => '1']);
           // dd(DB::getQueryLog()); die;
            if($update)
            {
                return redirect('login')->with('success',Lang::get('language.email_verify')); 
            }
            else
            {
                 return redirect('login')->with('error',Lang::get('language.email_failed'));
            }
        }
      }
    }

    public function send_mail(Request $request)
    {
        $email = Hash::make($request->input('email'));

        $checkemail = DB::table('users')->where('email',$request->input('email'))->where('status',1)->first();

        if($checkemail){

            $user_email = base64_encode($request->input('email'));
        $url = URL::to('/').'/resetpassword?token='.$email.'&email='.$user_email;
        $data = array('email' => $user_email, 'verification_code' => $email,'url' => $url);
        $to_email = $request->input('email');

        $mail = Mail::to($to_email)->send(new DemoEmail(($data)));

    return redirect()->back()->with('success','Email Sent Successfully');
        
        }else{
             return redirect()->back()->with('error',Lang::get('language.warning'));
        }
        
    }

    public function resetpassword(Request $request)
    {
        if(!empty($request->input('token')))
        {
            $email = base64_decode($request->input('email'));
            $user['user'] = DB::table('users')->where('email',$email)->first();
           
            return view('admin.changepassword',$user);
        }
    }

    public function forgotpasswordupdate(Request $request){
        $email = $request->input('email');
        $confirmpassword = Hash::make($request->input('confirmpassword'));
        $update = DB::table('users')->where('email',$email)->update(['password' => $confirmpassword,'updated_at' => NOW()]);
        if($update)
        {
             return redirect('login')->with('success',Lang::get('language.login_password'));
        }
        else
        {
            return redirect()->back()->with('error',Lang::get('language.reset'));
        }
    }

    public function checkuseremail(Request $request){
       $email =  $request->input('email');

        $users = new UsersModel();
        $usercheck = UsersModel::where('email', '=',$request->input('email'))->first();
        if($usercheck == null){
          return 0;
        }else{
           return 1;
        }

    }

    public function view($id)
    {
        $data['users'] = Users::where('id',$id)->first();
        return view('admin.users.view',$data);
    }

   
}