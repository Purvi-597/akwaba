<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Feature;
use App\Http\Model\Featureplace;
use Illuminate\Support\Facades\Auth;
use DB;
use session;
use Lang;


class FeatureplaceController extends Controller 
{
	public function index()
    {
        
        
        if(Session::get('locale') == 'fr'){
            $data['feature_list'] = Featureplace::orderBy('id','desc')->get(['title_fr as title','description_fr as description','image','ratings','featured_places_id','status','id']);
        }else{
	        $data['feature_list'] = Featureplace::orderBy('id','desc')->get(['title as title','description as description','image','ratings','featured_places_id','status','id']);
        }

		// $data['feature_list'] = Featureplace::orderBy('id','desc')->get();
        return view('admin.feature_list.index',$data);
	}
	public function create()
    {
    	$data['feature'] = Feature::orderBy('id','desc')->get(['id','title']);
        return view('admin.feature_list.create',$data);
    }
	public function store(Request $request)
    {
        
        $input = $request->all();
        // echo "hiii";
        // print_r($input);exit;
        $image = '';
        if ($files = $request->file('image')) {
            $featurePath = public_path().'/uploads/feature_list/';
            if ($featurePicture = $request->file('image')) {
                $image = time().'_'.$featurePicture->getClientOriginalName();
                $featurePicture->move($featurePath, $image);
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
            'description' => $request->input('description'),
            'description_fr' => $request->input('description_fr'),
            "ratings" => $request->input('ratings'),
            'featured_places_id' =>$request->input('featured_places_id'),
            'status' => $status,
            'image' => $image
        );
        $insert = Featureplace::create($data);
        if($insert){
            return redirect()->action('FeatureplaceController@index')->with('success',Lang::get('language.feature_success'));
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

	public function edit($id)
    {
        $row['feature'] = Feature::orderBy('id','desc')->get(['id','title']);
        $row['feature_list'] = Featureplace::where('id',$id)->first();
        return view('admin.feature_list.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if(!empty($request->file('image'))){
				$destinationPath = public_path().'/uploads/feature_list/';
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
        $create = Featureplace::where('id',$id)->update([

            "title" => $request->input('title'),
            "title_fr" => $request->input('title_fr'),
            "description" => $request->input('description'),
            "description_fr" => $request->input('description_fr'),
            "ratings" => $request->input('ratings'),
            "featured_places_id" => $request->input('featured_places_id'),
			"image"=>$cover_detail,
            "status" => $status
        ]);
		return redirect()->action('FeatureplaceController@index')->with('success',Lang::get('language.feature_update'));

        
	}
    public function featureimagedelete(Request $request){
        $id = $request->input('id');
        $update = Featureplace::where('id',$id)->update(['image' => '']);
        if($update){
             echo "delete";
        }else{
            echo "nodelete";
        }
    }
	public function delete(Request $request){
        $id = $request->id;
        $delete = Featureplace::where('id',$id)->delete();
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
    		DB::table('featured_places_list')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('featured_places_list')->where('id',$id)->update(['status' => 1]);
                return response()->json(['return' => 'Active']);
    	}
    	else
    	{
    		return redirect()->back()
	         		->with('error','Unable to change the status');
    	}
    }

       public function view($id)
    {   if(Session::get('locale') == 'fr'){
        $data['featured_places_list'] = Featureplace::where('id',$id)->first(['title_fr as title','description_fr as description','image','ratings','featured_places_id','status','id']);
    }else{
        $data['featured_places_list'] = Featureplace::where('id',$id)->first(['title as title','description as description','image','ratings','featured_places_id','status','id']);
    }

        $data['featured_places_list'] = Featureplace::where('id',$id)->first();
        return view('admin.feature_list.view',$data);
    }

   
}