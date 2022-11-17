<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Photos;
use DB;
use Carbon\Carbon;
use Session;
use Lang;
class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Session::get('locale') == 'en'){
        $data['photos'] = Photos::get(['id','title as title','image','address','status','created_at']);
        }else{
            $data['photos'] = Photos::get(['id','title_fr as title','image','address','status','created_at']);
        }
        return view('admin.photos.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //e

        $data['place_name'] = DB::connection('pgsql')->select("select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, name from planet_osm_point where name != ''");
        // echo "<pre>"; print_r(json_decode($data['place_name'][0]->geojson_data)->coordinates);die;
        return view('admin.photos.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // echo "<pre>";
        // print_r($request->all());die;
        $image = '';
        if ($files = $request->file('image')) {
            $image_path = public_path().'/uploads/photos/';
            if ($image_name = $request->file('image')) {
                $image = time().'_'.$image_name->getClientOriginalName();
                $image_name->move($image_path, $image);
            }
        }
        if($request->input('status')){
            $status = '1';
        }else{
            $status = '0';
        }
        $data = array(
            'title' => $request->input('title'),
            'title_fr' => $request->input('title_fr'),
            'image' => $image,
            'status' => $status,
            'address' => $request->input('address'),
            'latitude' => $request->input('latitude'),
            'longtitude' => $request->input('longtitude'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        // echo "<pre>";
        // print_r($data);die;
        $insert = Photos::insert($data);
        if($insert){
            return redirect()->back()->with('success',Lang::get('language.add_photo_success'));
        }else{
            return redirect()->back()->with('error',Lang::get('language.error_msg'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        //
        if(Session::get('locale') == 'en'){
        $data['row'] = Photos::where('id',$id)->first(['id','title as title','image','address','status','created_at','latitude','longtitude']);
        }else{
        $data['row'] = Photos::where('id',$id)->first(['id','title as title','image','address','status','created_at','latitude','longtitude']);
        }
        // echo "<pre>";
        // print_r($data);die;
        return view('admin.photos.view',$data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['place_name'] = DB::connection('pgsql')->select("select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, name from planet_osm_point where name != ''");
        $data['row'] = Photos::where('id',$id)->first();
        // echo "<pre>";
        // print_r($data);die;
        return view('admin.photos.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // echo "<pre>";
        // print_r($request->all());die;
        if ($files = $request->file('image')) {
            $image_path = public_path().'/uploads/photos/';
            if ($image_name = $request->file('image')) {
                $image = time().'_'.$image_name->getClientOriginalName();
                $image_name->move($image_path, $image);
            }
        }else{
            $image = $request->input('old_image0');
        }
        if(!empty($request->input('latitude'))){
            $latitude = $request->input('latitude');
        }else{
            $latitude = $request->input('old_latitude');
        }
        if(!empty($request->input('longtitude'))){
            $longtitude = $request->input('longtitude');
        }else{
            $longtitude = $request->input('old_longtitude');
        }
        if($request->input('status')){
            $status = '1';
        }else{
            $status = '0';
        }
        $data = array(
            'title' => $request->input('title'),
            'title_fr' => $request->input('title_fr'),
            'image' => $image,
            'address' => $request->input('address'),
            'latitude' => $latitude,
            'longtitude' => $longtitude,
            'status' => $status,
            'updated_at' => Carbon::now(),
        );
        // echo "<pre>";
        // print_r($data);die;

        $update = Photos::where('id',$id)->update($data);
        if($update){
            return redirect()->back()->with('success',Lang::get('language.update_photo'));
        }else{
            return redirect()->back()->with('error',Lang::get('language.error_msg'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function status(Request $request){
        $id = $request->input('id');
    	$status = $request->input('status');
    	if($status == 1)
    	{
    		Photos::where('id',$id)->update(['status' => '0']);
                return response()->json(['return' => 'Inactive']);
    	}
    	elseif($status == 0)
    	{
    		Photos::where('id',$id)->update(['status' => '1']);
                return response()->json(['return' => 'Active']);
    	}
    	else
    	{
            return response()->json(['return' => 'error']);
    	}


    }
    public function delete(Request $request){

        $id = $request->input('id');
        $delete = Photos::where('id',$id)->delete();
        if($delete)
        {
            echo "delete";
        }
        else
        {
            echo "notdelete";
        }


    }
}
