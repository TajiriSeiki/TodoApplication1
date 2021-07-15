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
use Illuminate\Support\Facades\Auth;
Auth::routes([
    'reset' => false,
    'confirm' => false,
]);
Route::group(['middleware' => ['auth']], function(){
    //マイページ
    Route::get('home', 'HomeController@index')->name('home');
    Route::post('home', 'HomeController@button')->name('home.button');
    //書籍のリソース
    Route::resource('tasks','TaskController');
    //グループ作成
    Route::get('groups.create', 'GroupController@create')->name('groups.create');
    Route::post('groups.store', 'GroupController@store')->name('groups.store');

    Route::get('BelongsToGroups','BelongsToGroupController@index')->name('belongstogroups.index');
    Route::post('BelongsToGroups','BelongsToGroupController@store')->name('belongstogroups.store');
    Route::delete('BelongsToGroups','BelongsToGroupController@destroy')->name('belongstogroups.destroy');
    Route::get('BelongsToGroups{BelongsToGroup}','BelongsToGroupController@show')->name('belongstogroups.show');
    Route::get('BelongsToGroups/create','BelongsToGroupController@create')->name('belongstogroups.create');
    Route::post('BelongsToGroups.enter', 'BelongsToGroupController@enter')->name('belongstogroups.enter');
    //Route::resource('belongstogroups','BelongsToGroupController');
});
Route::get('/', 'TaskController@index');
