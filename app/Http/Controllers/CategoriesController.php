<?php
namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\Categories;
use Illuminate\Support\Facades\Auth;
use DB;



class CategoriesController extends Controller 
{
	public function index()
    {
    
		$data['categories'] = Categories::orderBy('id','desc')->get();
        return view('admin.categories.index',$data);
	}
	public function create()
    {
    	
        return view('admin.categories.create');
    }
	public function store(Request $request)
    {
      
        $input = $request->all();
        
        $image = '';
        if ($files = $request->file('image')) {
            $categoriesPath = public_path().'/uploads/categories/';
            if ($categoriesPicture = $request->file('image')) {
                $image = time().'_'.$categoriesPicture->getClientOriginalName().'.'.$categoriesPicture->getClientOriginalExtension();
                $categoriesPicture->move($categoriesPath, $image);
            }
        }

        $data = array(
            'name' => $request->input('name'),
            'status' => $request->input('status'),
            'image' => $image
        );
        $insert = Categories::create($data);
        if($insert){
            return redirect()->back()->with('success','Categories created successfully.');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }

	public function edit($id)
    {
        $row['categories'] = Categories::where('id',$id)->first();
  
        return view('admin.categories.edit',$row);
    }
	public function update(Request $request, $id)
    {
        if(!empty($request->file('image'))){
				$destinationPath = public_path().'/uploads/categories/';
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
        $create = Categories::where('id',$id)->update([
            "name" => $request->input('name'),
			"image"=>$cover_detail,
            "status" => $status
        ]);
		return redirect()->action('CategoriesController@index')->with('success','Categories Updated Successfully');
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
    		DB::table('categories')->where('id',$id)->update(['status' => 0]);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		DB::table('categories')->where('id',$id)->update(['status' => 1]);
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
        $data['categories'] = Categories::where('id',$id)->first();
        return view('admin.categories.view',$data);
    }

   
}