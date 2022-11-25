<?php
namespace App\Http\Controllers;
use App\Http\Model\Feedback;
use DataTables;
use DB;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lang;
use Session;
use Mail;   


class FeedbackController extends Controller 
{

    public function index()
    {
        $data['feedback'] = Feedback::orderBy('id','desc')->get();
        return view('admin.feedback',$data);
    }


    public function feedbackemail(Request $request){
        $reply_id =  $request->input('reply_id');
        $checkemail = DB::table('feedback')->where('id',$reply_id)->first();
        $message = $request->input('message');
        if($checkemail){
        $data = array('messages' => $message);
        $to_email = $checkemail->email;
        $to_name = "Akwabamaps";
        // $mail = Mail::to('$to_email')->send(new DemoEmail(($data)));
        $mail = Mail::send('admin.feedback_mail',$data, function($message) use($to_name,$to_email){
            $message->to($to_email)->subject('Akwabamaps');
        });
        echo "success";die;
     }
    }    
    
}    