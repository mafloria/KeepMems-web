<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {       
    return view('visitor');    
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*
Route::group(['middleware' => ['web']], function () {
    //
});*/
/*
Route::get('dashboard', function () {
     return view('dashboard');
});*/
/*
Route::get('webservices/get-new-person-setup', function () {
    $result['code']=200; 
    $result['message']="Data to create new person";
    $result['genders'] = array("1"=>"Mujer","2"=>"Hombre");
    $result['avatars'] = array("1"=>"<img src='images/avatars/avatar-1.jpg'>","2"=>"<img src='images/avatars/avatar-2.jpg'>","3"=>"<img src='images/avatars/avatar-3.jpg'>","4"=>"<img src='images/avatars/avatar-4.jpg'>");
    
    
    return json_encode($result);
});
*/
define('APPURL','http://localhost:8000/'); //value for web services main route
define('WEBSERVICES','http://localhost:8000/'); //value for web services main route
define('CC_JS_IMG','http://localhost:8000/'); //value for css, js, and images includes

Route::post('webservices/create-account', "WebServicesController@create_account"); //hace registro
Route::post('webservices/validate-token', "WebServicesController@validate_token"); //hace login

Route::get('webservices/get-new-person-setup', "WebServicesController@get_new_person_setup");
Route::get('webservices/get-buddies/{session}', "WebServicesController@get_buddies"); //recupera las personas de un usuario
Route::post('webservices/add-buddy/{session}', "WebServicesController@add_buddy"); //crea una persona

Route::get('dashboard/{session}', "UserInterfaceController@user_dashboard"); //pagina inicial del usuario logueado
Route::get('person-memories/{session}/{person}', "UserInterfaceController@person_memories")->where('person', '[0-9]+'); //Recupera el dashboard de una presona
Route::post('webservices/add-memory/{session}', "WebServicesController@add_memory"); //crea una memoria
 

