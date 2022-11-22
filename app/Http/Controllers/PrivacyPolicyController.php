<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Privacy_Policy;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class PrivacyPolicyController extends Controller 
{
	 public function index()
   
    
    {
        if(Session::get('locale') == 'fr'){
            $data['privacy_policy'] = Privacy_Policy::orderBy('id','desc')->first();
        }else{
	    $data['privacy_policy'] = Privacy_Policy::orderBy('id','desc')->first();
        }
        // echo "<pre>";
        // print_r($data['privacy_policy']->description);die;
        return view('admin.privacy_policy',$data);
       
	}

	public function edit()
    {
        $row['privacy_policy'] = Privacy_Policy::first();
  
        return view('admin.privacy_policy');
    }

    public function update(Request $request)
    {
    
        $create = Privacy_Policy::where('id',1)->update([

            
            "description" => $request->input('description'),
            "description_fr" => $request->input('description_fr'),
        ]);
		return redirect()->back()->with('success',Lang::get('language.privacy_update'));

        
	}
   

}    

   
