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

Route::get('/home', 'HomeController@index')->name('home');

//->middleware('auth');


Route::middleware(['auth'])->group(function () {

    // Route::post('/companies/{company_id?}', 'CompaniesController@show')->name('companies.update');
    Route::resource('companies', 'CompaniesController');

    Route::get('projects/create/{company_id?}', 'ProjectsController@create');
    Route::post('/projects/adduser', 'ProjectsController@adduser')->name('projects.adduser');
    Route::resource('projects', 'ProjectsController');

    Route::resource('roles', 'RolesController');

    Route::get('tasks/create/{task_id?}', 'TasksController@create');
    Route::post('/tasks/adduser', 'TasksController@adduser')->name('tasks.adduser');
    Route::resource('tasks', 'TasksController');

    Route::resource('users', 'UsersController');

    Route::resource('comments', 'CommentsController');


});
