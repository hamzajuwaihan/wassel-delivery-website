<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShowRestaurantsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutOrder;
use App\Http\Controllers\MealsController;
//restaurant owner controller
use App\Http\Controllers\RestaurantsOwnerController;
use App\Http\Controllers\RestaurantOwnerMenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeleteFromCart;
use App\Http\Controllers\NormalUserController;
use App\Http\Controllers\OrderOwners;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RestaurantIndexController;
use GuzzleHttp\Psr7\Request;

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
//     return view('index');
// })->name('index');

Route::get('/contactForm', function () {
    return view('contactForm');
});





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
// Route::get('/add-user', function () {
//     return view('adminpages.add-user');
// });
Route::get('/users', function () {
    return view('adminpages.users');
});
Route::get('/view-messages', function () {
    return view('adminpages.view-messages');
});

Route::get('/order-status', function () {
    return view('adminpages.add-user');
});
Route::get('/all-orders', function () {
    return view('adminpages.all-orders');
});
Route::get('/adminprofile', function () {
    return view('adminpages.profile');
});






// resturant dashboard

Route::get('/home', function () {
    return view('resturantpages.home');
});
Route::get('/menu', function () {
    return view('resturantpages.menu');
});

// Route::get('/add-offers', function () {
//     return view('resturantpages.add-offers');
// });
Route::get('/add-category', function () {
    return view('resturantpages.add-category');
});
Route::get('/categories', function () {
    return view('resturantpages.category');
});

Route::get('/all-orders', function () {
    return view('resturantpages.all-orders');
});
Route::get('/profile', function () {
    return view('resturantpages.profile');
});

Route::get('/restaurantview', function () {
    return view('resturantpages.restaurantview');
});



Route::resource('users', UserController::class);
Route::resource('dashboardrestaurants', RestaurantsController::class);
Route::resource('category', CategoryController::class);
Route::resource('cart',CartController::class);
Route::resource('restaurantview', RestaurantsOwnerController::class);
Route::resource('view-messages', ContactController::class);
Route::resource('adminprofile', ProfileAdminController::class);
// Route::resource('menu', RestaurantOwnerMenuController::class);
Route::post('AddToCart',AddToCartController::class)->name('AddToCart');
Route::post('DeleteFromCart',DeleteFromCart::class)->name('DeleteFromCart');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/session', SessionController::class);
Route::resource('restaurants',ShowRestaurantsController::class);

Route::resource('addMeal',MealsController::class);
Route::post('/checkout',CheckoutOrder::class)->name('checkout');


//contact form
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


Route::get('pastOrders',function(){
    return redirect()->route('myaccount.index');
})->name('pastOrders');


Route::get('search', [SearchController::class, 'index']);

Route::get('/', [RestaurantIndexController::class, 'index'])->name('index');


Route::resource('/add-order',OrderOwners::class);

Route::resource('myaccount',NormalUserController::class);