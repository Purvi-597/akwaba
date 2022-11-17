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



class FeedbackController extends Controller 
{

    public function index()
    {

        $data['feedback'] = Feedback::orderBy('id','desc')->get();
        return view('admin.feedback',$data);
    }

	
}    

   
