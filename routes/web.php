<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DontHaveAccess;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PustakawanDashboardController;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'auth']);
});

// Route::get('/home', function () {
//     return redirect('/dashboard-admin');
// });

// error route
Route::get('/donthaveaccess', [DontHaveAccess::class, 'index'])->name('you-dont-have-access');

// auth route
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // admin route
    Route::get('/admindashboard', [AdminDashboardController::class, 'index'])->middleware('userAccess:admin');

    // member route
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('userAccess:member');

    // librarian route
    Route::get('/pustakawan', [PustakawanDashboardController::class, 'index'])->middleware('userAccess:librarian');
});



