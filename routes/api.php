<?php

use Illuminate\Http\Request;

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



Route::post('register', 'UserController@register');
Route::post('tempregister', 'UserController@tempregister');
Route::post('checkverification', 'UserController@checkverification');
Route::post('forgotpassword', 'UserController@forgotpassword');
Route::post('update_profile', 'UserController@update_profile');
Route::post('getuserDetail', 'UserController@getuserDetail');
Route::post('login', 'UserController@login');
Route::post('logout', 'UserController@logout');
Route::post('checkuser', 'UserController@checkuser');
Route::post('verifyotp', 'UserController@verifyotp');
Route::post('verifyotpuser', 'UserController@verifyotpuser');
Route::post('resetotp', 'UserController@resetotp');
Route::post('login_reset_otp', 'UserController@login_reset_otp');
Route::post('getverificationcode', 'UserController@getverificationcode');
Route::post('resetpassword', 'UserController@resetpassword');
Route::post('mailcheck', 'UserController@sendmail');
Route::post('updatepassword', 'UserController@updatepassword');
Route::post('usercontact', 'UserController@usercontact');
Route::post('upload_profile_picture', 'UserController@upload_profile_picture');
Route::get('testxml', 'UserController@testxml');
Route::post('upload_album_picture', 'DatingController@upload_album_picture');
Route::post('getalbumList', 'DatingController@getalbumList');
Route::post('Image_Like_Dislike', 'DatingController@Image_Like_Dislike');
Route::post('get_user_list', 'DatingController@get_user_list');
Route::get('get_city_list', 'DatingController@get_city_list');
Route::get('get_zodiac_list', 'DatingController@get_zodiac_list');
Route::get('education_list', 'DatingController@education_list');
