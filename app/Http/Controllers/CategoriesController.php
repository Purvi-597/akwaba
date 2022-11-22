<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Categories;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;
use Session;
use Lang;


class CategoriesController extends Controller
{
	public function index()
    {
        if(Session::get('locale') == 'fr'){
            $data['categories'] = Categories::orderBy('id','desc')->get(['display_name_fr as display_name','image','status','id']);
        }else{
	    $data['categories'] = Categories::orderBy('id','desc')->get(['display_name as display_name','image','status','id']);
        }
        return view('admin.categories.index',$data);
	}
	public function create()
    {

        return view('admin.categories.create');
    }
	public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());die;
        $input = $request->all();
        $status = 0;
        if($request->status){
            $status  = 1;
        }else{
            $status = 0;
        }
        $image = '';
        if ($files = $request->file('image')) {
            $categoriesPath = public_path().'/uploads/categories/';
            if ($categoriesPicture = $request->file('image')) {
                $image = time().'_'.$categoriesPicture->getClientOriginalName();
                $categoriesPicture->move($categoriesPath, $image);
            }
        }
        $data = array(
            'name' => $request->input('name'),
            // 'name_fr' => $request->input('name_fr'),
            'display_name' => $request->input('display_name'),
            'display_name_fr' => $request->input('display_name_fr'),
            'status' =>$status,
            'image' => $image,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        $insert = Categories::create($data);
        if($insert){
            return redirect()->back()->with('success',Lang::get('language.cat_add_success'));
        }else{
            return redirect()->back()->with('error',Lang::get('language.error_msg'));
        }
    }

	public function edit($id)
    {
        $row['categories'] = Categories::where('id',$id)->first();
        // echo "<pre>";
        // print_r($row);die;

        return view('admin.categories.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if(!empty($request->file('image'))){
				$destinationPath = public_path().'/uploads/categories/';
				if ($cover_detail_image = $request->file('image')) {
					$cover_detail =$cover_detail_image->getClientOriginalName();
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
        $create = Categories::where('id',$id)->update([
            "name" => $request->input('name'),
            // "name_fr" => $request->input('name_fr'),
            'display_name' => $request->input('display_name'),
            'display_name_fr' => $request->input('display_name_fr'),
			"image"=>$cover_detail,
            "status" => $status,
            'updated_at' => Carbon::now()
        ]);
		return redirect()->action('CategoriesController@index')->with('success',Lang::get('language.cat_update'));
	}
    public function categoriesimagedelete(Request $request){
        $id = $request->input('id');
        $update = Categories::where('id',$id)->update(['image' => '']);
        if($update){
             echo "delete";
        }else{
            echo "nodelete";
        }
    }
	public function delete(Request $request){
        $id = $request->id;
        $delete = Categories::where('id',$id)->delete();
        if($delete)
        {
          echo "delete";
        }
        else
        {
            echo "notdelete";
        }

    }

    public function categories_status(Request $request)
    {
    	$id = $request->input('id');
    	$status = $request->input('status');
    	if($status == 1)
    	{
    		Categories::where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		Categories::where('id',$id)->update(['status' => 1]);
                return response()->json(['return' => 'Active']);
    	}
    	else
    	{
            return response()->json(['return' => 'error']);
    	}
    }

       public function view($id)
    {

        if(Session::get('locale') == 'fr'){
            $data['categories'] = Categories::where('id',$id)->first(['display_name_fr as display_name', 'image', 'status']);
        }else{
            $data['categories'] = Categories::where('id',$id)->first(['display_name as display_name', 'image', 'status']);
        }
        
        return view('admin.categories.view',$data);
    }


}
