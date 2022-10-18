<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Feature;
use Illuminate\Support\Facades\Auth;
use DB;



class FeatureController extends Controller 
{
	public function index()
    {
    
		$data['feature'] = Feature::orderBy('id','desc')->get();
        return view('admin.feature.index',$data);
	}
	public function create()
    {
    	
        return view('admin.feature.create');
    }
	public function store(Request $request)
    {
      
        $input = $request->all();
        
        $image = '';
        if ($files = $request->file('image')) {
            $featurePath = public_path().'/uploads/feature/';
            if ($featurePicture = $request->file('image')) {
                $image = time().'_'.$featurePicture->getClientOriginalName().'.'.$featurePicture->getClientOriginalExtension();
                $featurePicture->move($featurePath, $image);
            }
        }

        $data = array(

            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'image' => $image
        );
        $insert = Feature::create($data);
        if($insert){
            return redirect()->back()->with('success','feature created successfully.');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

	public function edit($id)
    {
        $row['feature'] = Feature::where('id',$id)->first();
  
        return view('admin.feature.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if(!empty($request->file('image'))){
				$destinationPath = public_path().'/uploads/feature/';
				if ($cover_detail_image = $request->file('image')) {
					$cover_detail = time().'_'.$cover_detail_image->getClientOriginalName().'.'.$cover_detail_image->getClientOriginalExtension();
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
        $create = Feature::where('id',$id)->update([

            "title" => $request->input('title'),
            "description" => $request->input('description'),
			"image"=>$cover_detail,
            "status" => $status
        ]);
		return redirect()->action('FeatureController@index')->with('success','feature Updated Successfully');

        
	}
    public function featureimagedelete(Request $request){
        $id = $request->input('id');
        $update = Feature::where('id',$id)->update(['image' => '']);
        if($update){
             echo "delete";
        }else{
            echo "nodelete";
        }
    }
	public function delete(Request $request){
        $id = $request->id;
        $delete = Feature::where('id',$id)->delete();
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
    		DB::table('feature')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('feature')->where('id',$id)->update(['status' => 1]);
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
        $data['feature'] = Feature::where('id',$id)->first();
        return view('admin.feature.view',$data);
    }

   
}