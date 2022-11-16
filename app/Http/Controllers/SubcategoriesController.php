<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Categories;
use App\Http\Model\Subcategories;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use Lang;



class SubCategoriesController extends Controller
{
	public function index()
    {
        if(Session::get('locale') == 'fr'){
            $data['subcategories'] = Subcategories::leftjoin('categories','categories.id','=','sub_categories.cat_id')->orderBy('id','desc')->get(['sub_categories.name','sub_categories.display_name_fr as display_name','sub_categories.image','cat_id','sub_categories.status','sub_categories.id','categories.name as category_name']);
        }else{
	    $data['subcategories'] = Subcategories:: leftjoin('categories','categories.id','=','sub_categories.cat_id')->orderBy('id','desc')->get(['sub_categories.name','sub_categories.display_name as display_name','sub_categories.image','cat_id','sub_categories.status','sub_categories.id','categories.name as category_name']);
        }

        $row['categories'] = Categories::orderBy('id','desc')->get();
        return view('admin.subcategories.index',$data);

             
        
	}
	public function create()
    {
    	$data['categories'] = Categories::orderBy('id','desc')->get(['id','name']);
        return view('admin.subcategories.create',$data);
    }
	public function store(Request $request)
    {

        $input = $request->all();

        $image = '';
        if ($files = $request->file('image')) {
            $subcategoriesPath = public_path().'/uploads/subcategories/';
            if ($subcategoriesPicture = $request->file('image')) {
                $image =$subcategoriesPicture->getClientOriginalName();
                $subcategoriesPicture->move($subcategoriesPath, $image);
            }

        }
        $status = 0;
        if($request->input('status')){
            $status = 1;
         }else{
            $status = 0;
        }
        $data = array(
            'cat_id' =>$request->input('cat_id'),
            'name' => $request->input('name'),
            'display_name' => $request->input('display_name'),
            'display_name_fr' => $request->input('display_name_fr'),           
            'status' => $status,
            'image' => $image
        );
        $insert = Subcategories::create($data);
        if($insert){
            return redirect()->back()->with('success',Lang::get('language.sub_add_Success'));
        }else{
            return redirect()->back()->with('error',Lang::get('language.error_msg'));
        }
    }

	public function edit($id)
    {
        if(Session::get('locale') == 'fr'){
            $row['categories'] = Categories::orderBy('id','desc')->get(['display_name_fr as display_name','id']);
        }else{
	    $row['categories'] = Categories::orderBy('id','desc')->get(['display_name as display_name','id']);
        }
        
        $row['subcategories'] = Subcategories::where('id',$id)->first();
        return view('admin.subcategories.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if(!empty($request->file('image'))){
				$destinationPath = public_path().'/uploads/subcategories/';
				if ($cover_detail_image = $request->file('image')) {
					$cover_detail = time().'_'.$cover_detail_image->getClientOriginalName();
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
        $create = Subcategories::where('id',$id)->update([
            "cat_id" => $request->input('cat_id'),
            "name" => $request->input('name'),
            "display_name" => $request->input('display_name'),
            "display_name_fr" => $request->input('display_name_fr'),
			"image"=>$cover_detail,
            "status" => $status
        ]);
		return redirect()->action('SubCategoriesController@index')->with('success',Lang::get('language.sub_update'));

       
	}
    public function subcategoriesimagedelete(Request $request){
        $id = $request->input('id');
        $update = Subcategories::where('id',$id)->update(['image' => '']);
        if($update){
             echo "delete";
        }else{
            echo "nodelete";
        }
    }
	public function delete(Request $request){
        $id = $request->id;
        $delete = Subcategories::where('id',$id)->delete();
        if($delete)
        {
          echo "delete";
        }
        else
        {
            echo "notdelete";
        }

    }

    public function subcategories_status(Request $request)
    {
    	$id = $request->input('id');
    	$status = $request->input('status');
    	if($status == 1)
    	{
    		Subcategories::where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		Subcategories::where('id',$id)->update(['status' => 1]);
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
            $data['subcategories'] = Subcategories::where('id',$id)->first(['display_name_fr as display_name', 'image', 'status','cat_id']);
        }else{
            $data['subcategories'] = Subcategories::where('id',$id)->first(['display_name as display_name', 'image', 'status','cat_id']);
        }

      
        return view('admin.subcategories.view',$data);
    }


}
