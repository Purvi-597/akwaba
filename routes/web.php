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

Route::get('/', 'HomeController@root')->name('home');
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
    Route::post('advertisement_status', 'AdvertisementController@sub_categories_status')->name('advertisement_status');
	Route::post('advertisementPathimagedelete', 'AdvertisementController@advertisementPathimagedelete')->name('advertisementPathimagedelete');


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


	Route::get('editpassword', 'EditpasswordController@index')->name('editpassword.index');
	Route::post('editpassword/edit', 'EditpasswordController@edit')->name('editpassword.edit');
	Route::get('checkoldpassword', 'EditpasswordController@checkoldpassword')->name('checkoldpassword');

});
