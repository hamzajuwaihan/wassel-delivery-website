<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShowRestaurantsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\CategoryController;

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
    return view('index');
})->name('index');




//admin dashboard

Route::get('/index', function () {
    return view('adminpages.index');
});
Route::get('/resturant', function () {
    return view('adminpages.resturant');
});
Route::get('/add_resturant', function () {
    return view('adminpages.add_resturant');
});
Route::get('/add-categories', function () {
    return view('adminpages.add-category');
});
Route::get('/category', function () {
    return view('adminpages.category');
});
Route::get('/add-user', function () {
    return view('adminpages.add-user');
});
Route::get('/users', function () {
    return view('adminpages.users');
});

Route::get('/order-status', function () {
    return view('adminpages.add-user');
});
Route::get('/all-orders', function () {
    return view('adminpages.all-orders');
});
Route::get('/profile', function () {
    return view('adminpages.profile');
});





// resturant dashboard

Route::get('/home', function () {
    return view('resturantpages.home');
});
Route::get('/menu', function () {
    return view('resturantpages.menu');
});
Route::get('/add_meal', function () {
    return view('resturantpages.add_meal');
});
Route::get('/add-offers', function () {
    return view('resturantpages.add-offers');
});
Route::get('/add-category', function () {
    return view('resturantpages.add-category');
});
Route::get('/categories', function () {
    return view('resturantpages.category');
});

Route::get('/add-order', function () {
    return view('resturantpages.add-order');
});
Route::get('/all-orders', function () {
    return view('resturantpages.all-orders');
});
Route::get('/profile', function () {
    return view('resturantpages.profile');
});





Route::resource('users', UserController::class);
Route::resource('dashboardrestaurants', RestaurantsController::class);
Route::resource('category', CategoryController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/session', SessionController::class);
Route::resource('restaurants',ShowRestaurantsController::class);

