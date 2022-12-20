<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Model\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Places extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Metro()
    {
        $metroResult = DB::connection('pgsql')->select("select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_line where railway='subway' order by way");
        // $metroResult = pg_query($db, "select ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_line where railway='subway'");
        // $metroData= [];
        // while($row = pg_fetch_row($metroResult)) {
        //     array_push($metroData, json_decode($row[0], true));
        // }
        $main = array();
        $mainmaitro = array();
        for ($i = 0; $i < count($metroResult); $i++) {
            $main[] = array(
                'cordinates' => json_decode($metroResult[$i]->geojson_data)
            );
        }
        for ($j = 0; $j < count($main); $j++) {
            $mainmaitro[] = array(
                'metro'.$j => $main[$j]['cordinates']->coordinates
            );
        }
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'coordinates' => $mainmaitro]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Tourism()
    {
        $tourismResult = DB::connection('pgsql')->select("select  osm_id as osm_id,name as name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where tourism='attraction' and name != ''");
        $tour = array();
        $maintour = array();
        for ($i = 0; $i < count($tourismResult); $i++) {
            $tour[] = array(
                'osm_id' => $tourismResult[$i]->osm_id,
                'name' => $tourismResult[$i]->name,
                'cordinates' => json_decode($tourismResult[$i]->geojson_data)
            );
        }
        for ($j = 0; $j < count($tour); $j++) {
            $maintour[] = array(
                'osm_id' => $tour[$j]['osm_id'],
                'name' => $tour[$j]['name'],
                'cordinates' => $tour[$j]['cordinates']->coordinates
            );
        }

        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $maintour]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Parking()
    {
        $parkingResult = DB::connection('pgsql')->select("select osm_id as osm_id,name as name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data from planet_osm_point where amenity='parking' and name != ''");
        $tour = array();
        $maintour = array();
        for ($i = 0; $i < count($parkingResult); $i++) {
            $tour[] = array(
                'osm_id' => $parkingResult[$i]->osm_id,
                'name' => $parkingResult[$i]->name,
                'cordinates' => json_decode($parkingResult[$i]->geojson_data)
            );
        }
        for ($j = 0; $j < count($tour); $j++) {
            $maintour[] = array(
                'osm_id' => $tour[$j]['osm_id'],
                'name' => $tour[$j]['name'],
                'cordinates' => $tour[$j]['cordinates']->coordinates
            );
        }
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $maintour]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Photos()
    {
        $photos = Photos::where('status', '1')->get();

        if ($photos) {
            $touristplaceData = [];
            $touristLatLong = [];
            foreach ($photos as $row) {
                $touristplaceData[] = $row;
                $coordinates[] = array('0' => $row['longtitude'], '1' => $row['latitude'], '2' => $row['image']);
                $touristLatLong[] = array('type' => 'Point', 'coordinates' => $coordinates);
            }
        }
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $coordinates]);
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
}
