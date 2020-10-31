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

    Route::get('pet_types', 'Directories\\PetTypeController@index')->name('directories.pet_types');
    Route::put('pet_types', 'Directories\\PetTypeController@update')->name('directories.pet_types.update');
    Route::post('pet_types', 'Directories\\PetTypeController@store')->name('directories.pet_types.store');
    Route::post('pet_types/{id}', 'Directories\\PetTypeController@destroy')->name('directories.pet_types.delete');

    Route::get('gender_types', 'Directories\\GenderTypeController@index')->name('directories.gender_types');
    Route::put('gender_types', 'Directories\\GenderTypeController@update')->name('directories.gender_types.update');
    Route::post('gender_types', 'Directories\\GenderTypeController@store')->name('directories.gender_types.store');
    Route::post('gender_types/{id}', 'Directories\\GenderTypeController@destroy')->name('directories.gender_types.delete');

    Route::get('ear_types', 'Directories\\EarTypeController@index')->name('directories.ear_types');
    Route::put('ear_types', 'Directories\\EarTypeController@update')->name('directories.ear_types.update');
    Route::post('ear_types', 'Directories\\EarTypeController@store')->name('directories.ear_types.store');
    Route::post('ear_types/{id}', 'Directories\\EarTypeController@destroy')->name('directories.ear_types.delete');

    Route::get('tail_types', 'Directories\\TailTypeController@index')->name('directories.tail_types');
    Route::put('tail_types', 'Directories\\TailTypeController@update')->name('directories.tail_types.update');
    Route::post('tail_types', 'Directories\\TailTypeController@store')->name('directories.tail_types.store');
    Route::post('tail_types/{id}', 'Directories\\TailTypeController@destroy')->name('directories.tail_types.delete');




});














Route::get('/test', 'TestController@test')
    ->name('test');
