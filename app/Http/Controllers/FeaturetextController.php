<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Featuretext;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class FeaturetextController extends Controller 
{
	public function index()

    {
    
            
        if(Session::get('locale') == 'fr'){
        $data['featuretext'] = Featuretext::orderBy('id','desc')->get(['title_fr as title','description_fr as description','status','id']);
    }else{
        $data['featuretext'] = Featuretext::orderBy('id','desc')->get(['title as title','description as description','status','id']);
    }
    
		// $data['featuretext'] = Featuretext::orderBy('id','desc')->get();
        return view('admin.featuretext.index',$data);
	}
	public function create()
    {
    	
        return view('admin.featuretext.create');
    }
	public function store(Request $request)
{
      
        $input = $request->all();

        if($request->input('status')){
            $status = 1;
         }else{
            $status = 0;
        }

        $data = array(

            'title' => $request->input('title'),
            'title_fr' => $request->input('title_fr'),
            'description' => $request->input('description'),
            'description_fr' => $request->input('description_fr'),
            'status' => $status

        );
        $insert = Featuretext::create($data);
        if($insert){
            return redirect()->action('FeaturetextController@index')->with('success',Lang::get('language.text_success'));
        }else{
            return redirect()->back()->with('error',Lang::get('language.error_msg'));
        }
    }

	public function edit($id)
    {
        $row['featuretext'] = Featuretext::where('id',$id)->first();
  
        return view('admin.featuretext.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if($request->input('status')){
            $status = 1;
         }else{
            $status = 0;
        }
        $create = Featuretext::where('id',$id)->update([

            "title" => $request->input('title'),
            "title_fr" => $request->input('title_fr'),
            "description" => $request->input('description'),
            "description_fr" => $request->input('description_fr'),
            "status" => $status
        ]);
		return redirect()->action('FeaturetextController@index')->with('success',Lang::get('language.text_update'));

        
	}
    
	public function delete(Request $request){
        $id = $request->id;
        $delete = Featuretext::where('id',$id)->delete();
        if($delete)
        {
          echo "delete";
        }
        else
        {
            echo "notdelete";
        }
        
    }

    public function feature_status(Request $request)
    {
    	$id = $request->input('id');
    	$status = $request->input('status');
    	if($status == 1)
    	{
    		DB::table('featured_text')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('featured_text')->where('id',$id)->update(['status' => 1]);
                return response()->json(['return' => 'Active']);
    	}
    	else
    	{
    		return redirect()->back()
	         		->with('error','Unable to change the status');
    	}
    }

       public function view($id)
    {

        
        if(Session::get('locale') == 'fr'){
            $data['featuretext'] = Featuretext::orderBy('id','desc')->get(['title_fr as title','description_fr as description','status','id']);
        }else{
	        $data['featuretext'] = Featuretext::orderBy('id','desc')->get(['title as title','description as description','status','id']);
        }
        $data['featuretext'] = Featuretext::where('id',$id)->first();
        return view('admin.featuretext.view',$data);
    }

   
}