<?php

namespace App\Http\Controllers\API;

use App\car_make;
use App\car_model;
use App\cars;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserResetPassword;
use App\Http\Model\Featureplace;
use App\Http\Model\Categories;
use App\Http\Model\PlaceAdvertisement;
use App\Http\Model\Featuretext;
use App\Http\Model\Advertisement;
use App\Http\Model\Company;
use App\Http\Model\CompanyImages;
use App\Http\Model\Faq;
use App\Http\Model\Feature;
use App\Http\Model\Privacy_Policy;
use App\Http\Model\Subcategories;
use App\Http\Model\Users;
use App\myplaces;
use App\Placephotos;
use App\reviews_rating;
use App\Saveroute;
use Hamcrest\FeatureMatcher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class UserController extends Controller
{
    public $category_image_path = "http://10.10.1.133:8000/uploads/categories/";
    public $advertisement_path = "http://10.10.1.133:8000/uploads/advertisement/";
    public $featureplace_path = "http://10.10.1.133:8000/uploads/feature/";
    public $profile_path = 'http://10.10.1.133:8000/uploads/users/';
    public $place_photo = 'http://10.10.1.133:8000/uploads/placephoto/';

    public function register(Request $request)
    {
        if (!$request->firstname) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The first name field is required.']);
        }

        if (!$request->lastname) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The last name field is required.']);
        }
        if (!$request->email) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The email address field is required.']);
        }
        if (!$request->contact) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number field is required.']);
        }
        if (!$request->country_code) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The country code field is required.']);
        }

        if (!$request->password) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The password field is required.']);
        }
        if (!$request->dial_code) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The dial_code field is required.']);
        }
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            //Valid email!
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Please enter valid email address.']);
        }

        $checkemail = Users::where('email', $request->email)->first();
        if ($checkemail) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Email already exist.please choose another email address']);
        }
        $checkmobile = Users::Where("contact_no", $request->contact)->first();
        if ($checkmobile) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Mobile number already exist.please choose another mobile address']);
        }

        $data = array(
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'country_code' => $request->country_code,
            'contact_no' => $request->contact,
            'dial_code' => $request->dial_code,
            'password' => Hash::make($request->password),
            'role' => 'User',
            'otp' => 1234,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        $insert = Users::insertGetId($data);
        $userdata = Users::Where('id', '=', $insert)->first();

        // $userdataarray = array(
        //     'id' => $userdata->id,
        //     'firstname' => $userdata->first_name,
        //     'lastname' => $userdata->last_name,
        //     'path' => $this->profile_path,
        //     'image' => $userdata->profile_pic,
        //     'email' => $userdata->email,
        //     'country_code' => $userdata->country_code,
        //     'dial_code' => $userdata->dial_code,
        //     'contact' => $userdata->contact_no
        // );


        if ($insert) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'User Registered successfully', 'user' => $insert]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..user not registered']);
        }
    }



    public function login(Request $request)
    {

        if (!$request->type) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The type field is required.']);
        }

        if ($request->type == 1) {
            if (!$request->email) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The email address field is required.']);
            }
            if (!$request->password) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The password field is required.']);
            }


            if (!$request->device_type) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The device type field is required.']);
            }

            if (!$request->device_token) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The device token field is required.']);
            }
        } else if ($request->type == 2) {
            if (!$request->contact) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number filed is required.']);
            }
            if (!$request->country_code) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The country code filed is required.']);
            }
            if (!$request->dial_code) {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The dial_code filed is required.']);
            }
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The Type field is wrong']);
        }
        if ($request->type == 1) {

            $check = Users::where('email', $request->email)->where('status', 1)->first();
            if ($check) {
                $hashedPassword = $check->password;
                if (Hash::check($request->password, $hashedPassword)) {
                    $update_user_details = array(
                        'device_type' => $request->device_type,
                        'device_token' => $request->device_token,
                        'updated_at' => Carbon::now()
                    );
                    $update_user = Users::where('id', $check->id)->update($update_user_details);
                    $data = array(
                        'id' => $check->id,
                        'firstname' => $check->first_name,
                        'lastname' => $check->last_name,
                        'path' => $this->profile_path,
                        'image' => $check->profile_pic,
                        'email' => $check->email,
                        'country_code' => $check->country_code,
                        'dial_code' => $check->dial_code,
                        'contact' => $check->contact_no
                    );
                    return response()->json(['statusCode' => 1, 'statusMessage' => 'login Successfully', 'data' => $data]);
                } else {
                    return response()
                        ->json(['statusCode' => 0, 'statusMessage' => 'Wrong username or password']);
                }
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'User is not registered with system. Please check your credentials']);
            }
        } else if ($request->type == 2) {

            $check = Users::where('contact_no', $request->contact)->where('status', 1)->first();
            if ($check) {
                // $digits = 6;
                // $otp = rand(pow(10, $digits - 1) , pow(10, $digits) - 1);
                $otp = 1234;
                $otp_data = array(
                    'otp' => $otp,
                    'updated_at' => Carbon::now()
                );
                $update = Users::where('id', $check->id)->update($otp_data);
                $userId = $check->id;
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'loggedIn', 'userId' => $userId]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number field is wrong']);
            }
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The type field field is wrong']);
        }
    }


    // public function signupotp(Request $request){
    //     if (!$request->userId) {
    //         return response()
    //             ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
    //     }
    //     if (!$request->otp) {
    //         return response()
    //             ->json(['statusCode' => 0, 'statusMessage' => 'The otp field is required.']);
    //     }
    //     if (!$request->device_type) {
    //         return response()
    //             ->json(['statusCode' => 0, 'statusMessage' => 'The device type field is required.']);
    //     }
    //     if (!$request->device_token) {
    //         return response()
    //             ->json(['statusCode' => 0, 'statusMessage' => 'The device token field is required.']);
    //     }
    //     $check = Users::where('id', $request->userId)->first();
    //     if ($check) {
    //         if ($check->otp == $request->otp) {
    //             $data = array(
    //                 'id' => $check->id,
    //                 'firstname' => $check->first_name,
    //                 'lastname' => $check->last_name,
    //                 'email' => $check->email,
    //                 'dial_code' => $check->dial_code,
    //                 'path' => $this->profile_path,
    //                 'image' => $check->profile_pic,
    //                 'country_code' => $check->country_code,
    //                 'contact' => $check->contact_no
    //             );
    //             $update_user_details = array(
    //                 'device_type' => $request->device_type,
    //                 'device_token' => $request->device_token,
    //                 'updated_at' => Carbon::now()
    //             );
    //             $update_user = Users::where('id', $check->id)->update($update_user_details);

    //             return response()
    //                 ->json(['statusCode' => 1, 'statusMessage' => 'LoggedIn Successfully', 'data' => $data]);
    //         } else {
    //             return response()
    //                 ->json(['statusCode' => 0, 'statusMessage' => 'The otp is wrong.']);
    //         }
    //     } else {
    //         return response()
    //             ->json(['statusCode' => 0, 'statusMessage' => 'The user is not found.']);
    //     }
    // }



    public function verify_otp(Request $request)
    {
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->otp) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The otp field is required.']);
        }
        if (!$request->device_type) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The device type field is required.']);
        }
        if (!$request->device_token) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The device token field is required.']);
        }
        $check = Users::where('id', $request->userId)->first();
        if ($check) {
            if ($check->otp == $request->otp) {
                $data = array(
                    'id' => $check->id,
                    'firstname' => $check->first_name,
                    'lastname' => $check->last_name,
                    'email' => $check->email,
                    'dial_code' => $check->dial_code,
                    'path' => $this->profile_path,
                    'image' => $check->profile_pic,
                    'country_code' => $check->country_code,
                    'contact' => $check->contact_no
                );
                $update_user_details = array(
                    'device_type' => $request->device_type,
                    'device_token' => $request->device_token,
                    'updated_at' => Carbon::now()
                );
                $update_user = Users::where('id', $check->id)->update($update_user_details);

                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'LoggedIn Successfully', 'data' => $data]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'The otp is wrong.']);
            }
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user is not found.']);
        }
    }



    public function resend_otp(Request $request)
    {
        if (!$request->userId) {
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
        $update = Users::where('id', $request->userId)->update($otp_data);
        if ($update) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Otp sent successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong']);
        }
    }



    public function logout_user(Request $request)
    {
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }

        $update_details = array(
            'device_type' => '',
            'device_token' => '',
            'otp' => '',
        );
        $update = Users::where('id', $request->userId)->update($update_details);
        if ($update_details) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Logout successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user is not found']);
        }
    }



    public function forgot_password(Request $request)
    {
        if (!$request->email) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The email field is required.']);
        }
        $email = Hash::make($request->email);

        $checkemail = Users::where('email', $request->email)->first();
        // echo $checkemail;die;
        if ($checkemail) {

            $user_email = base64_encode($request->input('email'));
            $url = URL::to('/') . '/resetpassword_user?token=' . $email . '&email=' . $user_email;
            $data = array('email' => $user_email, 'verification_code' => $email, 'url' => $url);
            $to_email = $request->input('email');

            $mail = Mail::to($to_email)->send(new UserResetPassword(($data)));

            return response()->json(['statusCode' => 1, 'statusMessage' => 'Email Sent Successfully']);
        } else {
            return response()->json(['statusCode' => 0, 'statusMessage' => 'Email is not registered or deleted']);
        }
    }
    public function resetpassword(Request $request)
    {
        if (!empty($request->input('token'))) {
            $email = base64_decode($request->email);
            $user['user'] = Users::where('email', $email)->first();

            return view('change_user_password', $user);
        }
    }
    public function forgotpasswordupdate_api(Request $request)
    {
        $email = $request->input('email');
        $confirmpassword = Hash::make($request->input('confirmpassword'));
        $update = Users::where('email', $email)->update(['password' => $confirmpassword, 'updated_at' => Carbon::now()]);
        if ($update) {
            // return redirect('login')->with('success','Login with new password');
            return response()->json(['statusMessage' => 'Your password changed successfully']);
        } else {
            return response()->json(['statusMessage' => 'Unable to reset password']);
            // return redirect()->back()->with('error','Unable to reset password');
        }
    }


    public function update_user(Request $request)
    {
        if ($request->userId) {
            if ($request->file('profile_image')) {
                $destinationPath = public_path() . '/uploads/users/';
                $image = $request->file('profile_image');
                $main_image = md5(time() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();

                $image->move($destinationPath, $main_image);
            } else {
                $main_image = '';
            }


            $checkcar = cars::where('userId', $request->userId)->get();
            if (count($checkcar) != 0) {
                $cardata = array(
                    'userId' => $request->userId,
                    'car_name' => $request->car_name,
                    'car_model' => $request->car_model,
                    'car_year' => $request->car_year,
                    'car_transmission' => $request->car_transmission,
                    'car_fuel' => $request->car_fuel,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                );
                cars::where('userId', $request->userId)->update($cardata);
                $addcar = $checkcar[0]['id'];
            } else {
                $cardata = array(
                    'userId' => $request->userId,
                    'car_name' => $request->car_name,
                    'car_model' => $request->car_model,
                    'car_year' => $request->car_year,
                    'car_transmission' => $request->car_transmission,
                    'car_fuel' => $request->car_fuel,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                );
                $addcar = cars::insertGetId($cardata);
            }

            $data = array(
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'email' => $request->email,
                'country_code' => $request->country_code,
                'home_address' => $request->home_address,
                'work_address' => $request->work_address,
                'dial_code' => $request->dial_code,
                'username' => $request->username,
                'mycar_id' => $addcar,
                'contact_no' => $request->contact,
                'profile_pic' => $main_image,
                'role' => 'User',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            );
            $insert = Users::where('id', '=', $request->userId)->update($data);
            if ($insert) {
                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'User Updated successfully']);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
            }
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }


    public function view_profile(Request $request)
    {
        if ($request->userId) {
            $user = Users::where('id', '=', $request->userId)->first();
            if ($user) {
                $checkcar = cars::where('userId', $request->userId)->first();
                if (empty($checkcar)) {
                    $checkcar = array(
                        'userId' => $request->userId,
                        'car_name' => 0,
                        'car_model' => 0,
                        'car_year' => 0,
                        'car_transmission' => 0,
                        'car_fuel' => 0,
                    );
                }
                $data = array(
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'country_code' => $user->country_code,
                    'contact' => $user->contact_no,
                    'home_address' => $user->home_address,
                    'work_address' => $user->work_address,
                    'dial_code' => $user->dial_code,
                    'username' => $user->username,
                    'role' => 'User',
                    'car_name' => $checkcar['car_name'],
                    'car_model' => $checkcar['car_model'],
                    'car_year' => $checkcar['car_year'],
                    'car_transmission' => $checkcar['car_transmission'],
                    'car_fuel' => $checkcar['car_fuel'],
                    'profile_image' => $user->profile_pic,
                    'profile_path' => $this->profile_path,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                );

                return response()
                    ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $data]);
            } else {
                return response()
                    ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..user not registered']);
            }
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..user not registered']);
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
    public function home(Request $request)
    {

        // $category = "SELECT * FROM `categories` WHERE `status` = '1' and deleted_at IS NULL LIMIT 5";
        $category = Categories::where('status', 1)->take(9)->get();

        // $place_advertisement = $conn->query("SELECT * FROM `place_advertisement` WHERE `status` = '1' and deleted_at IS NULL order by id desc limit 1");
        $place_advertisement = PlaceAdvertisement::where('status', 1)->orderBy('id', 'desc')->first();
        // $place_advertisement_result = $place_advertisement->fetch_assoc();
        $categoryData = [];
        // if($cat_result->num_rows > 0) {
        //     $categoryData = [];
        // $i=0;
        //     while($rows = $cat_result->fetch_assoc()) {
        //    /* if($i == 3){
        //     $categoryData[$i]['id'] = $place_advertisement_result['osm_id'];
        //     $categoryData[$i]['image'] = "../uploads/place_advertisement/".$place_advertisement_result['image'];
        //     $categoryData[$i]['display_name'] = $place_advertisement_result['place_name'];
        //     $categoryData[$i]['add'] = 'true';
        //     $categoryData[$i]['type'] = $place_advertisement_result['type'];
        //     $categoryData[$i]['external_link'] = $place_advertisement_result['external_link'];
        //     }*/
        //     $rows['image'] = "../uploads/categories/".$rows['image'];
        //     $categoryData[] = $rows;
        //     $i++;
        //     }
        // }

        $count = count($category);
        for ($i = 0; $i < $count; $i++) {
            if ($i == 4) {
                // $categoryData[$i]['id'] = $place_advertisement['osm_id'];
                $categoryData[$i]['image'] = $this->advertisement_path . $place_advertisement['image'];
                $categoryData[$i]['name'] = $place_advertisement['place_name'];
                // $categoryData[$i]['add'] = 'true';
                // $categoryData[$i]['type'] = $place_advertisement['type'];
                // $categoryData[$i]['external_link'] = $place_advertisement['external_link'];
            } else {
                $categoryData[$i]['id'] = $category[$i]['id'];
                $categoryData[$i]['image'] = $this->category_image_path . $category[$i]['image'];
                $categoryData[$i]['name'] =   $category[$i]['display_name'];
            }
        }
        $categoryData[8] = array(
            'image' =>     'http://10.10.1.133:8000/akwaba/assets/img/icons/icon-8.png',
            'name' => 'Favorite',

        );
        // $categoryData = array_merge($categoryData, $eight);
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $categoryData]);
    }



    public function featured_places()
    {
        // $feature = "SELECT * FROM `featured_places` WHERE `status` = '1' and deleted_at IS NULL";
        $feature = Feature::where('status', '1')->get();
        $feature_place = array();
        foreach ($feature as $features) {
            $feature_place[] = array(
                'id' => $features->id,
                'title' => $features->title,
                'description' => strip_tags($features['description']),
                'image' => $features->image
            );
            // $feature_place[]['description'] =htmlspecialchars($features['description']);

        }
        if ($feature) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'path' => $this->featureplace_path, 'data' => $feature_place]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Unsuccessfully']);
        }
    }


    public function feature_list(Request $request)
    {
        $feature = Featureplace::where('featured_places_id', $request->featured_places_id)->where('status', '1')->get();
        $feature_place = array();
        foreach ($feature as $features) {
            $feature_place[] = array(
                'id' => $features->id,
                'title' => $features->title,
                'description' => strip_tags($features['description']),
                'image' => $features->image,
                'ratings' => $features->ratings,
                'latitude' => $features->latitude,
                'longitude' => $features->longitude
            );
        }
        if ($feature) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'path' => $this->featureplace_path, 'data' => $feature_place]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Unsuccessfully']);
        }
    }


    public function more_category()
    {
        // $feature = "SELECT * FROM `featured_places` WHERE `status` = '1' and deleted_at IS NULL";

        $more_category = Categories::where('status', '1')->get();
        // $feature_result = $conn->query($feature);
        if ($more_category) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'path' => $this->category_image_path, 'data' => $more_category]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Unsuccessfully']);
        }
    }

    public function check_user($userId)
    {
        $check = Users::where('id', $userId)->where('status', 1)->first();
        if ($check) {
            return true;
        } else {
            return false;
        }
    }


    public function sub_categories(Request $request)
    {

        $id = $_REQUEST['cat_id'];
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

            $categoryResult = DB::connection('pgsql')->select("SELECT *,osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, tags->'phone' as phone,
                tags->'name:en' as en_Name, 
                tags->'opening_hours' as opening_hours,  
                tags->'cuisine' as cuisine,  
                tags->'addr:city' as city,  
                tags->'addr:street' as street,
                tags->'description' as description,
                tags->'addr:postcode' as postcode,
                tags->'addr:country' as country,
                tags->'addr:district' as district,
                tags->'internet_access' as internet_access,
                tags->'image' as image,
                $fieldName as cat_type
                FROM planet_osm_point WHERE " . $fieldName . " IN ('" . $values . "') and name!=''");
            // print_r($categoryResult);

            // $categoryResult = pg_query($db, "SELECT osm_id,name,ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data, tags->'phone' as phone,
            // tags->'name:en' as en_Name, 
            // tags->'opening_hours' as opening_hours,  
            // tags->'cuisine' as cuisine,  
            // tags->'addr:city' as city,  
            // tags->'addr:street' as street,
            // tags->'description' as description,
            // tags->'addr:postcode' as postcode,
            // tags->'addr:country' as country,
            // tags->'addr:district' as district,
            // tags->'image' as image,
            // $fieldName as cat_type
            // FROM planet_osm_point WHERE ".$fieldName." IN ('".$values."') and name!=''");
            // $i=0;
            // foreach()
            // while($row = pg_fetch_array($categoryResult,NULL, PGSQL_ASSOC)) {
            //     $categoryData[] = $row;
            //     $categoryData[$i]['name'] = base64_encode($row['name']);
            //     $categoryData[$i]['coordinates'] = json_decode($row['geojson_data'])->coordinates;
            //     $i++;
            // }
        }
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $categoryResult]);
    }

    public function add_company(Request $request)
    {
        if (!$request->name) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The company name field is required.']);
        }

        if (!$request->area_of_activity) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The area of activity field is required.']);
        }
        if (!$request->address) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The company address field is required.']);
        }
        if (!$request->phone_number) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The mobile number field is required.']);
        }
        if (!$request->country_code) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The country code field is required.']);
        }

        if (!$request->add_comment) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The comment field is required.']);
        }
        if (!$request->website) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The website link is required.']);
        }

        if (!$request->opening_hours) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The opening hours is required.']);
        }
        if (!$request->company_url) {
            $request->company_url = 'null';
        }


        $data = array(
            'user_id' => $request->userId,
            'name' => $request->name,
            'area_of_activity' => $request->area_of_activity,
            'address' => $request->address,
            'country_code' => $request->country_code,
            'phone_number' => $request->phone_number,
            'website' => $request->website,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'opening_hours' => $request->opening_hours,
            'dail_code' => $request->dail_code,
            'company_url' => $request->company_url,
            'phone_number_comment' => $request->add_comment,
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );
        $insert = Company::insertGetId($data);
        if ($request->file('company_image')) {

            // print_r(count($request->file('company_image')));die;


            for ($i = 0; $i < count($request->file('company_image')); $i++) {
                $destinationPath = public_path() . '/uploads/company/';
                $image = $request->file('company_image')[$i];
                $main_image = md5(time() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                $image->move($destinationPath, $main_image);
                $dataimage = array(
                    'company_id' => $insert,
                    'image' => $main_image,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                );
                $query2 = CompanyImages::insert($dataimage);

                // $query2 = "INSERT INTO company_images(`company_id`, image, created_at,
                //                                         updated_at)
                //                                 VALUES ('$insert','$basename',
                //                                         '$today','$today')";
                // $result2 = mysqli_query($conn, $query2);
            }
        }
        // for ($i = 0; $i < count($request['photos']['name']); $i++) {
        //     $newfilename = "image_". rand();
        //     $extension   = pathinfo($_FILES['photos']['name'][$i], PATHINFO_EXTENSION);
        //     $basename    = $newfilename . "." . $extension;
        //     $file1       = $_FILES['photos']['name'][$i];
        //     $target_path = ".../uploads/company/" . $basename;
        //     move_uploaded_file($_FILES['photos']['tmp_name'][$i], $target_path);
        //     $query2 = "INSERT INTO company_images(`company_id`, image, created_at,
        //                                              updated_at)
        //                                     VALUES ('$last_id','$basename',
        //                                             '$today','$today')";
        //     $result2 = mysqli_query($conn, $query2);
        // }
        // print_r($insert);die;
        if ($insert) {

            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Company added successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }


    public function faq()
    {
        $faq = Faq::get();
        if ($faq) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'successfully', 'data' => $faq]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }


    public function Privacy_policy()
    {
        $Privacy_policy = Privacy_Policy::get();
        if ($Privacy_policy) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'successfully', $Privacy_policy]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }



    public function category_detail(Request $request)
    {

        if (isset($request['id'])) {
            $id = $request['id'];
            $pg_sql = DB::connection('pgsql')->select("select
                    *,
                osm_id as osmid,
                ST_AsGeoJSON(ST_Transform(way,4326)) as geoJSON_data,
                name
                from 
                public.planet_osm_point 
                WHERE osm_id=" . $id);
                if($pg_sql){
                    $osmid =  $pg_sql[0]->osmid;
                }else {
                    $osmid =  1;
                }
           
            $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
            $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
            $photos = Placephotos::where('osm_id', $osmid)->get();
            $myplace = myplaces::where('osmid', '=', $id)->where('userId', '=', $request->userId)->where('is_deleted', '=', 0)->get();
            $myrout = Saveroute::where('userId', '=', $request->userId)->where('is_deleted', '=', 0)->get();
             
            if(count($myplace) == 0){
      
                $myplace =0; 
            }else{
                $myplace = 1;
            }
            $placephotos = array();
            foreach ($photos as $image) {
                $placephotos[] = array(
                    'id' => $image['id'],
                    'path' => $this->place_photo,
                    'image' => $image['image_name']
                );
            }
            $geojson = array();
            $coordinates = array();
            for ($i=0; $i <count($pg_sql) ; $i++) { 
                $geojson[] = json_decode($pg_sql[$i]->geojson_data);
                for ($x = 0; $x < count($geojson); $x++) {
                    $coordinates[]= $geojson[$x]->coordinates;
                }   
            }
            $savedroutes = array();
            foreach($myrout as $route){
                $savedroutes[] = array('start' => explode(',',$route->start_coordinates), 'end' => explode(',',$route->end_coordinates),'id' => $route->id);
            }

            /// comparison between two coordinates /////////////////
            $save = array();
            for($n= 0; $n < count($savedroutes); $n++){
                if(round($savedroutes[$n]['start'][0]) == round($coordinates[0][1]) && round($savedroutes[$n]['start'][1]) == round($coordinates[0][0]) )
                {
                    $save = $savedroutes[$n]['id'];
                }
               else if(round($savedroutes[$n]['end'][0]) == round($coordinates[0][1]) && round($savedroutes[$n]['end'][1]) == round($coordinates[0][0])){
                    $save =  $savedroutes[$n]['id'];
                }
            }
            if(empty($save)){
                $save = 0;
            }
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'Successfully','myplace' => $myplace,'myroute' => $save, 'avg' => $avg, 'count' => $count, 'photos' => $placephotos, 'data' => $pg_sql]);
        }
    }

    public function Add_photo_place(Request $request)
    {
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        if (!$request->osmids) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The osmids field is required.']);
        }
        $UID = $request->userId;
        $osm = $request->osmids;
        if ($request->file('placephoto')) {
            for ($i = 0; $i < count($request->file('placephoto')); $i++) {
                $main_image = md5(time() . '_' . $request->file('placephoto')[$i]->getClientOriginalName()) . '.' . $request->file('placephoto')[$i]->getClientOriginalExtension();
                $target_path = "uploads/placephoto/" . $main_image;
                // $array_images[] = $main_image;
                move_uploaded_file($request->file('placephoto')[$i], $target_path);
                $data = array(
                    'userId' => $request->userId,
                    'osm_id' => $request->osmids,
                    'image_name' => $main_image
                );

                $sql = Placephotos::insertGetId($data);
            }
            // $array_name = implode(",",$array_images);
        }


        if ($sql) {
            $photos = Placephotos::where('osm_id', $osm)->get();
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'updated Successfully', 'path' => $this->place_photo, 'photos' => $photos]);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }

    public function remove_place_photo(Request $request){
        $id = $request->Id;
        $delete = Placephotos::where('id', $id)->delete();
        if ($delete) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'deleted Successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..']);
        }
    }


    public function nearbyLocation(Request $request)
    {
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
        where amenity != ''
        order by way <-> ST_Transform(ST_SetSRID(ST_Point(49.84496533870698,40.37147089250506), 4326), 3857)
        limit 15");

        $osmid = 123;
        $avg = DB::table('reviews_rating')->where('osm_id', $osmid)->avg('ratings');
        $count = DB::table('reviews_rating')->where('osm_id', $osmid)->count();
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'avg' => $avg, 'count' => $count, 'data' => $nearby]);
    }



    public function car_make()
    {
        $carmake = car_make::select('id', 'code')->get();
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $carmake]);
    }

    public function car_model(Request $request)
    {
        $carmodel = car_model::select('id', 'code')->where('make_id', $request->makeid)->get();
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'data' => $carmodel]);
    }

    public function caralldetailes()
    {
        $Fuels = array(
            '1' => 'Diesel',
            '2' => 'CNG',
            '3' => 'Bio-Diesel',
            '4' => 'LPG',
            '5' => 'Ethanol',
            '6' => 'Methanol',
            '7' => 'Petrol'
        );
        $fuels = array();
        for ($i = 1; $i <= count($Fuels); $i++) {
            $new[] = array(
                'id' => $i,
                'fule' => $Fuels[$i]
            );
        }
        /*$Fuels = array(
    'Petrol' ,
        'Diesel',
        'CNG',
        'Bio-Diesel',
    'LPG',
        'Ethanol',
        'Methanol',
    ); */


        $transmission = array(
            '1' => 'Manual transmission',
            '2' => 'Automatic transmission',
            '3' => 'Continuously variable transmission',
            '4' => 'Semi-automatic and dual-clutch transmissions'
        );

        $Transmission = array();
        for ($i = 1; $i <= count($transmission); $i++) {
            $Transmission[] = array(
                'id' => $i,
                'Transmission' => $transmission[$i]
            );
        }

        $currentYear = 2022;
        $yearFrom = 2000;
        $yearsRange = range($yearFrom, $currentYear);

        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'Fuels' => $new, 'transmission' => $Transmission, 'Year' => $yearsRange]);
    }

    public function mobileads()
    {
        $mobileds = Advertisement::select('mobile_ads')->where('mobile_ads', '!=', '')->get();
        $mobile = array();
        foreach ($mobileds as $mobi) {
            $mobile[] = array(
                'path' => $this->advertisement_path,
                'image' => $mobi['mobile_ads']
            );
        }
        return response()
            ->json(['statusCode' => 1, 'statusMessage' => 'Successfully', 'image' => $mobile]);
    }

    public function delete_account(Request $request){
        if (!$request->userId) {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'The user id field is required.']);
        }
        $delete = Users::where('id', $request->userId)->where('status', 1)->delete();
        // print_r($delete);die;
        if ($delete) {
            return response()
                ->json(['statusCode' => 1, 'statusMessage' => 'User deleted successfully']);
        } else {
            return response()
                ->json(['statusCode' => 0, 'statusMessage' => 'Something went wrong..user not registered']);
        }
    }

}
