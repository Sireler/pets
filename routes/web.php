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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');
    //->middleware('check_user_role:' . \App\Role\UserRole::ROLE_ADMIN);



Route::prefix('directories')->group(function () {

    Route::get('operating_organizations', 'Directories\\OperatingOrganizationController@index')->name('directories.organizations');
    Route::put('operating_organizations', 'Directories\\OperatingOrganizationController@update')->name('directories.organizations.update');
    Route::post('operating_organizations', 'Directories\\OperatingOrganizationController@store')->name('directories.organizations.store');
    Route::post('operating_organizations/{id}', 'Directories\\OperatingOrganizationController@destroy')->name('directories.organizations.delete');

});














Route::get('/test', 'TestController@test')
    ->name('test');
