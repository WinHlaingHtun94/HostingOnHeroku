<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Start Online Food Project
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('logout','Auth\LoginController@logout')->name('logout');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('home_page',function(){
        return view('layouts.bootstrapStyle');
    });

    Route::group(['middleware'=>['auth']],function(){
        // Start Admin Page
            Route::group(['middleware'=> ['checkAdmin']],function(){
                Route::get('admin_page','AdminController@admin_page')->name('admin_page');
                Route::get('admin_profile','AdminController@admin_profile')->name('admin_profile');
                Route::get('manage_user_level','AdminController@manage_user_level')->name('manage_user_level');
                Route::get('add_meals','AdminController@add_meals')->name('add_meals');
                Route::get('order_lists','AdminController@order_lists')->name('order_lists');
                Route::post('change_password','AdminController@change_password')->name('change_password');
                Route::post('update_account','AdminController@update_account')->name('update_account');
                Route::get('delete_user_info/{id}','AdminController@delete_user_info')->name('delete_user_info');
                Route::get('update_user_info/{id}','AdminController@update_user_info')->name('update_user_info');
                Route::post('update_premium_user_info','AdminController@update_premium_user_info')->name('update_premium_user_info');
                Route::post('insert_meals','AdminController@insert_meals')->name('insert_meals');
               
            });
            Route::get('premium_user','AdminController@premium_user')->name('premium_user');
            Route::post('upgrate_to_premium_user','AdminController@upgrate_to_premium_user')->name('upgrate_to_premium_user');
            Route::get('pro_user','AdminController@pro_user')->name('pro_user');
            Route::post('upgrate_to_pro_user','AdminController@upgrate_to_pro_user')->name('upgrate_to_pro_user');
            Route::get('starter_user','AdminController@starter_user')->name('starter_user');
            Route::post('upgrate_to_starter_user','AdminController@upgrate_to_starter_user')->name('upgrate_to_starter_user');
           
        // End Admin Page

        // Start Client Page
            Route::get('shop','ClientController@shop')->name('shop');
            Route::get('clients','ClientController@clients')->name('clients');
            Route::get('guest','ClientController@guest')->name('guest');
            Route::get('guest_shop','ClientController@guest_shop')->name('guest_shop');
            Route::get('user_profile','ClientController@user_profile')->name('user_profile');
            Route::get('hungry','ClientController@hungry')->name('hungry');
            Route::get('look_meal','ClientController@look_meal')->name('look_meal');
            Route::get('look_content/{id}','ClientController@look_content')->name('look_content')->middleware('checkOrderConfirm');
            Route::post('order_info','ClientController@order_info')->name('order_info');
            Route::get('delete_order/{id}','ClientController@delete_order')->name('delete_order');
            Route::get('user_order_lists','ClientController@user_order_lists')->name('user_order_lists');
        // End Client Page

    });
// End Online Food Project