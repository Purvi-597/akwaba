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
Auth::routes();

//Route::get('lang/home', 'LangController@index');
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


Route::get('/', 'HomeController@root')->middleware('setLocale');
Route::get('/admin', 'HomeController@root')->name('home');
Route::get('/index', 'HomeController@index');
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



	/* CMS Management */
	// About Us
	Route::get('about_us', 'AboutusController@index')->name('about_us.index');
	Route::post('about_us', 'AboutusController@update')->name('about_us.update');

	// // Privacy_policy
	// Route::get('privacy_policy', 'PrivacypolicyController@index')->name('privacy_policy.index');
	// Route::post('privacy_policy', 'PrivacypolicyController@update')->name('privacy_policy.update');

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
	Route::get('users', 'UserController@index')->name('users.index');
	Route::get('users/create', 'UserController@create')->name('users.create');
	Route::post('users/store', 'UserController@store')->name('users.store');
	Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');
	Route::get('users/view/{id}', 'UserController@view')->name('users.view');
	Route::post('users/update/{id}', 'UserController@update')->name('users.update');
	Route::post('deleteuser', 'UserController@delete')->name('deleteuser');
	Route::post('users_status', 'UserController@users_status')->name('users_status');
	Route::post('userimagedelete', 'UserController@userimagedelete')->name('userimagedelete');	
	Route::post('checkuseremail', 'UserController@checkuseremail')->name('checkuseremail');	
	/* Users */

	 /* Category */
	Route::get('categories', 'CategoriesController@index')->name('categories.index');
	Route::get('categories/create', 'CategoriesController@create')->name('categories.create');
	Route::post('categories/store', 'CategoriesController@store')->name('categories.store');
	Route::get('categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
    Route::post('categories/update/{id}', 'CategoriesController@update')->name('categories.update');
    Route::get('categories/view/{id}', 'CategoriesController@view')->name('categories.view');
    Route::post('deletecategories', 'CategoriesController@delete')->name('deletecategories');
    Route::post('categories_status', 'CategoriesController@categories_status')->name('categories_status');
	Route::post('categoriesimagedelete', 'CategoriesController@categoriesimagedelete')->name('categoriesimagedelete');

	/* Sub Category */
	Route::get('subcategories', 'SubCategoriesController@index')->name('subcategories.index');
	Route::get('subcategories/create', 'SubCategoriesController@create')->name('subcategories.create');
	Route::post('subcategories/store', 'SubCategoriesController@store')->name('subcategories.store');
	Route::get('subcategories/edit/{id}', 'SubCategoriesController@edit')->name('subcategories.edit');
    Route::post('subcategories/update/{id}', 'SubCategoriesController@update')->name('subcategories.update');
    Route::get('subcategories/view/{id}', 'SubCategoriesController@view')->name('subcategories.view');
    Route::post('deletesubcategories', 'SubCategoriesController@delete')->name('deletesubcategories');
    Route::post('subcategories_status', 'SubCategoriesController@subcategories_status')->name('subcategories_status');
	Route::post('subcategoriesimagedelete', 'SubCategoriesController@subcategoriesimagedelete')->name('subcategoriesimagedelete');

	/* Advertisement */
	Route::get('advertisement', 'AdvertisementController@index')->name('advertisement.index');
	Route::get('advertisement/create', 'AdvertisementController@create')->name('advertisement.create');
	Route::post('advertisement/store', 'AdvertisementController@store')->name('advertisement.store');
	Route::get('advertisement/edit/{id}', 'AdvertisementController@edit')->name('advertisement.edit');
    Route::post('advertisement/update/{id}', 'AdvertisementController@update')->name('advertisement.update');
    Route::get('advertisement/view/{id}', 'AdvertisementController@view')->name('advertisement.view');
    Route::post('deleteadvertisement', 'AdvertisementController@delete')->name('deleteadvertisement');
    Route::post('advertisement_status', 'AdvertisementController@advertisement_status')->name('advertisement_status');
	Route::post('advertisementPathimagedelete', 'AdvertisementController@advertisementPathimagedelete')->name('advertisementPathimagedelete');

	/* Place Advertisement */
	Route::get('place_advertisement', 'PlaceAdvertisementController@index')->name('place_advertisement.index');
	Route::get('place_advertisement/create', 'PlaceAdvertisementController@create')->name('place_advertisement.create');
	Route::post('place_advertisement/store', 'PlaceAdvertisementController@store')->name('place_advertisement.store');
	Route::get('place_advertisement/edit/{id}', 'PlaceAdvertisementController@edit')->name('place_advertisement.edit');
    Route::post('place_advertisement/update/{id}', 'PlaceAdvertisementController@update')->name('place_advertisement.update');
    Route::get('place_advertisement/view/{id}', 'PlaceAdvertisementController@view')->name('place_advertisement.view');
    Route::post('delete_place_advertisement', 'PlaceAdvertisementController@delete')->name('deleteplaceadvertisement');
    Route::post('place_advertisement_status', 'PlaceAdvertisementController@sub_categories_status')->name('place_advertisement_status');
	Route::post('placeAdvertisementPathimagedelete', 'PlaceAdvertisementController@advertisementPathimagedelete')->name('placeAdvertisementPathimagedelete');


	/* Feature Places*/
	Route::get('feature', 'FeatureController@index')->name('feature.index');
	Route::get('feature/create', 'FeatureController@create')->name('feature.create');
	Route::post('feature/store', 'FeatureController@store')->name('feature.store');
	Route::get('feature/edit/{id}', 'FeatureController@edit')->name('feature.edit');
    Route::post('feature/update/{id}', 'FeatureController@update')->name('feature.update');
    Route::get('feature/view/{id}', 'FeatureController@view')->name('feature.view');
    Route::post('deletefeature', 'FeatureController@delete')->name('deletefeature');
    Route::post('feature_status', 'FeatureController@feature_status')->name('feature_status');
	Route::post('featureimagedelete', 'FeatureController@featureimagedelete')->name('featureimagedelete');

	/* Feature Places List*/
	Route::get('feature_list', 'FeatureplaceController@index')->name('feature_list.index');
	Route::get('feature_list/create', 'FeatureplaceController@create')->name('feature_list.create');
	Route::post('feature_list/store', 'FeatureplaceController@store')->name('feature_list.store');
	Route::get('feature_list/edit/{id}', 'FeatureplaceController@edit')->name('feature_list.edit');
    Route::post('feature_list/update/{id}', 'FeatureplaceController@update')->name('feature_list.update');
    Route::get('feature_list/view/{id}', 'FeatureplaceController@view')->name('feature_list.view');
    Route::post('deletefeature_list', 'FeatureplaceController@delete')->name('deletefeature_list');
    Route::post('feature_list_status', 'FeatureplaceController@feature_status')->name('feature_list_status');
	Route::post('feature_listimagedelete', 'FeatureplaceController@featureimagedelete')->name('feature_listimagedelete');


	/* Feature Places text*/
	Route::get('featuretext', 'FeaturetextController@index')->name('featuretext.index')->middleware('setLocale');
	Route::get('featuretext/create', 'FeaturetextController@create')->name('featuretext.create')->middleware('setLocale');
	Route::post('featuretext/store', 'FeaturetextController@store')->name('featuretext.store')->middleware('setLocale');
	Route::get('featuretext/edit/{id}', 'FeaturetextController@edit')->name('featuretext.edit')->middleware('setLocale');
    Route::post('featuretext/update/{id}', 'FeaturetextController@update')->name('featuretext.update')->middleware('setLocale');
    Route::get('featuretext/view/{id}', 'FeaturetextController@view')->name('featuretext.view')->middleware('setLocale');
    Route::post('deletefeaturetext', 'FeaturetextController@delete')->name('deletefeaturetext')->middleware('setLocale');
    Route::post('featuretext_status', 'FeaturetextController@feature_status')->name('featuretext_status')->middleware('setLocale');
     

	// /* Turist Places */
	//  Route::get('privacy_policy', 'PrivacyPolicyController@index')->name('privacy_policy.index.edit');
	// Route::get('privacy_policy/edit', 'PrivacyPolicyController@edit')->name('privacy_policy.edit');
 	// Route::post('privacy_policy/update/', 'PrivacyPolicyController@update')->name('privacy_policy.update');
    // // Route::get('privacy_policy/view/{id}', 'PrivacyPolicyController@view')->name('privacy_policy.view');


	/* Privacy_policy   */
	 Route::get('privacy_policy', 'PrivacypolicyController@index')->name('privacy_policy.index');
	 Route::get('privacy_policy/edit', 'PrivacypolicyController@edit')->name('privacy_policy.edit');
	 Route::post('privacy_policy/update', 'PrivacypolicyController@update')->name('privacy_policy.update');


	 /*License */
	 
	 Route::get('license', 'LicenseController@index')->name('license.index');
	 Route::get('license/edit', 'LicenseController@edit')->name('license.edit');
	 Route::post('license/update', 'LicenseController@update')->name('license.update');


	 /* Rating */ 
	 Route::get('rating', 'RatingReviewsController@index')->name('rating.index');

	/*Notes */ 
	 Route::get('notes', 'NotesController@index')->name('notes.index');

	/*Feedback */ 
	 Route::get('feedback', 'FeedbackController@index')->name('feedback.index');



	Route::get('editpassword', 'EditpasswordController@index')->name('editpassword.index');
	Route::post('editpassword/edit', 'EditpasswordController@edit')->name('editpassword.edit');
	Route::get('checkoldpassword', 'EditpasswordController@checkoldpassword')->name('checkoldpassword');
	

	/* Photo */
	Route::get('photos', 'PhotosController@index')->name('photos.index');
	Route::get('photos/create', 'PhotosController@create')->name('photos.create');
	Route::post('photos/store', 'PhotosController@store')->name('photos.store');
	Route::get('photos/edit/{id}', 'PhotosController@edit')->name('photos.edit');
    Route::post('photos/update/{id}', 'PhotosController@update')->name('photos.update');
    Route::get('photos/view/{id}', 'PhotosController@view')->name('photos.view');
    Route::post('deletephotos', 'PhotosController@delete')->name('deletephotos');
    Route::post('photos_status', 'PhotosController@status')->name('photos_status');


	/* Feature Places text*/
	Route::get('faq', 'FaqController@index')->name('faq.index')->middleware('setLocale');
	Route::get('faq/create', 'FaqController@create')->name('faq.create')->middleware('setLocale');
	Route::post('faq/store', 'FaqController@store')->name('faq.store')->middleware('setLocale');
	Route::get('faq/edit/{id}', 'FaqController@edit')->name('faq.edit')->middleware('setLocale');
    Route::post('faq/update/{id}', 'FaqController@update')->name('faq.update')->middleware('setLocale');
    Route::get('faq/view/{id}', 'FaqController@view')->name('faq.view')->middleware('setLocale');
    Route::post('deletefaq', 'FaqController@delete')->name('deletefaq')->middleware('setLocale');
    Route::post('faq_status', 'FaqController@faq_status')->name('faq_status')->middleware('setLocale');

	
});
