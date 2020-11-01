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
    $petTypes = \App\PetType::all();

    $dogs = $pets = \App\Pet::where('type', 'собака')->limit(3)->get();
    $cats = $pets = \App\Pet::where('type', 'Кошка')->limit(3)->get();

    return view('welcome', [
        'petTypes' => $petTypes,
        'dogs' => $dogs,
        'cats' => $cats
    ]);
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

    Route::get('death_types', 'Directories\\DeathTypeController@index')->name('directories.death_types');
    Route::put('death_types', 'Directories\\DeathTypeController@update')->name('directories.death_types.update');
    Route::post('death_types', 'Directories\\DeathTypeController@store')->name('directories.death_types.store');
    Route::post('death_types/{id}', 'Directories\\DeathTypeController@destroy')->name('directories.death_types.delete');

    Route::get('left_types', 'Directories\\LeftTypeController@index')->name('directories.left_types');
    Route::put('left_types', 'Directories\\LeftTypeController@update')->name('directories.left_types.update');
    Route::post('left_types', 'Directories\\LeftTypeController@store')->name('directories.left_types.store');
    Route::post('left_types/{id}', 'Directories\\LeftTypeController@destroy')->name('directories.left_types.delete');

    Route::get('euthanasia_types', 'Directories\\EuthanasiaTypeController@index')->name('directories.euthanasia_types');
    Route::put('euthanasia_types', 'Directories\\EuthanasiaTypeController@update')->name('directories.euthanasia_types.update');
    Route::post('euthanasia_types', 'Directories\\EuthanasiaTypeController@store')->name('directories.euthanasia_types.store');
    Route::post('euthanasia_types/{id}', 'Directories\\EuthanasiaTypeController@destroy')->name('directories.euthanasia_types.delete');

    Route::get('shelters', 'Directories\\ShelterController@index')->name('directories.shelters');
    Route::put('shelters', 'Directories\\ShelterController@update')->name('directories.shelters.update');
    Route::post('shelters', 'Directories\\ShelterController@store')->name('directories.shelters.store');
    Route::post('shelters/{id}', 'Directories\\ShelterController@destroy')->name('directories.shelters.delete');

    Route::get('breeds', 'Directories\\BreedTypeController@index')->name('directories.breed_types');
    Route::put('breeds', 'Directories\\BreedTypeController@update')->name('directories.breed_types.update');
    Route::post('breeds', 'Directories\\BreedTypeController@store')->name('directories.breed_types.store');
    Route::post('breeds/{id}', 'Directories\\BreedTypeController@destroy')->name('directories.breed_types.delete');

    Route::get('colors', 'Directories\\ColorTypeController@index')->name('directories.color_types');
    Route::put('colors', 'Directories\\ColorTypeController@update')->name('directories.color_types.update');
    Route::post('colors', 'Directories\\ColorTypeController@store')->name('directories.color_types.store');
    Route::post('colors/{id}', 'Directories\\ColorTypeController@destroy')->name('directories.color_types.delete');

    Route::get('wools', 'Directories\\WoolTypeController@index')->name('directories.wool_types');
    Route::put('wools', 'Directories\\WoolTypeController@update')->name('directories.wool_types.update');
    Route::post('wools', 'Directories\\WoolTypeController@store')->name('directories.wool_types.store');
    Route::post('wools/{id}', 'Directories\\WoolTypeController@destroy')->name('directories.wool_types.delete');

});

Route::prefix('catalog')->group(function () {

//    Route::get('', 'CatalogController@index')->name('catalog');
    Route::get('', 'CatalogController@findByPetType')->name('catalog.findByPetType');
    Route::get('/{id}', 'CatalogController@showPet')->name('catalog.showPet');

});



Route::get('/home/shelters', 'HomeController@shelters')->name('home.shelters');
Route::get('/home/shelter/{id}/pets', 'HomeController@shelter')->name('home.shelter');
Route::get('/home/shelter/{id}/pets/{pet}', 'HomeController@shelterPetCard')->name('home.shelter.petCard');
Route::get('/home/report', 'HomeController@generateReport')->name('home.report');


Route::prefix('api')->group(function () {

    Route::get('/pets', 'API\\APIController@pets');
    Route::get('/pet/{id}', 'API\\APIController@pet');

});




Route::get('/test', 'TestController@test')
    ->name('test');
