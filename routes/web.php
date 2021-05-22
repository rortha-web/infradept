<?php

use Illuminate\Support\Facades\Route;

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
Route::get('view-branch', [App\Http\Controllers\BranchController::class,'index'])->name('branch.index'); //Route::get('/branch' = manual for show on http ** BranchController::class,'create' = instead of function in Controller
Route::get('create-branch', [App\Http\Controllers\BranchController::class,'create'])->name('branch.create');
Route::post('branch','BranchController@store')->name('branch.store')->middleware('auth');

Route::get('view-category', [App\Http\Controllers\CategoryController::class,'index'])->name('category.index'); 
Route::get('create-category', [App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::post('category','CategoryController@store')->name('category.store')->middleware('auth');

Route::get('view-group', [App\Http\Controllers\GroupController::class,'index'])->name('group.index'); 
Route::get('create-group', [App\Http\Controllers\GroupController::class,'create'])->name('group.create');
Route::post('group','GroupController@store')->name('group.store')->middleware('auth');

Route::get('view-status', [App\Http\Controllers\StatusController::class,'index'])->name('status.index'); 
Route::get('create-status', [App\Http\Controllers\StatusController::class,'create'])->name('status.create');
Route::post('status','StatusController@store')->name('status.store')->middleware('auth');

Route::get('view-position', [App\Http\Controllers\PositionController::class,'index'])->name('position.index'); 
Route::get('create-position', [App\Http\Controllers\PositionController::class,'create'])->name('position.create');
Route::post('position','PositionController@store')->name('position.store')->middleware('auth');

Route::get('view-model', [App\Http\Controllers\BrandController::class,'index'])->name('brand-model.index'); 
Route::get('create-model', [App\Http\Controllers\BrandController::class,'create'])->name('brand-model.create');
Route::post('brand-model','BrandController@store')->name('brand-model.store')->middleware('auth');

Route::get('view-verifier', [App\Http\Controllers\VerifierController::class,'index'])->name('verify.index'); 
Route::get('create-verifier', [App\Http\Controllers\VerifierController::class,'create'])->name('verify.create');
Route::post('verify','VerifierController@store')->name('verify.store')->middleware('auth');

Route::get('view-engineer', [App\Http\Controllers\EngineerController::class,'index'])->name('engineer.index'); 
Route::get('create-engineer', [App\Http\Controllers\EngineerController::class,'create'])->name('engineer.create');
Route::post('engineer','EngineerController@store')->name('engineer.store')->middleware('auth');
Route::delete('/engineer/{id}', 'EngineerController@destroy')->name('engineer.delete');


Route::get('view-incident', [App\Http\Controllers\IncidentController::class,'index'])->name('incident.index'); 
Route::get('create-incident', [App\Http\Controllers\IncidentController::class,'create'])->name('incident.create');
Route::post('incident','IncidentController@store')->name('incident.store')->middleware('auth');