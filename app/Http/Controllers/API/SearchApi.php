<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Model\Categories;
use App\Http\Model\Subcategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->cat_id) {
            $id = $request->cat_id;
            $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
            if ($request->subcatid) {

                if ($request->facilities) {
                    $subcatid = $request->subcatid;
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();

                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $values = implode("','", $valuesarr);
                        $filter = $request->facilities;
                        $nearby = DB::connection('pgsql')->select("SELECT 
                    tags->'opening_hours' as opening_hours,  
                    tags->'cuisine' as cuisine,  
                    tags->'website' as website,  
                    tags->'addr:city' as city,  
                    tags->'addr:street' as street,
                    tags->'internet_access' as internet_access,
                    tags->'outdoor_seating' as outdoor_seating,
                    tags->'internet_access:fee' as internet_access_fee,
                    tags->'description' as description,
                    tags->'smoking' as smoking,
                    tags->'delivery' as delivery,
                    tags->'email' as email,
                    tags->'cuisine:ja' as cuisine_ja,
                    tags->'name:az' as az_name,
                    tags->'addr:postcode' as postcode,
                    tags->'facebook' as facebook,
                    tags->'addr:country' as country,
                    tags->'addr:district' as district,
                    tags->'contact:phone' as contact_phone,
                    tags->'contact:instagram' as instagram,
                    tags->'operator' as operator,
                    tags->'diet:vegetarian' as vegetarian,
                    tags->'name:ar' as ar_name,
                    tags->'townhall:type' as townhall,
                    tags->'designation' as designation,
                    tags->'name:es' as es_name,
                    tags->'capacity' as capacity,
                    tags->'name:tr' as tr_name,
                    tags->'contact:facebook' as contact_facebook,
                    tags->'reservation' as reservation,
                    tags->'instagram' as instagram,
                    tags->'takeaway' as takeaway,
                    tags->'url' as url,
                    tags->'level' as level,
                    tags->'toilets' as toilets,
                    tags->'cuisine_1' as cuisine_1,
                    tags->'cuisine_2' as cuisine_2,
                    tags->'brand' as brand,
                    tags->'contact:email' as contact_email,
                    tags->'brand:wikidata' as wikidata,
                    tags->'brand:wikipedia' as wikipedia,
                    tags->'drive_in' as drive_in,
                    tags->'wheelchair' as wheelchair,
                    tags->'microbrewery' as microbrewery,
                    tags->'opening_hours:covid19' as opening_hours_covid19,
                    tags->'diet:vegan' as diet_vegan,
                    tags->'image' as image,
                    tags->'diet:meat' as meat,
                    tags->'ref:vatin' as vatin,
                    tags->'phone_1' as phone_1,
                    ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                    osm_id as osmid,
                    $fieldName as cat_type
                    from  public.planet_osm_point 
                    WHERE " . $fieldName . " IN ('" . $values . "') and tags->'" . $filter . "' !='' 
                    order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
                    limit 15");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                } else {
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
                    $subcatid = $request->subcatid;
                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $values = implode("','", $valuesarr);
                        $nearby = DB::connection('pgsql')->select("SELECT 
                            tags->'opening_hours' as opening_hours,  
                            tags->'cuisine' as cuisine,  
                            tags->'website' as website,  
                            tags->'addr:city' as city,  
                            tags->'addr:street' as street,
                            tags->'internet_access' as internet_access,
                            tags->'outdoor_seating' as outdoor_seating,
                            tags->'internet_access:fee' as internet_access_fee,
                            tags->'description' as description,
                            tags->'smoking' as smoking,
                            tags->'delivery' as delivery,
                            tags->'email' as email,
                            tags->'cuisine:ja' as cuisine_ja,
                            tags->'name:az' as az_name,
                            tags->'addr:postcode' as postcode,
                            tags->'facebook' as facebook,
                            tags->'addr:country' as country,
                            tags->'addr:district' as district,
                            tags->'contact:phone' as contact_phone,
                            tags->'contact:instagram' as instagram,
                            tags->'operator' as operator,
                            tags->'diet:vegetarian' as vegetarian,
                            tags->'name:ar' as ar_name,
                            tags->'townhall:type' as townhall,
                            tags->'designation' as designation,
                            tags->'name:es' as es_name,
                            tags->'capacity' as capacity,
                            tags->'name:tr' as tr_name,
                            tags->'contact:facebook' as contact_facebook,
                            tags->'reservation' as reservation,
                            tags->'instagram' as instagram,
                            tags->'takeaway' as takeaway,
                            tags->'url' as url,
                            tags->'level' as level,
                            tags->'toilets' as toilets,
                            tags->'cuisine_1' as cuisine_1,
                            tags->'cuisine_2' as cuisine_2,
                            tags->'brand' as brand,
                            tags->'contact:email' as contact_email,
                            tags->'brand:wikidata' as wikidata,
                            tags->'brand:wikipedia' as wikipedia,
                            tags->'drive_in' as drive_in,
                            tags->'wheelchair' as wheelchair,
                            tags->'microbrewery' as microbrewery,
                            tags->'opening_hours:covid19' as opening_hours_covid19,
                            tags->'diet:vegan' as diet_vegan,
                            tags->'image' as image,
                            tags->'diet:meat' as meat,
                            tags->'ref:vatin' as vatin,
                            tags->'phone_1' as phone_1,
                            ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                            osm_id as osmid,
                            $fieldName as cat_type
                            from  public.planet_osm_point 
                            WHERE " . $fieldName . " IN ('" . $values . "') and tags!=''
                            order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
                            limit 15");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                }
            } else {

                $categoryData = array();

                if ($subcatql) {
                    $fieldName = '';
                    $valuesarr = array();
                    foreach ($subcatql as $row) {
                        $fieldArr = explode("-", $row['name']);
                        $fieldName = $fieldArr[0];
                        $valuesarr[] = $fieldArr[1];
                    }
                    $values = implode("','", $valuesarr);
                    $nearby = DB::connection('pgsql')->select("SELECT 
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        osm_id as osmid,
        $fieldName as cat_type
        from  public.planet_osm_point 
        WHERE " . $fieldName . " IN ('" . $values . "') and name!=''
        order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
        limit 15");

                    // $osmid = 123;
                    // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                    // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                    return response()
                        ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                }
            }
        } else {
            $nearby = DB::connection('pgsql')->select("select *,
        tags->'phone' as phone,
        tags->'name:en' as en_Name,  
        tags->'name:hy' as hy_Name,  
        tags->'name:ru' as ru_Name,  
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        osm_id as osmid
        from  public.planet_osm_point 
        where amenity = 'pub' and name != ''
        order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
        limit 15");
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Category()
    {
        $category = Categories::where('status', 1)->get();
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Subcategories(Request $request)
    {
        $subcatql = Subcategories::where('status', 1)->where('cat_id', $$request->cat_id)->get();
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $subcatql]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function facilities(Request $request)
    {
        $id = $request['cat_id'];
        $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
        // $subcatql = "SELECT `name` FROM `sub_categories` WHERE `status` = '1' and cat_id =".$id;
        // $result = $conn->query($subcatql);



        $categoryData = array();
        if ($subcatql) {
            $fieldName = '';
            $valuesarr = array();
            foreach ($subcatql as $row) {
                $fieldArr = explode("-", $row['name']);
                $fieldName = $fieldArr[0];
                $valuesarr[] = $fieldArr[1];
            }
            // while($row = $result->fetch_assoc()) {
            //     $fieldArr = explode("-",$row['name']);
            //     $fieldName = $fieldArr[0];
            //     $valuesarr[] = $fieldArr[1];
            // }
            // if($page_no == ''){$offset = 0;}else{$offset = ($page_no-1)*10;}

            $values = implode("','", $valuesarr);
            //echo "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''";

            $categoryResult = DB::connection('pgsql')->select("SELECT *,tags
                FROM planet_osm_point WHERE " . $fieldName . " IN ('" . $values . "') and tags!=''");
        }

        $new = array();
        foreach ($categoryResult as $category) {
            $new[] = $category->tags;
        }

        $ne3_array = array();
        for ($i = 0; $i < count($new); $i++) {
            $ne3_array[$i] = $new[$i];
        }
        $dss = array();
        for ($i = 0; $i < count($ne3_array); $i++) {
            $dss[$i] = explode(',', $ne3_array[$i]);
        }
        $bs = array();
        for ($i = 0; $i < count($dss); $i++) {
            for ($j = 0; $j < count($dss[$i]); $j++) {
                $bs[$i] = substr($dss[$i][$j], 1, 8);
                //  echo count($dss[$i]);
            }
        }
        //   print_r($dss);die;
        $healthy = [
            "nameen", "opening", "addrcit", "namede", "nametr", "namefr", "namezh", "namefa", "namees", "nameit", "nameru", "cuisine", "opening_", "namehy", "addrstr", "descript", "namehe", " addrco", "3-cu mik", "addrci",
            "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "nameaz", "nameka", "namear", "namepl", "addrst", "addrpos", "addrpo", "addrdi", "microbr", "addrco", "designat", "instagr",
            "changin", 'cu mik', 'altname', 'drivet', 'descrip', 'capacity', 'baku', 'minage', 'каль', 'свеж', 'level', 'time', 'oldname', 'namesig', 'building', 'buildin', 'Орех',
            'supervi', 'capacit', 'directi', 'surface', 'feen', 'selfser', 'reasonab', 'nameja', 'maxstay', 'nameko', 'intname', 'notebook', 'toilets', 'seamark', 'name',
            'wikiped', 'addrpla', 'object', 'sari gel', 'designa', 'мага', 'BMW', 'Alfa Rom', 'çilinge', 'oldnam', 'altnam', 'denomina', 'Papik (G', 'sitety', 'в.', '�ара�', 'direkt a',
            'вс.', 'stars', 'attracti', '�илы�', 'waterc', 'intermi', '�ара�', 'Bakı', 'wikimed', 'SaSu', 'Lerik', 'Qeydiyya', 'Мест', 'Avto yuy', 'Инте', 'denomin', 'ruins', 'placeo', 'support', 'ele', 'addrvil',
            'service', 'massage', 'facebook', 'contact'
        ];
        $yummy   = [""];
        $specila = ['"', ':', '-', '_', '=>', '+', '=', '�', '('];
        $dsssss = array();
        $hasdfas = array();
        $fmain = array();
        for ($i = 0; $i < count($bs); $i++) {
            $dsssss[$i] = str_replace($specila, '', $bs[$i]);
            for ($j = 0; $j < count($dsssss); $j++) {
                $hasdfas[$j] = str_replace($healthy, $yummy, $dsssss[$j]);
            }
        }
        $match = [
            "/interne/", '/emergen/', '/brandw/', '/wheelch/', '/internett/', '/operato/', '/takeawa/', '/reserva/', '/dietve/', '/Lökbata/', '/operatorr/', '/wheelchaira/',
            '/public/', '/fueloct/', '/fuelcng/', '/fuelme/', '/brandi/', '/fuellpg/', '/fuellp/', '/fuelcn/', '/bicycle/', '/fueloc/', '/fuelga/', '/fueldie/',
            '/wedding/', '/healthca/', '/dispensi/', '/dispens/', '/cashwi/', '/emergencyc/', '/healthc/', '/healthcareare/', '/dispensinging/', '/motorcy/', '/secondh/',
            '/histori/', '/guesth/', '/castle/', '/roomsb/', '/townhal/', '/bathty/', '/outdoor/', '/internet_accesst/'
        ];
        $add = [
            "internet_access", 'emergency', 'brand', 'wheelchair', 'internet_access', 'operator', 'takeaway', 'reservation', 'diet', 'Lökbatan', 'operator', 'wheelchair', 'public_transport',
            'fuel:octane_92', 'fuel:cng', 'fuel:methane_gas', 'brand', 'fuel:lpg', 'fuel:lpg', 'fuel:cng', 'bicycle_parking', 'fuel:octane_92', 'fuel:gas', 'fuel:diesel',
            'wedding_reception', 'healthcare', 'dispensing', 'dispensing', 'cash_withdrawal', 'emergency', 'healthcare', 'healthcare', 'dispensing', 'motorcycle', 'second_hand',
            'historic', 'guest_house', 'castle_type', 'rooms', 'townhall', 'bath', 'outdoor_seating', 'internet_access'
        ];
        $final = array();
        for ($i = 0; $i < count($hasdfas); $i++) {
            $final[$i] = preg_replace($match, $add, $hasdfas[$i]);
        }

        $bandvalue = array_unique($final);
        $finalone = array();

        foreach ($bandvalue as $band) {
            $finalone[] = $band;
        }
        $cusion = array();
        if ($id == 1) {
            $cusion = $this->cusion($id);
        }

        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'cusion' => $cusion, 'data' => array_filter($finalone)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function opening_hours(Request $request)
    {
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
    }

    function cusion($catid)
    {
        $id = $catid;
        $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
        // $subcatql = "SELECT `name` FROM `sub_categories` WHERE `status` = '1' and cat_id =".$id;
        // $result = $conn->query($subcatql);

        $categoryData = array();

        if ($subcatql) {
            $fieldName = '';
            $valuesarr = array();
            foreach ($subcatql as $row) {
                $fieldArr = explode("-", $row['name']);
                $fieldName = $fieldArr[0];
                $valuesarr[] = $fieldArr[1];
            }
            // while($row = $result->fetch_assoc()) {
            //     $fieldArr = explode("-",$row['name']);
            //     $fieldName = $fieldArr[0];
            //     $valuesarr[] = $fieldArr[1];
            // }
            // if($page_no == ''){$offset = 0;}else{$offset = ($page_no-1)*10;}

            $values = implode("','", $valuesarr);
            //echo "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''";

            $categoryResult = DB::connection('pgsql')->select("SELECT tags->'cuisine' as cuisine
                FROM planet_osm_point WHERE " . $fieldName . " IN ('" . $values . "') and tags!=''");
        }

        $new = array();
        foreach ($categoryResult as $category) {
            $new[] = $category->cuisine;
        }

        $ne3_array = array();
        for ($i = 0; $i < count($new); $i++) {
            $ne3_array[$i] = $new[$i];
        }
        $dss = array();
        for ($i = 0; $i < count($ne3_array); $i++) {
            $dss[$i] = explode(';', $ne3_array[$i]);
        }
        // print_r($dss);die;

        $NASDN = array();
        for ($i = 0; $i < count($dss); $i++) {
            for ($j = 0; $j < count($dss[$i]); $j++) {
                $NASDN[$i] = explode(',', $dss[$i][$j]);
                //  echo count($dss[$i]);
            }
            // $NASDN[$i] = explode(',', $dss[$i]);
        }

        $bs = array();
        for ($i = 0; $i < count($NASDN); $i++) {
            for ($j = 0; $j < count($NASDN[$i]); $j++) {
                $bs[$i] = substr($NASDN[$i][$j], 0);
                //  echo count($dss[$i]);
            }
        }
        // $specila = ['"',':','-','_','=>','+','=','�','('];
        //     $dsssss = array();  
        // $hasdfas = array();
        // $fmain = array();
        //     for($i = 0; $i < count($bs); $i++){
        //         $dsssss[$i] = explode(',', $bs[$i]);
        //     } 
        $bandvalue = array_unique($bs);
        //  print_r($bandvalue);die;
        $healthy = [
            "burger", "chicken", "barbecue", "sandwich", "coffeeshop", "kebab", "tea", "hotdog", "pancake", "icecream", "nameru", "WeddingPalace", "grill", "fish", "friture", "steakhouse", "cake", "beefbowl", "sushi",
            "deli", "2", "pasta", "sausage", "Steak", "meat", "coffee", "hookahandtea", "hookah", "noodles", "finedining", "beer", 'Sk', 'sk', 'and', 'house', 'lao'
        ];
        $yummy   = [""];
        $specila = ['"', ':', '-', '_', '=>', '+', '=', '�', '('];
        $dsssss = array();
        $hasdfas = array();
        $fmain = array();
        for ($i = 0; $i < count($bs); $i++) {
            $dsssss[$i] = str_replace($specila, '', $bs[$i]);
            for ($j = 0; $j < count($dsssss); $j++) {
                $hasdfas[$j] = str_replace($healthy, $yummy, $dsssss[$j]);
            }
        }
        $match = ["/italianpizza/"];
        $add = ["italian"];
        $final = array();
        for ($i = 0; $i < count($hasdfas); $i++) {
            $final[$i] = preg_replace($match, $add, $hasdfas[$i]);
        }

        $bandvalue = array_unique($final);
        // print_r($bandvalue);die;
        $finalone = array();

        foreach ($bandvalue as $band) {
            $finalone[] = $band;
        }
        return $finalone;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function simplefileter(Request $request)
    {


        if ($request->cat_id) {
            $id = $request->cat_id;
            $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
            if ($request->subcatid) {

                if ($request->facilities) {
                    $subcatid = $request->subcatid;
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();

                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $search = $request->search;
                        $values = implode("','", $valuesarr);
                        $filter = $request->facilities;
                        $nearby = DB::connection('pgsql')->select("SELECT 
                    tags->'opening_hours' as opening_hours,  
                    tags->'cuisine' as cuisine,  
                    tags->'website' as website,  
                    tags->'addr:city' as city,  
                    tags->'addr:street' as street,
                    tags->'internet_access' as internet_access,
                    tags->'outdoor_seating' as outdoor_seating,
                    tags->'internet_access:fee' as internet_access_fee,
                    tags->'description' as description,
                    tags->'smoking' as smoking,
                    tags->'delivery' as delivery,
                    tags->'email' as email,
                    tags->'cuisine:ja' as cuisine_ja,
                    tags->'name:az' as az_name,
                    tags->'addr:postcode' as postcode,
                    tags->'facebook' as facebook,
                    tags->'addr:country' as country,
                    tags->'addr:district' as district,
                    tags->'contact:phone' as contact_phone,
                    tags->'contact:instagram' as instagram,
                    tags->'operator' as operator,
                    tags->'diet:vegetarian' as vegetarian,
                    tags->'name:ar' as ar_name,
                    tags->'townhall:type' as townhall,
                    tags->'designation' as designation,
                    tags->'name:es' as es_name,
                    tags->'capacity' as capacity,
                    tags->'name:tr' as tr_name,
                    tags->'contact:facebook' as contact_facebook,
                    tags->'reservation' as reservation,
                    tags->'instagram' as instagram,
                    tags->'takeaway' as takeaway,
                    tags->'url' as url,
                    tags->'level' as level,
                    tags->'toilets' as toilets,
                    tags->'cuisine_1' as cuisine_1,
                    tags->'cuisine_2' as cuisine_2,
                    tags->'brand' as brand,
                    tags->'contact:email' as contact_email,
                    tags->'brand:wikidata' as wikidata,
                    tags->'brand:wikipedia' as wikipedia,
                    tags->'drive_in' as drive_in,
                    tags->'wheelchair' as wheelchair,
                    tags->'microbrewery' as microbrewery,
                    tags->'opening_hours:covid19' as opening_hours_covid19,
                    tags->'diet:vegan' as diet_vegan,
                    tags->'image' as image,
                    tags->'diet:meat' as meat,
                    tags->'ref:vatin' as vatin,
                    tags->'phone_1' as phone_1,
                    ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                    osm_id as osmid,
                    $fieldName as cat_type
                    from  public.planet_osm_point 
                    WHERE " . $fieldName . " IN ('" . $values . "') and tags->'" . $filter . "' !=''");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                } else {
                    $search = $request->search;
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
                    $subcatid = $request->subcatid;
                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $values = implode("','", $valuesarr);
                        $nearby = DB::connection('pgsql')->select("SELECT 
                            tags->'opening_hours' as opening_hours,  
                            tags->'cuisine' as cuisine,  
                            tags->'website' as website,  
                            tags->'addr:city' as city,  
                            tags->'addr:street' as street,
                            tags->'internet_access' as internet_access,
                            tags->'outdoor_seating' as outdoor_seating,
                            tags->'internet_access:fee' as internet_access_fee,
                            tags->'description' as description,
                            tags->'smoking' as smoking,
                            tags->'delivery' as delivery,
                            tags->'email' as email,
                            tags->'cuisine:ja' as cuisine_ja,
                            tags->'name:az' as az_name,
                            tags->'addr:postcode' as postcode,
                            tags->'facebook' as facebook,
                            tags->'addr:country' as country,
                            tags->'addr:district' as district,
                            tags->'contact:phone' as contact_phone,
                            tags->'contact:instagram' as instagram,
                            tags->'operator' as operator,
                            tags->'diet:vegetarian' as vegetarian,
                            tags->'name:ar' as ar_name,
                            tags->'townhall:type' as townhall,
                            tags->'designation' as designation,
                            tags->'name:es' as es_name,
                            tags->'capacity' as capacity,
                            tags->'name:tr' as tr_name,
                            tags->'contact:facebook' as contact_facebook,
                            tags->'reservation' as reservation,
                            tags->'instagram' as instagram,
                            tags->'takeaway' as takeaway,
                            tags->'url' as url,
                            tags->'level' as level,
                            tags->'toilets' as toilets,
                            tags->'cuisine_1' as cuisine_1,
                            tags->'cuisine_2' as cuisine_2,
                            tags->'brand' as brand,
                            tags->'contact:email' as contact_email,
                            tags->'brand:wikidata' as wikidata,
                            tags->'brand:wikipedia' as wikipedia,
                            tags->'drive_in' as drive_in,
                            tags->'wheelchair' as wheelchair,
                            tags->'microbrewery' as microbrewery,
                            tags->'opening_hours:covid19' as opening_hours_covid19,
                            tags->'diet:vegan' as diet_vegan,
                            tags->'image' as image,
                            tags->'diet:meat' as meat,
                            tags->'ref:vatin' as vatin,
                            tags->'phone_1' as phone_1,
                            ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                            osm_id as osmid,
                            $fieldName as cat_type
                            from  public.planet_osm_point 
                            WHERE " . $fieldName . " IN ('" . $values . "') and tags!=''");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                }
            } else {
                $search = $request->search;
                $categoryData = array();

                if ($subcatql) {
                    $fieldName = '';
                    $valuesarr = array();
                    foreach ($subcatql as $row) {
                        $fieldArr = explode("-", $row['name']);
                        $fieldName = $fieldArr[0];
                        $valuesarr[] = $fieldArr[1];
                    }
                    $values = implode("','", $valuesarr);
                    $nearby = DB::connection('pgsql')->select("SELECT 
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        osm_id as osmid,
        $fieldName as cat_type
        from  public.planet_osm_point 
        WHERE " . $fieldName . " IN ('" . $values . "') and name != '' ");

                    // $osmid = 123;
                    // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                    // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                    return response()
                        ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                }
            }
        } else {
            $nearby = DB::connection('pgsql')->select("select *,
        tags->'phone' as phone,
        tags->'name:en' as en_Name,  
        tags->'name:hy' as hy_Name,  
        tags->'name:ru' as ru_Name,  
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        osm_id as osmid
        from  public.planet_osm_point 
        where amenity = 'pub'
        order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
        limit 15");
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
        }
    }



    public function nearbysearch(Request $request)
    {
        if (!$request->search) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        $search = $request->search;
        if ($request->cat_id) {
            $id = $request->cat_id;
            $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
            if ($request->subcatid) {

                if ($request->facilities) {
                    $subcatid = $request->subcatid;
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();

                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $values = implode("','", $valuesarr);
                        $filter = $request->facilities;
                        $nearby = DB::connection('pgsql')->select("SELECT *,
                    tags->'opening_hours' as opening_hours,  
                    tags->'cuisine' as cuisine,  
                    tags->'website' as website,  
                    tags->'addr:city' as city,  
                    tags->'addr:street' as street,
                    tags->'internet_access' as internet_access,
                    tags->'outdoor_seating' as outdoor_seating,
                    tags->'internet_access:fee' as internet_access_fee,
                    tags->'description' as description,
                    tags->'smoking' as smoking,
                    tags->'delivery' as delivery,
                    tags->'email' as email,
                    tags->'cuisine:ja' as cuisine_ja,
                    tags->'name:az' as az_name,
                    tags->'addr:postcode' as postcode,
                    tags->'facebook' as facebook,
                    tags->'addr:country' as country,
                    tags->'addr:district' as district,
                    tags->'contact:phone' as contact_phone,
                    tags->'contact:instagram' as instagram,
                    tags->'operator' as operator,
                    tags->'diet:vegetarian' as vegetarian,
                    tags->'name:ar' as ar_name,
                    tags->'townhall:type' as townhall,
                    tags->'designation' as designation,
                    tags->'name:es' as es_name,
                    tags->'capacity' as capacity,
                    tags->'name:tr' as tr_name,
                    tags->'contact:facebook' as contact_facebook,
                    tags->'reservation' as reservation,
                    tags->'instagram' as instagram,
                    tags->'takeaway' as takeaway,
                    tags->'url' as url,
                    tags->'level' as level,
                    tags->'toilets' as toilets,
                    tags->'cuisine_1' as cuisine_1,
                    tags->'cuisine_2' as cuisine_2,
                    tags->'brand' as brand,
                    tags->'contact:email' as contact_email,
                    tags->'brand:wikidata' as wikidata,
                    tags->'brand:wikipedia' as wikipedia,
                    tags->'drive_in' as drive_in,
                    tags->'wheelchair' as wheelchair,
                    tags->'microbrewery' as microbrewery,
                    tags->'opening_hours:covid19' as opening_hours_covid19,
                    tags->'diet:vegan' as diet_vegan,
                    tags->'image' as image,
                    tags->'diet:meat' as meat,
                    tags->'ref:vatin' as vatin,
                    tags->'phone_1' as phone_1,
                    ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                    osm_id as osmid,
                    $fieldName as cat_type
                    from  public.planet_osm_point 
                    WHERE " . $fieldName . " IN ('" . $values . "') and tags->'" . $filter . "' !='' and name LIKE '%$search%'
                    order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
                    limit 15");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                } else {
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
                    $subcatid = $request->subcatid;
                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $values = implode("','", $valuesarr);
                        $nearby = DB::connection('pgsql')->select("SELECT *,
                            tags->'opening_hours' as opening_hours,  
                            tags->'cuisine' as cuisine,  
                            tags->'website' as website,  
                            tags->'addr:city' as city,  
                            tags->'addr:street' as street,
                            tags->'internet_access' as internet_access,
                            tags->'outdoor_seating' as outdoor_seating,
                            tags->'internet_access:fee' as internet_access_fee,
                            tags->'description' as description,
                            tags->'smoking' as smoking,
                            tags->'delivery' as delivery,
                            tags->'email' as email,
                            tags->'cuisine:ja' as cuisine_ja,
                            tags->'name:az' as az_name,
                            tags->'addr:postcode' as postcode,
                            tags->'facebook' as facebook,
                            tags->'addr:country' as country,
                            tags->'addr:district' as district,
                            tags->'contact:phone' as contact_phone,
                            tags->'contact:instagram' as instagram,
                            tags->'operator' as operator,
                            tags->'diet:vegetarian' as vegetarian,
                            tags->'name:ar' as ar_name,
                            tags->'townhall:type' as townhall,
                            tags->'designation' as designation,
                            tags->'name:es' as es_name,
                            tags->'capacity' as capacity,
                            tags->'name:tr' as tr_name,
                            tags->'contact:facebook' as contact_facebook,
                            tags->'reservation' as reservation,
                            tags->'instagram' as instagram,
                            tags->'takeaway' as takeaway,
                            tags->'url' as url,
                            tags->'level' as level,
                            tags->'toilets' as toilets,
                            tags->'cuisine_1' as cuisine_1,
                            tags->'cuisine_2' as cuisine_2,
                            tags->'brand' as brand,
                            tags->'contact:email' as contact_email,
                            tags->'brand:wikidata' as wikidata,
                            tags->'brand:wikipedia' as wikipedia,
                            tags->'drive_in' as drive_in,
                            tags->'wheelchair' as wheelchair,
                            tags->'microbrewery' as microbrewery,
                            tags->'opening_hours:covid19' as opening_hours_covid19,
                            tags->'diet:vegan' as diet_vegan,
                            tags->'image' as image,
                            tags->'diet:meat' as meat,
                            tags->'ref:vatin' as vatin,
                            tags->'phone_1' as phone_1,
                            ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                            osm_id as osmid,
                            $fieldName as cat_type
                            from  public.planet_osm_point 
                            WHERE " . $fieldName . " IN ('" . $values . "') and tags!='' and name LIKE '%$search%'
                            order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
                            limit 15");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                }
            }
            ///// Subcategories//////
            else {
                $categoryData = array();

                if ($subcatql) {
                    $fieldName = '';
                    $valuesarr = array();
                    foreach ($subcatql as $row) {
                        $fieldArr = explode("-", $row['name']);
                        $fieldName = $fieldArr[0];
                        $valuesarr[] = $fieldArr[1];
                    }
                    $values = implode("','", $valuesarr);
                    $nearby = DB::connection('pgsql')->select("SELECT *,
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        name as name,
        osm_id as osmid,
        $fieldName as cat_type
        from  public.planet_osm_point 
        WHERE " . $fieldName . " IN ('" . $values . "') and name LIKE '%$search%'
        order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
        limit 15");

                    // $osmid = 123;
                    // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                    // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                    return response()
                        ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                }
            }
        }

        // without category
        else {

            $nearby = DB::connection('pgsql')->select("SELECT *,
        tags->'phone' as phone,
        tags->'name:en' as en_Name,  
        tags->'name:hy' as hy_Name,  
        tags->'name:ru' as ru_Name,  
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        osm_id as osmid
        from  public.planet_osm_point 
        where name LIKE '%$search%'
        order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
        limit 15");
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
        }
    }



    public function simplesearch(Request $request)
    {
        if (!$request->search) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }

        $search = $request->search;
        if ($request->cat_id) {
            $id = $request->cat_id;
            $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
            if ($request->subcatid) {

                if ($request->facilities) {
                    $subcatid = $request->subcatid;
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();

                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $search = $request->search;
                        $values = implode("','", $valuesarr);
                        $filter = $request->facilities;
                        $nearby = DB::connection('pgsql')->select("SELECT *,
                    tags->'opening_hours' as opening_hours,  
                    tags->'cuisine' as cuisine,  
                    tags->'website' as website,  
                    tags->'addr:city' as city,  
                    tags->'addr:street' as street,
                    tags->'internet_access' as internet_access,
                    tags->'outdoor_seating' as outdoor_seating,
                    tags->'internet_access:fee' as internet_access_fee,
                    tags->'description' as description,
                    tags->'smoking' as smoking,
                    tags->'delivery' as delivery,
                    tags->'email' as email,
                    tags->'cuisine:ja' as cuisine_ja,
                    tags->'name:az' as az_name,
                    tags->'addr:postcode' as postcode,
                    tags->'facebook' as facebook,
                    tags->'addr:country' as country,
                    tags->'addr:district' as district,
                    tags->'contact:phone' as contact_phone,
                    tags->'contact:instagram' as instagram,
                    tags->'operator' as operator,
                    tags->'diet:vegetarian' as vegetarian,
                    tags->'name:ar' as ar_name,
                    tags->'townhall:type' as townhall,
                    tags->'designation' as designation,
                    tags->'name:es' as es_name,
                    tags->'capacity' as capacity,
                    tags->'name:tr' as tr_name,
                    tags->'contact:facebook' as contact_facebook,
                    tags->'reservation' as reservation,
                    tags->'instagram' as instagram,
                    tags->'takeaway' as takeaway,
                    tags->'url' as url,
                    tags->'level' as level,
                    tags->'toilets' as toilets,
                    tags->'cuisine_1' as cuisine_1,
                    tags->'cuisine_2' as cuisine_2,
                    tags->'brand' as brand,
                    tags->'contact:email' as contact_email,
                    tags->'brand:wikidata' as wikidata,
                    tags->'brand:wikipedia' as wikipedia,
                    tags->'drive_in' as drive_in,
                    tags->'wheelchair' as wheelchair,
                    tags->'microbrewery' as microbrewery,
                    tags->'opening_hours:covid19' as opening_hours_covid19,
                    tags->'diet:vegan' as diet_vegan,
                    tags->'image' as image,
                    tags->'diet:meat' as meat,
                    tags->'ref:vatin' as vatin,
                    tags->'phone_1' as phone_1,
                    ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                    osm_id as osmid,
                    $fieldName as cat_type
                    from  public.planet_osm_point 
                    WHERE " . $fieldName . " IN ('" . $values . "') and tags->'" . $filter . "' !='' and name LIKE '%$search%'");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                } else {
                    $search = $request->search;
                    $subcatql = Subcategories::where('status', 1)->where('cat_id', $id)->get();
                    $subcatid = $request->subcatid;
                    $categoryData = array();

                    if ($subcatql) {
                        $fieldName = '';
                        $valuesarr = array();
                        foreach ($subcatql as $row) {
                            if ($row['id'] == $subcatid) {
                                $fieldArr = explode("-", $row['name']);
                                $fieldName = $fieldArr[0];
                                $valuesarr[] = $fieldArr[1];
                            }
                        }
                        $values = implode("','", $valuesarr);
                        $nearby = DB::connection('pgsql')->select("SELECT *, 
                            tags->'opening_hours' as opening_hours,  
                            tags->'cuisine' as cuisine,  
                            tags->'website' as website,  
                            tags->'addr:city' as city,  
                            tags->'addr:street' as street,
                            tags->'internet_access' as internet_access,
                            tags->'outdoor_seating' as outdoor_seating,
                            tags->'internet_access:fee' as internet_access_fee,
                            tags->'description' as description,
                            tags->'smoking' as smoking,
                            tags->'delivery' as delivery,
                            tags->'email' as email,
                            tags->'cuisine:ja' as cuisine_ja,
                            tags->'name:az' as az_name,
                            tags->'addr:postcode' as postcode,
                            tags->'facebook' as facebook,
                            tags->'addr:country' as country,
                            tags->'addr:district' as district,
                            tags->'contact:phone' as contact_phone,
                            tags->'contact:instagram' as instagram,
                            tags->'operator' as operator,
                            tags->'diet:vegetarian' as vegetarian,
                            tags->'name:ar' as ar_name,
                            tags->'townhall:type' as townhall,
                            tags->'designation' as designation,
                            tags->'name:es' as es_name,
                            tags->'capacity' as capacity,
                            tags->'name:tr' as tr_name,
                            tags->'contact:facebook' as contact_facebook,
                            tags->'reservation' as reservation,
                            tags->'instagram' as instagram,
                            tags->'takeaway' as takeaway,
                            tags->'url' as url,
                            tags->'level' as level,
                            tags->'toilets' as toilets,
                            tags->'cuisine_1' as cuisine_1,
                            tags->'cuisine_2' as cuisine_2,
                            tags->'brand' as brand,
                            tags->'contact:email' as contact_email,
                            tags->'brand:wikidata' as wikidata,
                            tags->'brand:wikipedia' as wikipedia,
                            tags->'drive_in' as drive_in,
                            tags->'wheelchair' as wheelchair,
                            tags->'microbrewery' as microbrewery,
                            tags->'opening_hours:covid19' as opening_hours_covid19,
                            tags->'diet:vegan' as diet_vegan,
                            tags->'image' as image,
                            tags->'diet:meat' as meat,
                            tags->'ref:vatin' as vatin,
                            tags->'phone_1' as phone_1,
                            ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                            osm_id as osmid,
                            $fieldName as cat_type
                            from  public.planet_osm_point 
                            WHERE " . $fieldName . " IN ('" . $values . "') and name LIKE '%$search%' and tags!=''");

                        // $osmid = 123;
                        // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                        // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                        return response()
                            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                    }
                }
            } else {
                $search = $request->search;
                $categoryData = array();

                if ($subcatql) {
                    $fieldName = '';
                    $valuesarr = array();
                    foreach ($subcatql as $row) {
                        $fieldArr = explode("-", $row['name']);
                        $fieldName = $fieldArr[0];
                        $valuesarr[] = $fieldArr[1];
                    }
                    $values = implode("','", $valuesarr);
                    $nearby = DB::connection('pgsql')->select("SELECT *,
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        osm_id as osmid,
        $fieldName as cat_type
        from  public.planet_osm_point 
        WHERE " . $fieldName . " IN ('" . $values . "') and name LIKE '%$search%'");

                    // $osmid = 123;
                    // $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
                    // $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
                    return response()
                        ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
                }
            }
        } else {
            $search = $request->search;
            $nearby = DB::connection('pgsql')->select("select *,
        tags->'phone' as phone,
        tags->'name:en' as en_Name,  
        tags->'name:hy' as hy_Name,  
        tags->'name:ru' as ru_Name,  
        tags->'opening_hours' as opening_hours,  
        tags->'cuisine' as cuisine,  
        tags->'website' as website,  
        tags->'addr:city' as city,  
        tags->'addr:street' as street,
        tags->'internet_access' as internet_access,
        tags->'outdoor_seating' as outdoor_seating,
        tags->'internet_access:fee' as internet_access_fee,
        tags->'description' as description,
        tags->'smoking' as smoking,
        tags->'delivery' as delivery,
        tags->'email' as email,
        tags->'cuisine:ja' as cuisine_ja,
        tags->'name:az' as az_name,
        tags->'addr:postcode' as postcode,
        tags->'facebook' as facebook,
        tags->'addr:country' as country,
        tags->'addr:district' as district,
        tags->'contact:phone' as contact_phone,
        tags->'contact:instagram' as instagram,
        tags->'operator' as operator,
        tags->'diet:vegetarian' as vegetarian,
        tags->'name:ar' as ar_name,
        tags->'townhall:type' as townhall,
        tags->'designation' as designation,
        tags->'name:es' as es_name,
        tags->'capacity' as capacity,
        tags->'name:tr' as tr_name,
        tags->'contact:facebook' as contact_facebook,
        tags->'reservation' as reservation,
        tags->'instagram' as instagram,
        tags->'takeaway' as takeaway,
        tags->'url' as url,
        tags->'level' as level,
        tags->'toilets' as toilets,
        tags->'cuisine_1' as cuisine_1,
        tags->'cuisine_2' as cuisine_2,
        tags->'brand' as brand,
        tags->'contact:email' as contact_email,
        tags->'brand:wikidata' as wikidata,
        tags->'brand:wikipedia' as wikipedia,
        tags->'drive_in' as drive_in,
        tags->'wheelchair' as wheelchair,
        tags->'microbrewery' as microbrewery,
        tags->'opening_hours:covid19' as opening_hours_covid19,
        tags->'diet:vegan' as diet_vegan,
        tags->'image' as image,
        tags->'diet:meat' as meat,
        tags->'ref:vatin' as vatin,
        tags->'phone_1' as phone_1,
        ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
        osm_id as osmid
        from  public.planet_osm_point 
        where name LIKE '%$search%'
        order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
        limit 15");
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $nearby]);
        }
    }
}
