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

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/employee', 'EmployeeController@index')->name('employee.index');

    Route::get('/addEmployee', 'EmployeeController@create')->name('employee.add');

    Route::get('/detailEmployee/{employee}', 'EmployeeController@show')->name('employee.detail');

    Route::get('/editEmployee', function(){
        return view('employee.edit');
    })->name('employee.edit');

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

    Route::get('/rooms', function(){
        return view('rooms.index');
    })->name('rooms.index');

    Route::get('/addRooms', function(){
        return view('rooms.add');
    })->name('rooms.add');

    Route::get('/detailRooms', function(){
        return view('rooms.detail');
    })->name('rooms.detail');

    Route::get('/editRooms', function(){
        return view('rooms.edit');
    })->name('rooms.edit');

    Route::get('/units', function(){
        return view('units.index');
    })->name('units.index');

    Route::get('/addUnits', function(){
        return view('units.add');
    })->name('units.add');

    Route::get('/detailUnits', function(){
        return view('units.detail');
    })->name('units.detail');

    Route::get('/editUnits', function(){
        return view('units.edit');
    })->name('units.edit');

    Route::resource('divisions', 'DivisionController');
});