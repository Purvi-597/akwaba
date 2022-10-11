<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\UsersModel;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;





class UserController extends Controller 
{
	public function index()
    {
    
		$data['users'] = UsersModel::where('is_deleted',0)->where('user_type','!=','admin')->where('is_deleted',0)->orderBy('id','desc')->get();
        return view('admin.users.index',$data);
	}
	public function create()
    {
    	
        return view('admin.users.create');
    }
	public function store(Request $request)
    {


        $verifyemail = Hash::make($request->input('email'));
        $users = new UsersModel();
		$users->name = $request->input('name');
		$users->email = $request->input('email');
		$users->password = Hash::make($request->input('confirmpassword'));
		$users->phone_no = $request->input('phoneno');



        $profile_image = '';
        if ($files = $request->file('images0')) {
                $userPath = public_path().'/uploads/users/';
                if ($userPicture = $request->file('images0')) {
                    $profile_image = md5(time().'_'.$userPicture->getClientOriginalName()).'.'.$userPicture->getClientOriginalExtension();
                    $userPicture->move($userPath, $profile_image);

                        $users->profile_image = $profile_image;
                }
        }


	
         $users->verification_code = $verifyemail;
        $to_email = $request->input('email');
       
        $user_email = base64_encode($request->input('email'));

        $url = URL::to('/').'/verifyemail?token='.$verifyemail.'&email='.$user_email;

         $usercheck = UsersModel::where('email', '=',$request->input('email'))->first();

         if($usercheck == null){
            
        $users->save();        

        // Mail sending code
        $details = array('email' => $users->email, 'password' => $request->input('password'), 'verification_code' => $verifyemail,'url' => $url);

        $mail = Mail::to($to_email)->send(new TestEmail(($details)));
        return redirect()->action('UserController@index')->with('success','Email Sent Successfully');

    }else{
          return redirect()->action('UserController@create')->with('error','Email Already Exist');
       
    }

    }
	public function edit($id)
    {
        $row['users'] = UsersModel::where('id',$id)->first();
  
        return view('admin.users.edit',$row);
    }
	public function update(Request $request, $id)
    {

        
        
		if(!empty($request->file('images0'))){
				$destinationPath = public_path().'/uploads/users/';
				if ($cover_detail_image = $request->file('images0')) {
					$cover_detail = md5(time().'_'.$cover_detail_image->getClientOriginalName()).'.'.$cover_detail_image->getClientOriginalExtension();
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


        	$create = UsersModel::where('id',$id)->update([
                "name" => $request->input('name'),
                "email"=>$request->input('email'),
                "phone_no"=>$request->input('phoneno'),
				"profile_image"=>$cover_detail,
                "status" => $status
            ]);
			
			 return redirect()->action('UserController@index')->with('success','User Updated Successfully');
	}
    public function userimagedelete(Request $request){
            $id = $request->input('id');
            $update = UsersModel::where('id',$id)->update(['profile_image' => '']);
            if($update){
                echo "delete";
            }else{
                echo "nodelete";
            }
    }
	public function delete(Request  $request){
            $id = $request->input('id');
            $delete = UsersModel::where('id',$id)->update(['is_deleted' => '1']);
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
    		DB::table('users')->where('id',$id)->update(['status' => 0);
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
                return redirect('login')->with('success','Email Verified Successfully'); 
            }
            else
            {
                 return redirect('login')->with('error','Email Verification Failed!');
            }
        }
      }
    }

    public function send_mail(Request $request)
    {
        $email = Hash::make($request->input('email'));

        $checkemail = DB::table('users')->where('email',$request->input('email'))->where('is_deleted',0)->first();

        if($checkemail){

            $user_email = base64_encode($request->input('email'));
        $url = URL::to('/').'/resetpassword?token='.$email.'&email='.$user_email;
        $data = array('email' => $user_email, 'verification_code' => $email,'url' => $url);
        $to_email = $request->input('email');

        $mail = Mail::to($to_email)->send(new DemoEmail(($data)));
            

    return redirect()->back()->with('success','Email Sent Successfully');
        
        }else{
             return redirect()->back()->with('error','Email is not registered or deleted.please contact to admin.');
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
             return redirect('login')->with('success','Login with new password');
        }
        else
        {
            return redirect()->back()->with('error','Unable to reset password');
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
        $data['users'] = UsersModel::where('id',$id)->first();
        return view('admin.users.view',$data);
    }

   
}