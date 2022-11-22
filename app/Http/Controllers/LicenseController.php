<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\License;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class LicenseController extends Controller 
{
	 public function index()
   
    
    {
        if(Session::get('locale') == 'fr'){
            $data['license'] = License::orderBy('id','desc')->first();
        }else{
	    $data['license'] = License::orderBy('id','desc')->first();
        }
        
        return view('admin.license',$data);
       
	}



	public function edit()
    {
        $row['license'] = License::first();
  
        return view('admin.license');
    }

    public function update(Request $request)
    {
    
        $create = License::where('id',1)->update([

            
            "description" => $request->input('description'),
            "description_fr" => $request->input('description_fr'),
        ]);
		return redirect()->back()->with('success',Lang::get('language.license_update'));

        
	}
   

}    

   
