<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\User\UsersController;
// use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\AuthController;
// use App\Http\Controllers\User\UserBookingsController;
use App\Http\Controllers\Admin\AdminsController;
// use App\Http\Controllers\Admin\LocationsController;
// use App\Http\Controllers\Admin\TheatresController;
// use App\Http\Controllers\Admin\MoviesController;
// use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\AdminLoginController;
// use App\Http\Controllers\Admin\CustomersController;
// use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Livewire\CreateUser;
use App\Http\Livewire\Dashsboard;
use App\Http\Livewire\UserBooking;
use App\Http\Livewire\Admin\admindashboard;
use App\Http\Livewire\Admin\Locations\Create;
use App\Http\Livewire\Admin\Locations\index;
use App\Http\Livewire\Admin\Locations\update;
use App\Http\Livewire\Admin\Users\UserCreate;
use App\Http\Livewire\Admin\Users\UserIndex;
use App\Http\Livewire\Admin\Users\UserUpdate;
use App\Http\Livewire\Admin\Theatres\TheatreIndex;
use App\Http\Livewire\Admin\Theatres\TheatreCreate;
use App\Http\Livewire\Admin\Theatres\TheatreUpdate;
use App\Http\Livewire\Admin\Movies\MovieIndex;
use App\Http\Livewire\Admin\Movies\MovieCreate;
use App\Http\Livewire\Admin\Movies\MovieUpdate;
use App\Http\Livewire\Admin\Bookings\BookingIndex;
use App\Http\Livewire\Admin\Bookings\BookingCreate;



Route::name('user.')->group(function (){

	Route::middleware('guest')->controller(AuthController::class)->prefix('login')->name('login')->group(function(){
					Route::get('/', 'login');
					Route::post('/', 'authenticate')->name('.post');
	});

	Route::middleware('auth:web')->group(function(){
		// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
		Route::get('/', Dashsboard::class)->name('dashboard');
		Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


			// Route::controller(UsersController::class)->prefix('users')->name('users.')->group(function (){
			// 	Route::get('/create', 'create')->name('create');
			// 	// Route::post('/create', 'store')->name('store');
			// });
			Route::get('/create', CreateUser::class)->name('create');


		// 	Route::controller(UserBookingsController::class)->prefix('bookings')->name('bookings.')->group(function(){
		// 	Route::get('/{id}/create', 'create')->name('create');
		// 	Route::post('/{id}/create', 'store')->name('store');
		// });
		Route::get('/{id}/bookingcreate', UserBooking::class)->name('bookingcreate');
	});


});


Route::prefix('admin')->name('admin.')->group(function() {

	Route::middleware('guest')->controller(AdminLoginController::class)->prefix('login')->name('login')->group(function () {
					Route::get('/', 'login');
					Route::post('/', 'authenticate')->name('.post');
	});

	Route::middleware('auth:admin')->group(function() {
		Route::get('/', admindashboard::class)->name('dashboard');
		Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

		// Route::controller(CustomersController::class)->prefix('users')->name('users.')->group(function (){
		// 				Route::get('/', 'index')->name('index');
		// 				Route::get('/create', 'create')->name('create');
		// 				Route::post('/create', 'store')->name('store');
		// 				Route::get('/{id}/update', 'edit')->name('edit');
		// 				Route::post('/{id}/update', 'update')->name('update');
		// 				Route::get('/{id}/delete', 'delete')->name('delete');
		// });
		Route::get('/users', UserIndex::class)->name('user_index');
		Route::get('/users/create', UserCreate::class)->name('user_create');
		Route::get('/user/{id}/update', UserUpdate::class)->name('user_update');
		
		// Route::controller(AdminsController::class)->prefix('admins')->name('admins.')->group(function (){
		// 				Route::get('/', 'index')->name('index');
		// 				// Route::get('/create', 'create')->name('create');
		// 				// Route::post('/create', 'store')->name('store');
		// });
		
		// Route::controller(LocationsController::class)->prefix('locations')->name('locations.')->group(function (){
		// 				Route::get('/', 'index')->name('index');
		// 				Route::get('/create', 'create')->name('create');
		// 				Route::post('/create', 'store')->name('store');
		// 				Route::get('/{id}/update', 'edit')->name('edit');
		// 				Route::post('/{id}/update', 'update')->name('update');
		// 				Route::get('/{id}/delete', 'delete')->name('delete');
		// });
		Route::get('/locations', index::class)->name('location_index');
		Route::get('/locations/create', Create::class)->name('location_create');
		Route::get('/locations/{id}/update', update::class)->name('location_update');

		// Route::controller(TheatresController::class)->prefix('theatres')->name('theatres.')->group(function (){
		// 				Route::get('/', 'index')->name('index');
		// 				Route::get('/create', 'create')->name('create');
		// 				Route::post('/create', 'store')->name('store');
		// 				Route::get('/{id}/update', 'edit')->name('edit');
		// 				Route::post('/{id}/update', 'update')->name('update');
		// 				Route::get('/{id}/delete', 'delete')->name('delete');
		// // });
		Route::get('/theatres', TheatreIndex::class)->name('theatre_index');
		Route::get('/theatres/create', TheatreCreate::class)->name('theatre_create');
		Route::get('/theatres/{id}/update', TheatreUpdate::class)->name('theatre_update');


		// Route::controller(MoviesController::class)->prefix('movies')->name('movies.')->group(function (){
		// 				Route::get('/', 'index')->name('index');
		// 				Route::get('/create', 'create')->name('create');
		// 				Route::post('/create', 'store')->name('store');
		// 				Route::get('/{id}/update', 'edit')->name('edit');
		// 				Route::post('/{id}/update', 'update')->name('update');
		// 				Route::get('/{id}/delete', 'delete')->name('delete');
		// });
		Route::get('/movies', MovieIndex::class)->name('movie_index');
		Route::get('/movies/create', MovieCreate::class)->name('movie_create');
		Route::get('/movies/{id}/update', MovieUpdate::class)->name('movie_update');

		// Route::controller(BookingsController::class)->prefix('bookings')->name('bookings.')->group(function (){
		// 				Route::get('/', 'index')->name('index');
		// 				Route::get('/create', 'create')->name('create');
		// 				Route::post('/create', 'store')->name('store');
		// 				Route::get('/{id}/delete', 'delete')->name('delete');
		// });
		Route::get('/bookings', BookingIndex::class)->name('booking_index');
		Route::get('/bookings/create', BookingCreate::class)->name('booking_create');
	});

});
