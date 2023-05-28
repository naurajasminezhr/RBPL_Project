<?php

use Illuminate\Support\Facades\Route;
use App\Models\GrowthData;
use App\Http\Controllers\GrowthDataController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProfilePictureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/infagrowth',[App\Http\Controllers\InfagrowthController::class, 'index'])->name('infagrowth');
Route::get('/infanurse',[App\Http\Controllers\InfanurseController::class, 'index'])->name('infanurse');
Route::get('/infarent',[App\Http\Controllers\InfarentController::class, 'index'])->name('infarent');
Route::get('/infasolution',[App\Http\Controllers\InfasolutionController::class, 'index'])->name('infasolution');
Route::post('/save', 'App\Http\Controllers\GrowthDataController@store')->name('save');

Route::get('/success', function () {
    return view('showgrowthdata'); // Replace 'success' with the name of your success view file if different
})->name('success');

 Route::get('/success', 'App\Http\Controllers\GrowthDataController@show')->name('success');

 Route::get('/userprofile', [UserProfileController::class, 'index'])->name('userprofile');

 Route::post('profilepicture/upload', [ProfilePictureController::class, 'upload'])->name('profilepicture.upload');

 Route::get('/showuserprofile/{id}', [ProfilePictureController::class, 'showUserProfile'])->name('showuserprofile');
