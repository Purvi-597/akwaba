<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */


use App\Http\Controllers\SubcategoriesController;


// Route::group(['prefix'=>'{locale}'], function(){
// Route::get('/', function(){
// 	return view('sidebar');
// })->middleware('setLocale');	
// });



Auth::routes();
Route::get('lang/home', 'LangController@index');
Route::post('lang/change', 'LangController@change')->name('changeLang');
Route::get('pages-login', 'SkoteController@index');
Route::get('pages-login-2', 'SkoteController@index');
Route::get('pages-register', 'SkoteController@index');
Route::get('pages-register-2', 'SkoteController@index');
Route::get('pages-recoverpw', 'SkoteController@index');
Route::get('pages-recoverpw-2', 'SkoteController@index');
Route::get('pages-lock-screen', 'SkoteController@index');
Route::get('pages-lock-screen-2', 'SkoteController@index');
Route::get('pages-404', 'SkoteController@index');
Route::get('pages-500', 'SkoteController@index');
Route::get('pages-main', 'SkoteController@index');
Route::get('pages-comingsoon', 'SkoteController@index');

Route::get('create_test', 'SkoteController@create');

Route::post('keep-live', 'SkoteController@live');

// Route::group(['prefix'=>'{locale}'], function(){
	// Route::get('/', function(){
	// 	return view('sidebar');
	// })->middleware('setLocale');	->middleware('setLocale');
	Route::get('/', 'HomeController@root');

//});
Route::get('/firebase', 'UsersController@pushfirebase');
Route::post('/save-token', 'UsersController@saveToken')->name('save-token');


//Route::post('/save-token', [App\Http\Controllers\UsersController::class, 'saveToken'])->name('save-token');

Route::post('/send-notification', [App\Http\Controllers\UsersController::class, 'sendNotification'])->name('send.notification');





Route::get('text-on-image','ImageController@textOnImage')->name('textOnImage');
Route::get('mail/send', 'MailController@send');
Route::post('/mailcheck', 'SkoteController@sendmail')->name('mailcheck');

Route::post('/verifypassword', 'SkoteController@verifypass')->name('verifypassword');
Route::post('/remember_me', 'LoginController@remember_me')->name('remember_me');
// Verify email id
Route::get('verifyemail',  'UserController@verifyemail')->name('verifyemail');

//Forgot Password Reset
Route::post('send_mail',  'UserController@send_mail')->name('send_mail');
Route::get('resetpassword',  'UserController@resetpassword')->name('resetpassword');
Route::post('updatepassword',  'UserController@updatepassword')->name('updatepassword');
Route::post('forgotpasswordupdate',  'UserController@forgotpasswordupdate')->name('forgotpasswordupdate');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
	
	
//Route::get('/', 'HomeController@root')->name('home')->middleware('setLocale');

	/* CMS Management */
	// About Us
	Route::get('about_us', 'AboutusController@index')->name('about_us.index');
	Route::post('about_us', 'AboutusController@update')->name('about_us.update');

	// Privacy_policy
	Route::get('privacy_policy', 'PrivacypolicyController@index')->name('privacy_policy.index');
	Route::post('privacy_policy', 'PrivacypolicyController@update')->name('privacy_policy.update');

	// Terms & Conditions
	Route::get('terms_conditions', 'TermsconditionsController@index')->name('terms_conditions.index');
	Route::post('terms_conditions', 'TermsconditionsController@update')->name('terms_conditions.update');

	// Contact Us
	Route::get('contact_us', 'ContactusController@index')->name('contact_us.index');
	Route::post('contact_us', 'ContactusController@update')->name('contact_us.update');

	
	// Settings
	Route::get('settings', 'SettingController@index')->name('settings.index');
	Route::post('settings', 'SettingController@update')->name('settings.update');
	Route::post('fetchState', 'SettingController@fetchState')->name('fetchState');
    Route::post('fetchCity', 'SettingController@fetchCity')->name('fetchCity');
    Route::post('settings', 'SettingController@update')->name('settings.update');
	/* Archivos urls */

   

	/* Users */

	
	Route::get('users', 'UserController@index')->name('users.index')->middleware('setLocale');

	Route::get('users/create', 'UserController@create')->name('users.create')->middleware('setLocale');
	Route::post('users/store', 'UserController@store')->name('users.store')->middleware('setLocale');
	Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit')->middleware('setLocale');
	Route::get('users/view/{id}', 'UserController@view')->name('users.view')->middleware('setLocale');
	Route::post('users/update/{id}', 'UserController@update')->name('users.update')->middleware('setLocale');
	Route::post('deleteuser', 'UserController@delete')->name('deleteuser')->middleware('setLocale');
	Route::post('users_status', 'UserController@users_status')->name('users_status')->middleware('setLocale');
	Route::post('userimagedelete', 'UserController@userimagedelete')->name('userimagedelete')->middleware('setLocale');	
	Route::post('checkuseremail', 'UserController@checkuseremail')->name('checkuseremail')->middleware('setLocale');	

	 /* Category */
	Route::get('categories', 'CategoriesController@index')->name('categories.index')->middleware('setLocale');
	Route::get('categories/create', 'CategoriesController@create')->name('categories.create')->middleware('setLocale');
	Route::post('categories/store', 'CategoriesController@store')->name('categories.store')->middleware('setLocale');
	Route::get('categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit')->middleware('setLocale');
    Route::post('categories/update/{id}', 'CategoriesController@update')->name('categories.update')->middleware('setLocale');
    Route::get('categories/view/{id}', 'CategoriesController@view')->name('categories.view')->middleware('setLocale');
    Route::post('deletecategories', 'CategoriesController@delete')->name('deletecategories')->middleware('setLocale');
    Route::post('categories_status', 'CategoriesController@categories_status')->name('categories_status')->middleware('setLocale');
	Route::post('categoriesimagedelete', 'CategoriesController@categoriesimagedelete')->name('categoriesimagedelete')->middleware('setLocale');

	/* Sub Category */
	Route::get('subcategories', 'SubCategoriesController@index')->name('subcategories.index')->middleware('setLocale');
	Route::get('subcategories/create', 'SubCategoriesController@create')->name('subcategories.create')->middleware('setLocale');
	Route::post('subcategories/store', 'SubCategoriesController@store')->name('subcategories.store')->middleware('setLocale');
	Route::get('subcategories/edit/{id}', 'SubCategoriesController@edit')->name('subcategories.edit')->middleware('setLocale');
    Route::post('subcategories/update/{id}', 'SubCategoriesController@update')->name('subcategories.update')->middleware('setLocale');
    Route::get('subcategories/view/{id}', 'SubCategoriesController@view')->name('subcategories.view')->middleware('setLocale');
    Route::post('deletesubcategories', 'SubCategoriesController@delete')->name('deletesubcategories')->middleware('setLocale');
    Route::post('subcategories_status', 'SubCategoriesController@subcategories_status')->name('subcategories_status')->middleware('setLocale');
	Route::post('subcategoriesimagedelete', 'SubCategoriesController@subcategoriesimagedelete')->name('subcategoriesimagedelete')->middleware('setLocale');

	/* Advertisement */
	Route::get('advertisement', 'AdvertisementController@index')->name('advertisement.index')->middleware('setLocale');
	Route::get('advertisement/create', 'AdvertisementController@create')->name('advertisement.create')->middleware('setLocale');
	Route::post('advertisement/store', 'AdvertisementController@store')->name('advertisement.store')->middleware('setLocale');
	Route::get('advertisement/edit/{id}', 'AdvertisementController@edit')->name('advertisement.edit')->middleware('setLocale');
    Route::post('advertisement/update/{id}', 'AdvertisementController@update')->name('advertisement.update')->middleware('setLocale');
    Route::get('advertisement/view/{id}', 'AdvertisementController@view')->name('advertisement.view')->middleware('setLocale');
    Route::post('deleteadvertisement', 'AdvertisementController@delete')->name('deleteadvertisement')->middleware('setLocale');
    Route::post('advertisement_status', 'AdvertisementController@advertisement_status')->name('advertisement_status')->middleware('setLocale');
	Route::post('advertisementPathimagedelete', 'AdvertisementController@advertisementPathimagedelete')->name('advertisementPathimagedelete')->middleware('setLocale');


	/* Feature Places*/
	Route::get('feature', 'FeatureController@index')->name('feature.index')->middleware('setLocale');
	Route::get('feature/create', 'FeatureController@create')->name('feature.create')->middleware('setLocale');
	Route::post('feature/store', 'FeatureController@store')->name('feature.store')->middleware('setLocale');
	Route::get('feature/edit/{id}', 'FeatureController@edit')->name('feature.edit')->middleware('setLocale');
    Route::post('feature/update/{id}', 'FeatureController@update')->name('feature.update')->middleware('setLocale');
    Route::get('feature/view/{id}', 'FeatureController@view')->name('feature.view')->middleware('setLocale');
    Route::post('deletefeature', 'FeatureController@delete')->name('deletefeature')->middleware('setLocale');
    Route::post('feature_status', 'FeatureController@feature_status')->name('feature_status')->middleware('setLocale');
	Route::post('featureimagedelete', 'FeatureController@featureimagedelete')->name('featureimagedelete')->middleware('setLocale');

	/* Feature Places List*/
	Route::get('feature_list', 'FeatureplaceController@index')->name('feature_list.index')->middleware('setLocale');
	Route::get('feature_list/create', 'FeatureplaceController@create')->name('feature_list.create')->middleware('setLocale');
	Route::post('feature_list/store', 'FeatureplaceController@store')->name('feature_list.store')->middleware('setLocale');
	Route::get('feature_list/edit/{id}', 'FeatureplaceController@edit')->name('feature_list.edit')->middleware('setLocale');
    Route::post('feature_list/update/{id}', 'FeatureplaceController@update')->name('feature_list.update')->middleware('setLocale');
    Route::get('feature_list/view/{id}', 'FeatureplaceController@view')->name('feature_list.view')->middleware('setLocale');
    Route::post('deletefeature_list', 'FeatureplaceController@delete')->name('deletefeature_list')->middleware('setLocale');
    Route::post('feature_list_status', 'FeatureplaceController@feature_status')->name('feature_list_status')->middleware('setLocale');
	Route::post('feature_listimagedelete', 'FeatureplaceController@featureimagedelete')->name('feature_listimagedelete')->middleware('setLocale');


	/* Feature Places text*/
	Route::get('featuretext', 'FeaturetextController@index')->name('featuretext.index')->middleware('setLocale');
	Route::get('featuretext/create', 'FeaturetextController@create')->name('featuretext.create')->middleware('setLocale');
	Route::post('featuretext/store', 'FeaturetextController@store')->name('featuretext.store')->middleware('setLocale');
	Route::get('featuretext/edit/{id}', 'FeaturetextController@edit')->name('featuretext.edit')->middleware('setLocale');
    Route::post('featuretext/update/{id}', 'FeaturetextController@update')->name('featuretext.update')->middleware('setLocale');
    Route::get('featuretext/view/{id}', 'FeaturetextController@view')->name('featuretext.view')->middleware('setLocale');
    Route::post('deletefeaturetext', 'FeaturetextController@delete')->name('deletefeaturetext')->middleware('setLocale');
    Route::post('featuretext_status', 'FeaturetextController@feature_status')->name('featuretext_status')->middleware('setLocale');
     

	/*Passwoed*/
	Route::get('editpassword', 'EditpasswordController@index')->name('editpassword.index')->middleware('setLocale');
	Route::post('editpassword/edit', 'EditpasswordController@edit')->name('editpassword.edit')->middleware('setLocale');
	Route::get('checkoldpassword', 'EditpasswordController@checkoldpassword')->name('checkoldpassword')->middleware('setLocale');

});

