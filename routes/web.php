<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Models\GrowthData;
use App\Http\Controllers\GrowthDataController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProfilePictureController;
use App\Http\Controllers\RentCartController;
use App\Http\Controllers\ShowUserProfileController;
use App\Http\Controllers\InfagrowthController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InfarentController;
use App\Models\Product;
use App\Models\UserProfile;
use App\Models\ShowUserProfile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;





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
Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landing');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/infagrowth',[App\Http\Controllers\InfagrowthController::class, 'index'])->name('infagrowth');
Route::get('/infanurse',[App\Http\Controllers\InfanurseController::class, 'index'])->name('infanurse');

Route::get('/infasolution',[App\Http\Controllers\InfasolutionController::class, 'index'])->name('infasolution');

Route::get('/infarent', [App\Http\Controllers\InfarentController::class, 'showProducts'])->name('products');

//Route::get('/infarent',[App\Http\Controllers\InfarentController::class, 'index'])->name('infarent');
Route::get('/rentHistory', [App\Http\Controllers\HistoryController::class, 'index'])->name('rentHistory');
Route::get('/rentCheckout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('rentCheckout');


Route::post('/save', 'App\Http\Controllers\GrowthDataController@store')->name('save');
Route::get('/success', function () {
    return view('showgrowthdata'); // Replace 'success' with the name of your success view file if different
})->name('success');
 Route::get('/success', 'App\Http\Controllers\GrowthDataController@show')->name('success');

 Route::get('/userprofile', [UserProfileController::class, 'index'])->name('userprofile');

 //Route::post('profilepicture/upload', [ProfilePictureController::class, 'upload'])->name('profilepicture.upload');

 //Route::get('/showuserprofile/{id}', [ProfilePictureController::class, 'showUserProfile'])->name('showuserprofile');

 Route::get('/rentCart', [RentCartController::class, 'index'])->name('rentCart');

 Route::post('/profile/password/verify', [ProfilePasswordController::class, 'verifyPassword'])->name('profile.password.verify');

 //Route::get('/showuserprofile', [ShowUserProfileController::class, 'showUserProfile'])->name('showuserprofile');


 Route::post('/save-profile', [ShowUserProfileController::class, 'store'])->name('save-profile');

Route::get('/show-profile/{id}', [ShowUserProfileController::class, 'showProfile'])->name('show-profile');

/*
Route::get('/show-profile/{id}', function ($id) {
    $ShowUserProfile = ShowUserProfile::findOrFail($id);
    $header = view('header', compact('ShowUserProfile'));
    return view('showuserprofile', compact('ShowUserProfile', 'header'));
})->name('show-profile');
*/

// Route::get('/save-profile', function () {
  //  return view('showuserprofile'); // Replace 'success' with the name of your success view file if different
//})->name('save-profile');
