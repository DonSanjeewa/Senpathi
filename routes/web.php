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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::middleware(["auth"])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');


    //Event routes
    Route::get('/events', 'EventController@index')->name('events.index');

    Route::get('/events/create', 'EventController@create')->name('events.create');

    //TODO super-user middleware

    //Control Panel > Users Routes
    Route::get("/control-panel/users", 'ControlPanel\UsersController@index')->name('control-panel.users.index');
    Route::post("/control-panel/users", 'ControlPanel\UsersController@store')->name('control-panel.users.store');

    Route::get("/control-panel/users/create", "ControlPanel\UsersController@create")->name('control-panel.users.create');
    Route::get("/control-panel/users/:user", "ControlPanel\UsersController@show")->name('control-panel.users.show');

    Route::get("/control-panel/users/:user/edit", 'ControlPanel\UsersController@edit')->name('control-panel.users.edit');
    Route::post("/control-panel/users/:user", 'ControlPanel\UsersController@update')->name('control-panel.users.update');

    Route::post("/control-panel/users/:user/delete", 'ControlPanel\UsersController@index')->name('control-panel.users.delete');

    //Control Panel > Roles Routes
    Route::get("/control-panel/roles", 'ControlPanel\RolesController@index')->name('control-panel.roles.index');
    Route::post("/control-panel/roles", 'ControlPanel\RolesController@store')->name('control-panel.roles.store');

    Route::get("/control-panel/roles/create", 'ControlPanel\RolesController@create')->name('control-panel.roles.create');

    Route::get("/control-panel/roles/:role/edit", 'ControlPanel\RolesController@edit')->name('control-panel.roles.edit');
    Route::post("/control-panel/roles/:role", 'ControlPanel\RolesController@update')->name('control-panel.roles.update');

    Route::post("/control-panel/roles/:role/delete", 'ControlPanel\RolesController@index')->name('control-panel.roles.delete');

    //Control Panel > Permissions Routes
    Route::get("/control-panel/permissions", 'ControlPanel\PermissionsController@index')->name('control-panel.permissions.index');
    Route::post("/control-panel/permissions", 'ControlPanel\PermissionsController@store')->name('control-panel.permissions.store');

    Route::get("/control-panel/permissions/create", 'ControlPanel\PermissionsController@create')->name('control-panel.permissions.create');

    Route::get("/control-panel/permissions/:permission/edit", 'ControlPanel\PermissionsController@edit')->name('control-panel.permissions.edit');
    Route::post("/control-panel/permissions/:permission", 'ControlPanel\PermissionsController@update')->name('control-panel.permissions.update');

    Route::post("/control-panel/permissions/:permission/delete", 'ControlPanel\PermissionsController@index')->name('control-panel.permissions.delete');
});

