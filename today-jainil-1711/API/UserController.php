<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;
use Validator;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserResetPassword;
use App\Http\Model\Featureplace;
use App\Http\Model\Categories;
use App\Http\Model\PlaceAdvertisement;
use App\Http\Model\Featuretext;
use App\Http\Model\Advertisement;
use DB;
class UserController extends Controller
{
    public $category_image_path = "http://10.10.1.88:8000/uploads/categories/";
    public $advertisement_path = "http://10.10.1.88:8000/uploads/advertisement/";
    public $featureplace_path = "http://10.10.1.88:8000/uploads/feature/";

    public function register(Request $request){
        if (!$request->firstname)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The first name field is required.']);
        }

        if (!$request->lastname)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The last name field is required.']);
        }
        if (!$request->email)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The email address field is required.']);
        }
        if (!$request->contact)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number field is required.']);
        }

        if (!$request->password)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The password field is required.']);
        }
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Please enter valid email address.']);
       }

        $checkemail = Users::where('email',$request->email)->first();
        if($checkemail){
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'Email already exist.please choose another email address']);
        }
        $checkmobile = Users::Where("contact_no",$request->contact)->first();
        if($checkmobile){
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'Mobile number already exist.please choose another mobile address']);
        }

        $data = array(
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'contact_no' => $request->contact,
            'password' => Hash::make($request->password),
            'role' => 'User',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        $insert = Users::insert($data);
        if($insert){
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'User Registered successfully']);
        }else{
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..user not registered']);
        }
    }
    public function login(Request $request){
       
        if (!$request->type)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The type field is required.']);
        }

        if($request->type == 1){
            if(!$request->email){
                return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The email address field is required.']);
            }
            if (!$request->password)
            {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The password field is required.']);
            }


            if (!$request->device_type)
            {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The device type field is required.']);
            }

            if (!$request->device_token)
            {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The device token field is required.']);
            }

        }else if($request->type == 2){
            if(!$request->contact){
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number filed is required.']);
            }
        }else{
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'The Type field is wrong']);
        }
        if($request->type == 1){

            $check = Users::where('email',$request->email)->where('status',1)->first();
            if($check){
                $hashedPassword = $check->password;
                if (Hash::check($request->password, $hashedPassword))
                {
                    $update_user_details = array(
                        'device_type' => $request->device_type,
                        'device_token' => $request->device_token,
                        'updated_at' => Carbon::now()
                    );
                    $update_user = Users::where('id',$check->id)->update($update_user_details);
                    $data = array(
                        'id' => $check->id,
                        'firstname' => $check->first_name,
                        'lastname' => $check->last_name,
                        'email' => $check->email,
                        'contact_no' => $check->contact_no
                    );
                    return response()->json(['statusCode' => 1, 'statusMessage' => 'login Successfully', 'data' => $data]);

                }else{
                    return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Please enter password']);
                }
            }else{
                return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'User is not registered with system. Please check your credentials']);
            }

        }else if($request->type == 2){

            $check = Users::where('contact_no',$request->contact)->where('status',1)->first();
            if($check){
                // $digits = 6;
                // $otp = rand(pow(10, $digits - 1) , pow(10, $digits) - 1);
                $otp = 1234;
                $otp_data = array(
                    'otp' => $otp,
                    'updated_at' => Carbon::now()
                );
                $update = Users::where('id',$check->id)->update($otp_data);
                $userId = $check->id;
                return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'loggedIn','userId' => $userId ]);
            }else{
                return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number field is wrong']);
            }

        }else{
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'The type field field is wrong']);
        }

    }
    public function verify_otp(Request $request){
        if (!$request->userId)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->otp){
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'The otp field is required.']);
        }
        if (!$request->device_type)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The device type field is required.']);
        }
        if (!$request->device_token)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The device token field is required.']);
        }
        $check = Users::where('id',$request->userId)->first();
        if($check){
            if($check->otp == $request->otp){
                $data = array(
                    'id' => $check->id,
                    'firstname' => $check->first_name,
                    'lastname' => $check->last_name,
                    'email' => $check->email,
                    'contact' => $check->contact_no
                );
                $update_user_details = array(
                    'device_type' => $request->device_type,
                    'device_token' => $request->device_token,
                    'updated_at' => Carbon::now()
                );
                $update_user = Users::where('id',$check->id)->update($update_user_details);

                return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'LoggedIn Successfully','data' => $data]);
            }else{
                return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The otp is wrong.']);
            }
        }else{
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'The user is not found.']);
        }

    }
    public function resend_otp(Request $request){
        if (!$request->userId)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        // $digits = 6;
        // $otp = rand(pow(10, $digits - 1) , pow(10, $digits) - 1);
        $otp = 1234;
        $otp_data = array(
            'otp' => $otp,
            'updated_at' => Carbon::now()
        );
        $update = Users::where('id',$request->userId)->update($otp_data);
        if($update){
            return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Otp sent successfully']);
        }else{
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong']);
        }
    }
    public function logout(Request $request){
        if (!$request->userId)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }

        $update_details = array(
            'device_type' => '',
            'device_token' => '',
            'otp' => '',
        );
        $update = Users::where('id',$request->userId)->update($update_details);
        if($update_details){
            return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Logout successfully']);
        }else{
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'The user is not found']);
        }
    }
    public function forgot_password(Request $request){
        if (!$request->email)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The email field is required.']);
        }
         $email = Hash::make($request->email);

         $checkemail = Users::where('email',$request->email)->first();
        // echo $checkemail;die;
        if($checkemail){

        $user_email = base64_encode($request->input('email'));
        $url = URL::to('/').'/resetpassword_user?token='.$email.'&email='.$user_email;
        $data = array('email' => $user_email, 'verification_code' => $email,'url' => $url);
        $to_email = $request->input('email');

        $mail = Mail::to($to_email)->send(new UserResetPassword(($data)));

        return response()->json(['statusCode' => 1, 'statusMessage' => 'Email Sent Successfully']);

        }else{
             return response()->json(['statusCode' => 0, 'statusMessage' => 'Email is not registered or deleted']);
        }
    }
    public function resetpassword(Request $request)
    {
        if(!empty($request->input('token')))
        {
            $email = base64_decode($request->email);
            $user['user'] = Users::where('email',$email)->first();

            return view('change_user_password',$user);
        }
    }
    public function forgotpasswordupdate_api(Request $request){
        $email = $request->input('email');
        $confirmpassword = Hash::make($request->input('confirmpassword'));
        $update = Users::where('email',$email)->update(['password' => $confirmpassword,'updated_at' =>Carbon::now()]);
        if($update)
        {
             // return redirect('login')->with('success','Login with new password');
              return response()->json(['statusMessage' => 'Your password changed successfully']);
        }
        else
        {
            return response()->json(['statusMessage' => 'Unable to reset password']);
            // return redirect()->back()->with('error','Unable to reset password');
        }
    }
    // public function demo(){
    //     $new = array(
    //         'segment1' => 1,
    //         'segment2' => 0,
    //         'segment3' => 1,
    //         'segment4' => 1,
    //         'segment5' => 0
    //     );
    //     return response()->json(['statusCode' => 1, 'statusMessage' => 'Data fetched successfully','data' => $new]);

    // }
    public function home(Request $request){

        if (!$request->userId)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        $check = $this->check_user($request->userId);
        if(!$check){
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'User Not found']);
        }
        $category = Categories::where('status',1)->take(8)->get();
        $categorydata = array();
        foreach($category as $row){
            $categorydata[] = array(
                    'id'  => $row['id'],
                    'name' => $row['name'],
                    'image' => $row['image'],
                    'image_path' =>$this->category_image_path,
            );
        }
        $more_categories = Categories::where('status',1)->take(16)->get();
        $morecategorydata = array();
        foreach($more_categories as $row){
            $morecategorydata[] = array(
                    'id'  => $row['id'],
                    'name' => $row['name'],
                    'image' => $row['image'],
                    'image_path' =>$this->category_image_path,
            );
        }
        $feature_text = Featuretext::where('status',1)->first();
        $featuretextdata = array(
            'id' => $feature_text->id,
            'title'=> $feature_text->title,
            'description' => $feature_text->description
        );
        $advertisement =  Advertisement::where('status',1)->get();
        $advertisement_data = array();
        foreach($advertisement as $row1){
            $advertisement_data[] = array(
            'id' => $row1->id,
            'title' => $row1->title,
            'image' => $row1->image,
            'image_path' => $this->advertisement_path,
            );
        }
        $featureplace = Featureplace::where('status',1)->get();
        $feature_data = array();
        foreach($featureplace as $row2){
            $feature_data[] = array(
                'id' => $row2->id,
                'title' => $row2->title,
                'description' => $row2->description,
                'image' => $row2->image,
                'image_path' => $this->featureplace_path
            );
        }
        $place_advertisement = PlaceAdvertisement::where('status',1)->first();
        $place_advertisementdata = array(
            'id' => $place_advertisement->id,
            'place_name' => $place_advertisement->place_name,
            'image' => $place_advertisement->image
        );
        if($place_advertisement->type == 'POI'){
            $place_advertisementdata['advertisement_type'] = $place_advertisement->type;
            $place_advertisementdata['osm_id'] = $place_advertisement->osm_id;
        }else{
            $place_advertisementdata['advertisement_type'] = $place_advertisement->type;
            $place_advertisementdata['external_link'] = $place_advertisement->external_link;
        }
        $data = array();
        $data['category'] = $categorydata;
        $data['more_category'] = $morecategorydata;
        $data['advertisement'] = $advertisement_data;
        $data['feature_text'] = $featuretextdata;
        $data['feature_places'] = $feature_data;
        $data['place_advertisement'] = $place_advertisementdata;
        //  $data['place_advertisement'] = PlaceAdvertisement::where('status',1)->first();
        return response()
        ->json(['statusCode' =>  1, 'statusMessage' => 'data found','data' => $data]);
    }
    public function category_data(Request $request){
        if (!$request->userId)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->category)
        {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The category field is required.']);
        }
        $check = $this->check_user($request->userId);
        if(!$check){
            return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'User Not found']);
        }
        $data = array();
        if($request->category == 'Eat Out'){
            $categorydata = DB::connection('pgsql')->select("select
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
            name as restaurantname,
            osm_id as osmid
            from
            public.planet_osm_point
            WHERE amenity='restaurant' and name!=''");

            foreach($categorydata as $row){
                if($row->en_name != ""){
                $data[] = array(
                    'en_Name' => $row->en_name,
                    'hy_Name' => $row->hy_name,
                    'ru_Name' => $row->ru_name,
                    'opening_hours'=> $row->opening_hours,
                    'cuisine' =>$row->cuisine,
                    'website' =>$row->website,
                    'city' =>$row->city,
                    'street' =>$row->street,
                    'internet_access' =>$row->internet_access,
                    'outdoor_seating' =>$row->outdoor_seating,
                    'internet_access_fee' =>$row->internet_access_fee,
                    'description' =>$row->description,
                    'smoking' =>$row->smoking,
                    'delivery' =>$row->delivery,
                    'email' =>$row->email,
                    'cuisine_ja' =>$row->cuisine_ja,
                    'az_name'=>$row->az_name,
                    'postcode'=>$row->postcode,
                    'facebook'=>$row->facebook,
                    'country'=>$row->country,
                    'district'=>$row->district,
                    'contact_phone'=>$row->contact_phone,
                    'instagram'=>$row->instagram,
                    'operator'=>$row->operator,
                    'vegetarian,'=>$row->vegetarian,
                    'ar_name,'=>$row->ar_name,
                    'townhall'=>$row->townhall,
                    'designation'=>$row->designation,
                    'es_name'=>$row->es_name,
                    'capacity'=>$row->capacity,
                    'capacity'=>$row->capacity,
                    'contact_facebook'=>$row->contact_facebook,
                    'reservation'=>$row->reservation,
                    'instagram'=>$row->instagram,
                    'takeaway'=>$row->takeaway,
                    'url'=>$row->url,
                    'level'=>$row->level,
                    'toilets'=>$row->toilets,
                    'cuisine_1'=>$row->cuisine_1,
                    'cuisine_2'=>$row->cuisine_2,
                    'brand'=>$row->brand,
                    'contact_email'=>$row->contact_email,
                    'wikidata'=>$row->wikidata,
                    'wikipedia'=>$row->wikipedia,
                    'drive_in'=>$row->drive_in,
                    'wheelchair'=>$row->wheelchair,
                    'microbrewery'=>$row->microbrewery,
                    'opening_hours_covid19'=>$row->opening_hours_covid19,
                    'diet_vegan'=>$row->diet_vegan,
                    'image'=>$row->image,
                    'meat'=>$row->meat,
                    'vatin'=>$row->vatin,
                    'phone_1'=>$row->phone_1,
                    'restaurantname'=>$row->restaurantname,
                    'osmid'=>$row->osmid,
                );
            }
        }

        }else if($request->category == 'Groceries'){

            $categorydata = DB::connection('pgsql')->select("select
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
                tags->'payment:cash' as cash,
                tags->'payment:visa' as visa,
                tags->'payment:mastercard' as mastercard,
                tags->'payment:debit_cards' as debit_cards,
                tags->'payment:credit_cards' as credit_cards,
                tags->'sym' as sym,
                tags->'start_date' as start_date,
                tags->'air_conditioning' as air_conditioning,
                tags->'int_name' as int_name,
                tags->'second_hand' as second_hand,
                tags->'currency:AZN' as currency_AZN,
                tags->'old_name' as old_name,
                tags->'name:signed' as signed,
                tags->'wheelchair' as wheelchair,
                name as restaurantname,
                shop as shop,
                osm_id as osmid
                from planet_osm_point
                WHERE shop='supermarket' and shop!=''");
            

          foreach($categorydata as $row){
            if($row->en_name != ""){
            $data[] = array(
                'en_Name' => $row->en_name,
                'hy_Name' => $row->hy_name,
                'ru_Name' => $row->ru_name,
                'opening_hours'=> $row->opening_hours,
                'cuisine' =>$row->cuisine,
                'website' =>$row->website,
                'city' =>$row->city,
                'street' =>$row->street,
                'internet_access' =>$row->internet_access,
                'outdoor_seating' =>$row->outdoor_seating,
                'internet_access_fee' =>$row->internet_access_fee,
                'description' =>$row->description,
                'smoking' =>$row->smoking,
                'delivery' =>$row->delivery,
                'email' =>$row->email,
                'cuisine_ja' =>$row->cuisine_ja,
                'az_name'=>$row->az_name,
                'postcode'=>$row->postcode,
                'facebook'=>$row->facebook,
                'country'=>$row->country,
                'district'=>$row->district,
                'contact_phone'=>$row->contact_phone,
                'instagram'=>$row->instagram,
                'operator'=>$row->operator,
                'vegetarian,'=>$row->vegetarian,
                'ar_name,'=>$row->ar_name,
                'townhall'=>$row->townhall,
                'designation'=>$row->designation,
                'es_name'=>$row->es_name,
                'capacity'=>$row->capacity,
                'capacity'=>$row->capacity,
                'contact_facebook'=>$row->contact_facebook,
                'reservation'=>$row->reservation,
                'instagram'=>$row->instagram,
                'takeaway'=>$row->takeaway,
                'url'=>$row->url,
                'level'=>$row->level,
                'toilets'=>$row->toilets,
                'cuisine_1'=>$row->cuisine_1,
                'cuisine_2'=>$row->cuisine_2,
                'brand'=>$row->brand,
                'contact_email'=>$row->contact_email,
                'wikidata'=>$row->wikidata,
                'wikipedia'=>$row->wikipedia,
                'drive_in'=>$row->drive_in,
                'wheelchair'=>$row->wheelchair,
                'microbrewery'=>$row->microbrewery,
                'opening_hours_covid19'=>$row->opening_hours_covid19,
                'diet_vegan'=>$row->diet_vegan,
                'image'=>$row->image,
                'meat'=>$row->meat,
                'vatin'=>$row->vatin,
                'phone_1'=>$row->phone_1,
                'restaurantname'=>$row->restaurantname,
                'osmid'=>$row->osmid,
            );
        }
    }
        }else if($request->category == 'Malls'){
            $categorydata = DB::connection('pgsql')->select("select * from planet_osm_point");
        }
          return response()
            ->json(['statusCode' => 0, 'statusMessage' => 'data found','data' => $categorydata]);
    }
    public function check_user($userId){
        $check = Users::where('id',$userId)->where('status',1)->first();
        if($check){
            return true;
        }else{
           return false;
    }
    }
}
