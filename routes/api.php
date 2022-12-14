<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//  return $request->user();
//});



// Route::post('register', 'UserController@register');
// Route::post('tempregister', 'UserController@tempregister');
// Route::post('checkverification', 'UserController@checkverification');
// Route::post('forgotpassword', 'UserController@forgotpassword');
// Route::post('update_profile', 'UserController@update_profile');
// Route::post('getuserDetail', 'UserController@getuserDetail');
// Route::post('login', 'UserController@login');
// Route::post('logout', 'UserController@logout');
// Route::post('checkuser', 'UserController@checkuser');
// Route::post('verifyotp', 'UserController@verifyotp');
// Route::post('verifyotpuser', 'UserController@verifyotpuser');
// Route::post('resetotp', 'UserController@resetotp');
// Route::post('login_reset_otp', 'UserController@login_reset_otp');
// Route::post('getverificationcode', 'UserController@getverificationcode');
// Route::post('resetpassword', 'UserController@resetpassword');
// Route::post('mailcheck', 'UserController@sendmail');
// Route::post('updatepassword', 'UserController@updatepassword');
// Route::post('usercontact', 'UserController@usercontact');
// Route::post('upload_profile_picture', 'UserController@upload_profile_picture');
// Route::get('testxml', 'UserController@testxml');
// Route::post('upload_album_picture', 'DatingController@upload_album_picture');
// Route::post('getalbumList', 'DatingController@getalbumList');
// Route::post('Image_Like_Dislike', 'DatingController@Image_Like_Dislike');
// Route::post('get_user_list', 'DatingController@get_user_list');
// Route::get('get_city_list', 'DatingController@get_city_list');
// Route::get('get_zodiac_list', 'DatingController@get_zodiac_list');
// Route::get('education_list', 'DatingController@education_list');

Route::post('register', 'API\UserController@register');
Route::post('login', 'API\UserController@login');
// Route::post('signupotp', 'API\UserController@signupotp');
Route::post('verify_otp', 'API\UserController@verify_otp');
Route::post('logout_user', 'API\UserController@logout_user');
Route::post('resend_otp', 'API\UserController@resend_otp');
Route::post('forgot_password',  'API\UserController@forgot_password');
Route::post('demo',  'API\UserController@demo');
Route::get('delete_account',  'API\UserController@delete_account');


/// category data //////////////////////////////////////////////////
Route::post('category_data',  'API\UserController@category_data');
Route::post('Main_category',  'API\UserController@Main_category');
Route::post('category_detail',  'API\UserController@category_detail');
Route::get('more_category',  'API\UserController@more_category');
Route::post('sub_categories',  'API\UserController@sub_categories');

/// user profile //////////////////////////////////////////////////
Route::get('home',  'API\UserController@home');
Route::post('update_user',  'API\UserController@update_user');
Route::get('view_profile',  'API\UserController@view_profile');

//// other routes //////////////////////////////////////////////////
Route::get('featured_places',  'API\UserController@featured_places');
Route::post('feature_list',  'API\UserController@feature_list');
Route::post('add_company',  'API\UserController@add_company');
Route::get('faq',  'API\UserController@faq');
Route::get('Privacy_policy',  'API\UserController@Privacy_policy');
Route::get('nearbyLocation',  'API\UserController@nearbyLocation');
Route::post('Add_photo_place',  'API\UserController@Add_photo_place');
Route::get('mobileads',  'API\UserController@mobileads');
Route::get('remove_place_photo',  'API\UserController@remove_place_photo');
Route::get('myReviews',  'API\UserController@myReviews');
Route::get('my_photos',  'API\UserController@my_photos');


///// saved routes --------------------------------
Route::post('savedroutes/store',  'API\savedroutes@store');
Route::get('savedroutes/show',  'API\savedroutes@show');
Route::post('savedroutes/delete',  'API\savedroutes@delete');
Route::post('savedroutes/destroy',  'API\savedroutes@destroy');
Route::get('savedroutes/checkroute',  'API\savedroutes@checkroute');

///// saved places --------------------------------
Route::post('mypalces/store',  'API\Mypalces@store');
Route::get('mypalces/show',  'API\Mypalces@show');
Route::post('mypalces/delete',  'API\Mypalces@delete');
Route::post('mypalces/destroy',  'API\Mypalces@destroy');

///// add review --------------------------------
Route::get('addreview',  'API\Addreview@index');
Route::post('addreview/store',  'API\Addreview@store');
Route::post('addreview/show',  'API\Addreview@show');
Route::post('addreview/update',  'API\Addreview@update');
Route::post('addreview/destroy',  'API\Addreview@destroy');
Route::post('addreview/addreviewphotos',  'API\Addreview@addreviewphotos');
Route::get('addreview/delete_review_photos',  'API\Addreview@delete_review_photos');
Route::post('addreview/Report_review',  'API\Addreview@Report_review');
Route::post('addreview/like_review',  'API\Addreview@like_review');

///// car details --------------------------------
Route::get('car_make',  'API\UserController@car_make');
Route::get('car_model',  'API\UserController@car_model');
Route::get('caralldetailes',  'API\UserController@caralldetailes');


/// SearchApi //////////////////////////////////////////////////////////
Route::post('search/index',  'API\SearchApi@index');
Route::post('search/simplefileter',  'API\SearchApi@simplefileter');
Route::get('search/Category',  'API\SearchApi@Category');
Route::post('search/Subcategories',  'API\SearchApi@Subcategories');
Route::post('search/facilities',  'API\SearchApi@facilities');
Route::post('search/nearbysearch',  'API\SearchApi@nearbysearch');
Route::post('search/simplesearch',  'API\SearchApi@simplesearch');
Route::get('search/Search',  'API\SearchApi@Search');
Route::get('search/metrostations',  'API\SearchApi@metrostations');

//// Layes api //////////////////////////////////////////////////////////
Route::get('Places/Metro',  'API\Places@Metro');
Route::get('Places/Tourism',  'API\Places@Tourism');
Route::get('Places/Parking',  'API\Places@Parking');
Route::get('Places/Photos',  'API\Places@Photos');

///////////////////// Feedback //////////////////////////////////////////////////////////
Route::get('feedback',  'API\Addfeedback@index');
Route::post('feedback/store',  'API\Addfeedback@store');


////// claim organization //////////////////////////////////
Route::post('Claimorgnizatioon/store',  'API\Claimorgnizatioon@store');
Route::post('Claimorgnizatioon/PromotOrganisation',  'API\Claimorgnizatioon@PromotOrganisation');


////////// Price for place //////////////////////////////////
Route::get('Pricingforplace',  'API\UserController@Pricingforplace');

/// my address //////////////////////////////
Route::get('MyAddress',  'API\MyAddress@show');
Route::post('MyAddress/create',  'API\MyAddress@store');
Route::get('MyAddress/delete',  'API\MyAddress@delete');
