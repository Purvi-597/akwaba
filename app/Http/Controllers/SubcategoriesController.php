<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Categories;
use App\Http\Model\Subcategories;
use Illuminate\Support\Facades\Auth;
use DB;



class SubCategoriesController extends Controller 
{
	public function index()
    {
    
		$data['subcategories'] = Subcategories::orderBy('id','desc')->get();
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
                $image = time().'_'.$subcategoriesPicture->getClientOriginalName().'.'.$subcategoriesPicture->getClientOriginalExtension();
                $subcategoriesPicture->move($subcategoriesPath, $image);
            }
        }

        $data = array(
            'cat_id' =>$request->input('cat_id'),
            'name' => $request->input('name'),
            'status' => $request->input('status'),
            'image' => $image
        );
        $insert = Subcategories::create($data);
        if($insert){
            return redirect()->back()->with('success','Subcategories created successfully.');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

	public function edit($id)
    {   
        $row['categories'] = Categories::orderBy('id','desc')->get(['id','name']);
        $row['subcategories'] = Subcategories::where('id',$id)->first();
        return view('admin.subcategories.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if(!empty($request->file('image'))){
				$destinationPath = public_path().'/uploads/subcategories/';
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
        $create = Subcategories::where('id',$id)->update([
            "cat_id" => $request->input('cat_id'),
            "name" => $request->input('name'),
			"image"=>$cover_detail,
            "status" => $status
        ]);
		return redirect()->action('SubCategoriesController@index')->with('success','subcategories Updated Successfully');

        // return redirect()->action('CategoriesController@index')->with('success','Categories Updated Successfully');
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
    		DB::table('subcategories')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('categsubcategoriesories')->where('id',$id)->update(['status' => 1]);
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
        $data['subcategories'] = Subcategories::where('id',$id)->first();
        return view('admin.subcategories.view',$data);
    }

   
}