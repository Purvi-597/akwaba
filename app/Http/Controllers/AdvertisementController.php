<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Advertisement;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class AdvertisementController extends Controller 
{
	public function index()
   
    
    {
        if(Session::get('locale') == 'fr'){
            $data['advertisement'] = Advertisement::orderBy('id','desc')->get(['title_fr as title','image','link','status','id','date','time']);
        }else{
	    $data['advertisement'] = Advertisement::orderBy('id','desc')->get(['title as title','image','status','link','id','date','time']);
        }
		
        return view('admin.advertisement.index',$data);

        if($advertisement=='en ? fr'){
            @lang('language.title');
        }
        else{
            @lang('language.title_fr');
        }
	}
	public function create()
    {
    	
        return view('admin.advertisement.create');
    }
	public function store(Request $request)
    {
    //   echo "<pre>";
    //   print_r($request->all());die;
        $input = $request->all();
        
        $image = '';
        if ($files = $request->file('image')) {
            $advertisementPath = public_path().'/uploads/advertisement/';
            if ($advertisementPicture = $request->file('image')) {
                $image = $advertisementPicture->getClientOriginalName();
                $advertisementPicture->move($advertisementPath, $image);
            }
        }

        if($request->input('status')){
            $status = 1;
         }else{
            $status = 0;
        }


        $data = array(
            'title' => $request->input('title'),
            'title_fr' => $request->input('title_fr'),
            'link' => $request->input('link'),
            'date' => $request->input('date'),
     
            'time' => $request->input('time'),

            'image' => $image,
            'status' => $status
        );
        
        $insert = Advertisement::create($data);
        if($insert){
            // return redirect()->back()->with('success','Advertisement created successfully.');
            return redirect()->action('AdvertisementController@index')->with('success',Lang::get('language.ad_success'));
        }else{
            return redirect()->back()->with('error',Lang::get('language.error_msg'));
        }
    }

	public function edit($id)
    {
        $row['advertisement'] = Advertisement::where('id',$id)->first();
  
        return view('admin.advertisement.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if(!empty($request->file('image'))){
				$destinationPath = public_path().'/uploads/advertisement/';
				if ($cover_detail_image = $request->file('image')) {
					$cover_detail = $cover_detail_image->getClientOriginalName();
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
        $create = Advertisement::where('id',$id)->update([
            "title" => $request->input('title'),
            "title_fr" => $request->input('title_fr'),
            "link" => $request->input('link'),
            "date" => $request->input('date'),
            "time" => $request->input('time'),
			"image"=>$cover_detail,
            "status" => $status
        ]);
		return redirect()->action('AdvertisementController@index')->with('success',Lang::get('language.ad_update'));
	}
    public function advertisementimagedelete(Request $request){
        $id = $request->input('id');
        $update = Advertisement::where('id',$id)->update(['image' => '']);
        if($update){
             echo "delete";
        }else{
            echo "nodelete";
        }
    }
	public function delete(Request  $request){
        $id = $request->input('id');
        $delete = Advertisement::where('id',$id)->delete();
        if($delete)
        {
            echo "delete";
        }
        else
        {
            echo "notdelete";
        }
    
}

    public function advertisement_status(Request $request)
    {
    	$id = $request->input('id');
    	$status = $request->input('status');
    	if($status == 1)
    	{
    		DB::table('advertisement')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('advertisement')->where('id',$id)->update(['status' => 1]);
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
            $data['advertisement'] = Advertisement::where('id',$id)->first(['title_fr as title', 'image', 'status','date','time']);
        }else{
            $data['advertisement'] = Advertisement::where('id',$id)->first(['title as title', 'image', 'status','date','time']);
        }

        $data['advertisement'] = Advertisement::where('id',$id)->first();
        return view('admin.advertisement.view',$data);
    }

   
}