<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('user.userLogin');
});
Route::get('/admin', function () {
    return view('admin.adminLogin');
});
Route::get('/adminLogin', function () {
    return view('admin.adminDashboard');
});
Route::get('/s', function () {
    return view('user.userRegistration');
});
Route::get('/logout', function(){
    session()->forget(['loginId']);
    return redirect("/");
});
Route::get('/logoutAdmin', function(){
    session()->forget(['loginAdmin']);
    return redirect("/");
});
Route::post('/userRegistrationLogic', [UserController::class, 'userRegistrationLogic']);
Route::post('/loginUser', [UserController::class, 'loginUser']);

// Route::get('/userDashboard', [UserController::class, 'userDashboard']);



Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/userDashboard', [UserController::class, 'userDashboard']);

});
Route::group(['middleware'=>['AuthCheckAdmin']],function(){
    Route::get('/userView', [UserController::class, 'userView']);
    Route::get('/activateUser/{id}', [UserController::class, 'activateUser']);
Route::get('/deactivateUser/{id}', [UserController::class, 'deactivateUser']);
Route::get('/blockUser/{id}', [UserController::class, 'blockUser']);
Route::get('/userEdit/{id}', [AdminController::class, 'userEdit']);
Route::get('/userDelete/{id}', [AdminController::class, 'userDelete']);

});
Route::post('/loginAdmin', [AdminController::class, 'loginAdmin']);



