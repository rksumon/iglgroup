<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SisterConcernController;
use App\Http\Controllers\YearController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontController::class, 'home']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/team', [FrontController::class, 'team']);
Route::get('/team/staff', [FrontController::class, 'teamStaff']);
Route::get('/contact', [FrontController::class, 'contact']);

//Gallery Front
Route::get('/gallery', [FrontController::class, 'gallery']);
Route::get('program/{id}', [FrontController::class, 'gallery_year_program']);
Route::get('program/photo/{id}', [FrontController::class, 'gallery_year_program_photo']);

// Sister Concern
Route::get('/sister_concern/', [FrontController::class, 'sister_concern_view']);
Route::get('/sister_concern/{id}', [FrontController::class, 'sister_concern_single_view']);


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){

    Route::get('/sister_concern/create', function () {
        return view('backend.sister_concern.add');

    });
    Route::post('/sister_concern/submit', [SisterConcernController::class, 'create']);
    Route::get('/sister_concern/view', [SisterConcernController::class, 'Show']);
    Route::get('/sister_concern/edit/{id}', [SisterConcernController::class, 'Edit']);
    Route::post('/sister_concern/update/{id}', [SisterConcernController::class, 'Update']);
    Route::get('/sister_concern/delete/{id}', [SisterConcernController::class, 'Destroy']);

    //Gallery
    Route::get('/gallery/view', [GalleryController::class, 'view']);
    Route::get('/gallery/program/{id}', [GalleryController::class, 'program']);
    Route::get('/gallery/photos/{id}', [GalleryController::class, 'photos']);
    Route::get('/gallery/create', [GalleryController::class, 'create']);
    Route::post('/gallery/submit', [GalleryController::class, 'store']);
    Route::get('/gallery/delete/{id}', [GalleryController::class, 'destroy']);
    Route::get('/gallery/trash', [GalleryController::class, 'trash']);
    Route::get('/gallery/trash/restore/{id}', [GalleryController::class, 'trash_restore']);


});
Auth::routes(['register' => false]);
//Auth::routes();
Route::get('{any}', function () {
    return view('/');
})->where('any','.*');


