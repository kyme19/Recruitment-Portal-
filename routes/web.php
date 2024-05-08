<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\JobController;



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


// for job listing
// Job Listing Routes


Route::get('/job-listings/create', [JobListingController::class, 'create'])->name('job-listings.create');
Route::post('/job-listings', [JobListingController::class, 'store'])->name('job-listings.store');

