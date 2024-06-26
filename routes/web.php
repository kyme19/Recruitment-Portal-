<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\JobController;

use App\Http\Controllers\Auth\LoginController;


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
    return view('welcome');
});

Route::get('/jobs/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');
Route::get('/job-listings', [JobListingController::class, 'index'])->name('job-listings.index');

//  Registration view 

// Display the registration form
//Route::get('register', function () {
//    return view('auth.register');
//})->name('register');

// Handle the registration request
////Route::post('register', 'App\Http\Controllers\RegistrationController@store')->name('register.store');

// for job listing
// Job Listing Routes


Route::get('/job-listings/create', [JobListingController::class, 'create'])->name('job-listings.create');
Route::post('/job-listings', [JobListingController::class, 'store'])->name('job-listings.store');


// logins and logouts 

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// new registration routes
// routes/web.php

use App\Http\Controllers\AccountController;

// Registration routes
Route::get('/register', [AccountController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AccountController::class, 'register']);
