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

Route::get('/', 'InterfaceController@index');
// routes of InterfaceController

Route::get('about', 'InterfaceController@about');
Route::get('contact', 'InterfaceController@contact');
Route::get('faq', 'InterfaceController@faq');
Route::get('terms', 'InterfaceController@terms');
Route::get('activation/{id}/{activationCode}', 'UserController@activation');


Route::post('/language','LanguageController@changeLanguage');
Route::get('/language','LanguageController@changeLanguage');


Route::get('/home', 'HomeController@index')->name('home');

/****** front auth  routes *****************************************/
Auth::routes();
Route::get('/signin','InterfaceController@loginForm');
Route::get('/signup','InterfaceController@registerForm');
//Route::post('register', 'Auth\RegisterController@register');

//******************************************************************//


// routes of UserController
Route::resource('/user', 'UserController');
Route::get('/profile', 'UserController@profile');
Route::post('/change_avatar', 'UserController@changeAvatar');
Route::post('/password', 'UserController@changePassword');
Route::get('/allUser/{role}', 'UserController@allUsers');
Route::post('/deleteUser/{id}', 'UserController@destroy');
Route::post('/activateUser/{id}', 'UserController@activate');
Route::get('/addUser', 'UserController@addUser');
Route::post('/addUser', 'UserController@store');
Route::post('/editUser/{id}', 'UserController@update');
Route::post('/user/{id}/location', 'UserController@changeLocation');




// routes of InboxController
Route::get('/inbox', 'InboxController@inbox');
Route::get('/inboxDetail/{id}', 'InboxController@inboxDetail');
Route::get('/compose', 'InboxController@compose');
Route::post('/reply', 'InboxController@reply');
Route::post('/sendMessage', 'InboxController@sendMessage');


// routes of SmsController
Route::get('/sms', 'SmsController@index');
Route::get('/myContacts', 'SmsController@myContacts');
Route::get('/templateSms', 'SmsController@templateSms');
Route::post('/addContact', 'SmsController@addContact');
Route::post('/editContact/{id}', 'SmsController@editContact');
Route::post('/deleteContact/{id}', 'SmsController@deleteContact');
Route::post('/sendSms', 'SmsController@sendSms');
Route::post('/addTemplateSms', 'SmsController@addTemplateSms');
Route::post('/editTemplateSms/{id}', 'SmsController@editTemplateSms');
Route::post('/deleteTemplateSms/{id}', 'SmsController@deleteTemplateSms');

Route::get('landingCarousel', 'HomeController@landingCarousel');
Route::post('imageCarousel', 'HomeController@createCarousel');
Route::patch('imageCarousel/{id}', 'HomeController@editCarousel');
Route::delete('imageCarousel/{id}', 'HomeController@deleteCarousel');


// routes of PermissionController
Route::get('permissions/', 'PermissionController@index');
Route::get('permissionsOf/{role}', 'PermissionController@permissionsOf');
Route::post('updatePermissionsOf/{role}', 'PermissionController@updatePermissionsOf');


// principal settings
Route::get('/principalSettings', 'SettingsController@principalSettings');
Route::post('/savePrincipalSettings/{id}', 'SettingsController@savePrincipalSettings');
Route::post('/saveTerms/{id}', 'SettingsController@saveTerms');
Route::get('/staticTerms', 'SettingsController@staticTerms');


// static pages

Route::get('/staticPages', 'SettingsController@staticPages');
Route::post('/saveStaticPages/{id}', 'SettingsController@saveStaticPages');


//routes of workers


//settings
Route::get('recoverPwd', function () {
    return view('auth.recoverPwd');
});
Route::get('403', function () {
    return view('dashboard.page.403');
});

Route::post('readNotification', 'UserController@readNotification');


/*** social auth  ****/
Route::prefix('auth')->group(function (){
    Route::get('/{provider}', 'SocialAuthController@redirectToProvider');
    Route::get('/{provider}/callback', 'SocialAuthController@handleProviderCallback');
});

/*********** admin routes (new ) **********************/
Route::prefix('admin')->group(function () {

    /********** school stages / location *******/
    Route::resource('/crud/{class}/resource/','CrudController');
});


/********** Student Routes ********************/
Route::prefix('student')->group(function () {

    /********** school stages / location *******/
    Route::get('/calender','StudentController@calender');
    Route::get('/terms','StudentController@terms');
    Route::get('/searchTeacher/{method}','StudentController@searchTeacher');
    Route::get('/{id}/school-info', 'StudentController@getSchoolInfo');
    Route::post('/{id}/school-info', 'StudentController@postSchoolInfo');
});

/********** teachers Routes ********************/
Route::prefix('teacher')->group(function () {
    /**********  *******/
    Route::get('/','TeacherController@index');
    Route::get('/financialDetails','TeacherController@financialDetails');
    Route::get('/terms','TeacherController@terms');
    Route::get('/{id}/profile','TeacherController@profile');
    Route::get('/teaching-info', 'TeacherController@getTeachingInfo');
    Route::get('{id}/selected-teaching-info', 'TeacherController@getSelectedTeachingInfo');
    Route::post('{id}/selected-teaching-info', 'TeacherController@postSelectedTeachingInfo');

});
/********** parents Routes ********************/
Route::prefix('parent')->group(function () {
    /**********  *******/
    Route::get('/terms','sParentController@terms');
    Route::get('/students','sParentController@students');
    Route::get('/addStudent/{method}','sParentController@addStudent');
});

/****** deals ****/
Route::get('previousTeaching/{user}','DealController@index');
Route::get('testApi',function (){
    return response()->json([
        'msg' => 'ok'
    ]);
});
Route::post('testApi',function (Request $request){
    return response()->json([
        'request' => $request
    ]);
});




// language for vue
// Localization
Route::get('/js/lang.js', function () {
    //Cache::clear();
    $strings = Cache::rememberForever('lang.js', function () {
        $lang = config('app.locale');

        $files   = glob(resource_path('lang/' . $lang . '/*.php'));
        $strings = [];

        foreach ($files as $file) {
            $name           = basename($file, '.php');
            $strings[$name] = require $file;
        }

        return $strings;
    });

    header('Content-Type: text/javascript');
    echo('window.i18n = ' . json_encode($strings) . ';');
    exit();
})->name('assets.lang');

//auth
Route::middleware('auth')->get('/auth-me', function (Request $request) {
    return auth()->user();
});