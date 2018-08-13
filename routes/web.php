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

Route::get('mail', function () {

    $customers = \App\Customer::all();
    $mailings = \App\Mailing::all();
    return view('emails.message', compact('customers', 'mailings'));
})->name('mail');

//Route::get('/', 'PagesController@inicio')->name('inicio');
//Route::get('servicios', 'PagesController@services')->name('services');
//Route::get('servicios/{service}', 'ServicesController@show')->name('services.show');





Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'],

    function (){
        Route::get('/', 'AdminController@index')->name('dashboard');
        Route::get('clientes', 'CustomersController@index')->name('admin.clientes.index');
        Route::get('clientes/messages', 'CustomersController@messages')->name('admin.clientes.messages');
        //Route::get('clientes/messages/{messages}', 'CustomersController@show')->name('admin.clientes.show');

        //Route::get('clientes/crear', 'CustomersController@create')->name('admin.clientes.create');
        //Route::post('clientes/store', 'CustomersController@store')->name('admin.clientes.store');

        Route::get('mailings', 'MailingsController@index')->name('admin.mailing.index');
        Route::get('mailings/{mailing}/edit', 'MailingsController@edit')->name('admin.mailing.edit');
        Route::put('mailings/{mailing}', 'MailingsController@update')->name('admin.mailing.update');
        Route::get('mailings/{mailing}', 'MailingsController@show')->name('admin.mailing.show');
        Route::get('mailings/messages', 'MailingsController@messages')->name('admin.mailing.messages');
        
        

        

    });

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
/*Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');*/

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');