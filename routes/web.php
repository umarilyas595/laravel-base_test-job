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


    Route::get('/', array('as' => 'home.page', function() {
            return redirect()->route('ajax-pagination');
    }));
    Route::get('info/add/{user_id?}', array('as' => 'add.info.form.view', 'uses' => 'PagesController@show'));
    Route::post('info/submit', array('as' => 'add.info.form.submit', 'uses' => 'PagesController@store'));
    Route::get('info/edit/{user_id}', array('as' => 'user.edit.view.display', 'uses' => 'PagesController@edit'));
    Route::get('info/delete/{user_id}', array('as' => 'user.delete.info', 'uses' => 'PagesController@destroy'));
    Route::get('info/listing',array('as'=>'ajax-pagination','uses'=>'PagesController@productList'));
