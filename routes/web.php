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

//Web Site
Route::get('/', function () {
    return view('index')->with('route',"home");
});

Route::get('/nosotros', function(){
    return view('web_site.nosotros')->with('route','nosotros');

})->name('nosotros');


Route::get('/programas', function(){
    return view('web_site.programas')->with('route','programas');

})->name('programas');

Route::get('/membresias', function(){
    return view('web_site.membresias')->with('route','membresias');

})->name('membresias');

Route::get('/contactenos', function(){
    return view('web_site.contactenos')->with('route','contactenos');

})->name('contactenos');

Route::get('/noticias', function(){
    return view('web_site.noticias')->with('route','noticias');

})->name('noticias');


Route::get('/foo', function () {
    $exitCode = Artisan::call('cache:clear');
});

//Rutas del Sistema de Administracion
Route::group(["prefix"=>"sisbeca",'middleware'=>'auth'],function ()
{
    Route::get('/',[
        'uses'=> 'SisbecaController@index',
        'as' =>'sisbeca'
    ]);


    //Estas Rutas solo seran accedidas por el Administrador (admin es un middleware
    // creado recordar registrar el middleware creado por el programador en la carpeta Kernel
    Route::group(['middleware'=>'admin'],function ()
    {
    Route::Resource('mantenimientoUser', 'MantenimientoUserController');
    Route::get('mantenimientoUser/{id}/destroy', [
        'uses' => 'MantenimientoUserController@destroy',
        'as' => 'mantenimientoUser.destroy'
    ]);
     });

    /*
    Route::get('/',[
        'uses'=> 'HomeController@index',
        'as' =>'sisbeca'
    ]);

    Route::get('/index1',[
        'uses'=> 'HomeController@index1',
        'as' =>'sisbeca.index1'
    ]);

    Route::get('/emailCompose',[
        'uses'=> 'HomeController@emailCompose',
        'as' =>'sisbeca.emailCompose'
    ]);

    Route::get('/emailRead',[
        'uses'=> 'HomeController@emailRead',
        'as' =>'sisbeca.emailRead'
    ]);

    Route::get('/emailInbox',[
        'uses'=> 'HomeController@emailInbox',
        'as' =>'sisbeca.emailInbox'
    ]);


    //Forms

    Route::get('/formBasic',[
        'uses'=> 'HomeController@formBasic',
        'as' =>'sisbeca.formBasic'
    ]);

    Route::get('/formLayout',[
        'uses'=> 'HomeController@formLayout',
        'as' =>'sisbeca.formLayout'
    ]);

    Route::get('/formValidation',[
        'uses'=> 'HomeController@formValidation',
        'as' =>'sisbeca.formValidation'
    ]);

    Route::get('/formEditor',[
        'uses'=> 'HomeController@formEditor',
        'as' =>'sisbeca.formEditor'
    ]);

    Route::get('/formDropzone',[
        'uses'=> 'HomeController@formDropzone',
        'as' =>'sisbeca.formDropzone'
    ]);


    //layouts
    Route::get('/layoutBlank',[
        'uses'=> 'HomeController@layoutBlank',
        'as' =>'sisbeca.layoutBlank'
    ]);

    Route::get('/layoutBoxed',[
        'uses'=> 'HomeController@layoutBoxed',
        'as' =>'sisbeca.layoutBoxed'
    ]);

    Route::get('/layoutFixHeader',[
        'uses'=> 'HomeController@layoutFixHeader',
        'as' =>'sisbeca.layoutFixHeader'
    ]);

    Route::get('/layoutFixSidebar',[
        'uses'=> 'HomeController@layoutFixSidebar',
        'as' =>'sisbeca.layoutFixSidebar'
    ]);


    //pages
    Route::get('/pageLogin',[
        'uses'=> 'HomeController@pageLogin',
        'as' =>'sisbeca.pageLogin'
    ]);

    Route::get('/pageRegister',[
        'uses'=> 'HomeController@pageRegister',
        'as' =>'sisbeca.pageRegister'
    ]);

    Route::get('/pageInvoice',[
        'uses'=> 'HomeController@pageInvoice',
        'as' =>'sisbeca.pageInvoice'
    ]);

    Route::get('/page-error-404',[
        'uses'=> 'HomeController@pageError404',
        'as' =>'sisbeca.pageError404'
    ]);


    //tables

    Route::get('/tableBasic',[
        'uses'=> 'HomeController@tableBasic',
        'as' =>'sisbeca.tableBasic'
    ]);

    Route::get('/datatable',[
        'uses'=> 'HomeController@datatable',
        'as' =>'sisbeca.datatable'
    ]);

    //ui bootstrap

    Route::get('/uiAlert',[
        'uses'=> 'HomeController@uiAlert',
        'as' =>'sisbeca.uiAlert'
    ]);

    Route::get('/uiButton',[
        'uses'=> 'HomeController@uiButton',
        'as' =>'sisbeca.uiButton'
    ]);

    Route::get('/uiDropdown',[
        'uses'=> 'HomeController@uiDropdown',
        'as' =>'sisbeca.uiDropdown'
    ]);

    Route::get('/uiProgressbar',[
        'uses'=> 'HomeController@uiProgressbar',
        'as' =>'sisbeca.uiProgressbar'
    ]);

    Route::get('/uiTab',[
        'uses'=> 'HomeController@uiTab',
        'as' =>'sisbeca.uiTab'
    ]);

    Route::get('/uiTypography',[
        'uses'=> 'HomeController@uiTypography',
        'as' =>'sisbeca.uiTypography'
    ]);


    //components

    Route::get('/ucCalender',[
        'uses'=> 'HomeController@ucCalender',
        'as' =>'sisbeca.ucCalender'
    ]);


    Route::get('/ucNestedable',[
        'uses'=> 'HomeController@ucNestedable',
        'as' =>'sisbeca.ucNestedable'
    ]);

    Route::get('/ucSweetalert',[
        'uses'=> 'HomeController@ucSweetalert',
        'as' =>'sisbeca.ucSweetalert'
    ]);

    Route::get('/ucToastr',[
        'uses'=> 'HomeController@ucToastr',
        'as' =>'sisbeca.ucToastr'
    ]);

    */

});
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' ); //esta ruta sirve para desloguear al usuario

//Route::get('/home', 'HomeController@index')->name('home');
