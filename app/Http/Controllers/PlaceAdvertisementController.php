<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Model\PlaceAdvertisement;
use Illuminate\Support\Facades\Auth;
use DB;

class PlaceAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['place_advertisement'] = PlaceAdvertisement::orderBy('id','desc')->get();
        return view('admin.placeAdvertisement.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['place_name'] =  DB::connection('pgsql')->select("select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, name, osm_id from planet_osm_point where name != ''");
        return view('admin.placeAdvertisement.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        $image = '';
        if ($files = $request->file('image')) {
            $placeAdvertisementPath = public_path().'/uploads/place_advertisement/';
            if ($placeAdvertisementPicture = $request->file('image')) {
                $image = time().'_'.$placeAdvertisementPicture->getClientOriginalName().'.'.$placeAdvertisementPicture->getClientOriginalExtension();
                $placeAdvertisementPicture->move($placeAdvertisementPath, $image);
            }
        }
        if($request->input('status')){
            $status = 1;
        }else{
            $status = 0;
        }
        $data = array(
            'place_name' => $request->input('place_title'),
            'image' => $image,
            'type' => $request->input('type'),
            'external_link' => $request->input('link'),
            'osm_id' => $request->input('place_name'),
            'status' => $status,
        );
        $insert = PlaceAdvertisement::create($data);
        if($insert){
            return redirect()->back()->with('success','Place advertisement created successfully.');
        }else{
            return redirect()->back()->with('error','Something went wrong');
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
        $data['place_advertisement'] = PlaceAdvertisement::where('id',$id)->first();
        return view('admin.placeAdvertisement.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row['placeAdvertisement'] = PlaceAdvertisement::where('id',$id)->first();
        $row['place_name'] =  DB::connection('pgsql')->select("select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, name, osm_id from planet_osm_point where name != ''");
        return view('admin.placeAdvertisement.edit',$row);
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
        if($request->input('status')){
            $status = 1;
        }else{
            $status = 0;
        }
        $updateData = PlaceAdvertisement::where('id',$id)->update([
            'place_name' => $request->input('place_title'),
            'type' => $request->input('type'),
            'external_link' => $request->input('link'),
            'osm_id' => $request->input('place_name'),
            'status' => $status
        ]);
        if(!empty($request->file('image'))){
            if ($files = $request->file('image')) {
                $placeAdvertisementPath = public_path().'/uploads/place_advertisement/';
                if ($placeAdvertisementPicture = $request->file('image')) {
                    $image = time().'_'.$placeAdvertisementPicture->getClientOriginalName();
                    $placeAdvertisementPicture->move($placeAdvertisementPath, $image);
                }
            }
            $updateImage = PlaceAdvertisement::where('id',$id)->update(['image' => $image]);
        }
        return redirect()->action('PlaceAdvertisementController@index')->with('success','Place Advertisement Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $delete = PlaceAdvertisement::where('id',$id)->delete();
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
