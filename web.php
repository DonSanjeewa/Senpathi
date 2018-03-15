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

Route::redirect('/', '/home')->name('welcome');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/unauthorized', function () {
    return "hit";
})->name("unauthorized");

//TODO super-user middleware
Route::middleware(["auth", "acl"])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    //Event routes
    Route::get('/events', 'EventController@index')->name('events.index');
    Route::get('/events/create', 'EventController@create')->name('events.create');
    Route::get('/events/{event}', 'EventController@show')->name('events.show');
    //TODO might want to change this to post after adding the modal
    Route::get('/events/{event}/delete', 'EventController@delete')->name('events.delete');
    Route::post('/events', 'EventController@store')->name('events.store');


    //Teachers routes
    Route::get('/academic/teachers', 'Academic\TeachersController@index')->name('academic.teachers.index');
    Route::post('/academic/teachers', 'Academic\TeachersController@store')->name('academic.teachers.store');

    Route::get('/academic/teachers/create', 'Academic\TeachersController@create')->name('academic.teachers.create');
    Route::get('/academic/teachers/approve', 'Academic\TeachersController@approve')->name('approvels.index');
    Route::get('/academic/teachers/{teacher}', 'Academic\TeachersController@show')->name('academic.teachers.show');

    


    //Timetable routes
    Route::get('/timetables', 'Academic\TimetableController@index')->name('academic.timetables.index');
    Route::get('/timetables/{year}/{class}/edit/{period}', 'Academic\TimetableController@edit')->name('academic.timetables.edit');
    Route::get('/timetables/{year}/{class}/delete/{period}', 'Academic\TimetableController@remove')->name('academic.timetables.remove');
    Route::get('/timetables/{year}/{class}', 'Academic\TimetableController@show')->name('academic.timetables.show');
    Route::get('/timetables/create', 'Academic\TimetableController@create')->name('academic.timetables.create');


    Route::post('/timetables', 'Academic\TimetableController@store')->name('academic.timetables.store');
    Route::post('/timetables/update', 'Academic\TimetableController@update')->name('academic.timetables.update');


    //Salary requests
    Route::get('/salary-requests', 'Academic\SalaryRequestController@index')->name('academic.salary-requests.index');
    Route::get('/salary-requests/{request}', 'Academic\SalaryRequestController@show')->name('academic.salary-requests.show');


    //Salary Report
    Route::get('/generate-salary-report/{request}', 'Report\ReportController@salaryRequestPdfView')->name('report.salary-requests');
    //Teacher details Report
    Route::get('/generate-teacher-report/{teacher}', 'Report\ReportController@teacherDetailsPdfView')->name('report.teacher-details');

    //leave routes
    
    Route::get('/teachers-full-report', 'Report\ReportController@teacherFullReport')->name('reports.teachers-full-report');
    

    //Leave routes
    Route::get('/leaves', 'LeaveController@index')->name('leaves.index');
    Route::get('/leaves/apply', 'LeaveController@create')->name('leaves.apply');
    Route::get('/leaves/pending', 'LeaveController@Pending')->name('leaves.pending');   
    Route::post('/leaves/store', 'LeaveController@store')->name('leaves.store');
    Route::get('/leaves/all', 'LeaveController@all')->name('leaves.all');
    Route::get('/leaves/approve/{userId}', 'LeaveController@approve');
    Route::get('/leaves/report', 'LeaveController@report')->name('leaves.report');
    Route::get('/leaves/cancel/{leaveID}', 'LeaveController@cancel');
    //TODO super-user middleware

    //Control Panel > Users Routes
    Route::get("/control-panel/users", 'ControlPanel\UsersController@index')->name('control-panel.users.index');
    Route::post("/control-panel/users", 'ControlPanel\UsersController@store')->name('control-panel.users.store');

    Route::get("/control-panel/users/create", "ControlPanel\UsersController@create")->name('control-panel.users.create');
    Route::get("/control-panel/users/{user}", "ControlPanel\UsersController@show")->name('control-panel.users.show');

    Route::get("/control-panel/users/{user}/edit", 'ControlPanel\UsersController@edit')->name('control-panel.users.edit');
    Route::post("/control-panel/users/{user}", 'ControlPanel\UsersController@update')->name('control-panel.users.update');

    Route::post("/control-panel/users/{user}/delete", 'ControlPanel\UsersController@index')->name('control-panel.users.delete');

    //Control Panel > Roles Routes
    Route::get("/control-panel/roles", 'ControlPanel\RolesController@index')->name('control-panel.roles.index');
    Route::post("/control-panel/roles", 'ControlPanel\RolesController@store')->name('control-panel.roles.store');

    Route::get("/control-panel/roles/create", 'ControlPanel\RolesController@create')->name('control-panel.roles.create');

    Route::get("/control-panel/roles/{role}/edit", 'ControlPanel\RolesController@edit')->name('control-panel.roles.edit');
    Route::post("/control-panel/roles/{role}", 'ControlPanel\RolesController@update')->name('control-panel.roles.update');

    Route::post("/control-panel/roles/{role}/delete", 'ControlPanel\RolesController@index')->name('control-panel.roles.delete');

    //Control Panel > Permissions Routes
    Route::get("/control-panel/permissions", 'ControlPanel\PermissionsController@index')->name('control-panel.permissions.index');
    Route::post("/control-panel/permissions", 'ControlPanel\PermissionsController@store')->name('control-panel.permissions.store');

    Route::get("/control-panel/permissions/create", 'ControlPanel\PermissionsController@create')->name('control-panel.permissions.create');

    Route::get("/control-panel/permissions/{permission}/edit", 'ControlPanel\PermissionsController@edit')->name('control-panel.permissions.edit');
    Route::post("/control-panel/permissions/{permission}", 'ControlPanel\PermissionsController@update')->name('control-panel.permissions.update');

    Route::post("/control-panel/permissions/{permission}/delete", 'ControlPanel\PermissionsController@index')->name('control-panel.permissions.delete');
});
