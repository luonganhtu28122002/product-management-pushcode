<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
//Redirects to the Products Resource Controller
Route::get('/prd', function () {
    return redirect('/products');
});

Route::resource('products', ProductController::class);


// Route::get('/emp', function () {
//     return redirect('/employees');
// });

// Route::resource('employees', EmployeeController::class);