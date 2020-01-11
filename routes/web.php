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
    return redirect(route('login'));
});

Auth::routes();

Route::get('/report/{year}/{month}', 'MeetingController@report')->name('meeting.report');

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::resource('employee', 'EmployeeController');
    Route::resource('rooms', 'RoomController');
    Route::resource('units', 'UnitController');
    Route::resource('divisions', 'DivisionController');

    Route::get('/organizations', function(){
        return view('organizations.index');
    })->name('organizations.index');

    Route::get('/addOrganizations', function(){
        return view('organizations.add');
    })->name('organizations.add');

    Route::get('/detailOrganizations', function(){
        return view('organizations.detail');
    })->name('organizations.detail');

    Route::get('/editOrganizations', function(){
        return view('organizations.edit');
    })->name('organizations.edit');
});