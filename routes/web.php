<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\AccountsController;

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

// Route::get('/', function () {
//     return view('pages.index');
// });

//Auth Routes

Auth::routes();


//Page Controller Routes

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::post('/checkout', [PagesController::class, 'checkout']);

Route::get('/apartments-and-rooms', [PagesController::class, 'apartments']);

Route::get('/property-details', [PagesController::class, 'property_details']);

Route::get('/contact-us', [PagesController::class, 'contact']);

//Home Controller Routes

Route::get('/home', [HomeController::class, 'index']);

Route::post('/signout', [HomeController::class, 'signout'])->name('signout');

//Admin Routes

Route::get('/admin-dashboard', [AdminController::class, 'index']);

Route::get('/manage-agents-property', [AdminController::class, 'manage_property']);

Route::get('/manage-users', [AdminController::class, 'manage_users']);

Route::get('/manage-reservation-requests', [AdminController::class, 'reservation_requests']);

//Agent Routes

Route::get('/dashboard', [AgentsController::class, 'index']);

Route::get('/manage-property', [AgentsController::class, 'manage_property']);

Route::get('/add-property', [AgentsController::class, 'add_property']);

Route::get('/manage-bookings', [AgentsController::class, 'manage_bookings']);

// Post Data

Route::resource('posts', PostsController::class);

Route::resource('accounts', AccountsController::class);

Route::put('/update-role/{id}', [AccountsController::class, 'update_role']);

Route::put('/property_approval/{id}', [AdminController::class, 'property_approval']);
