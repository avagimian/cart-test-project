<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController\CartController;
use App\Http\Controllers\CategoryController\CategoryController;
use App\Http\Controllers\ProductController\ProductCreateController;
use App\Http\Controllers\ProductController\ProductSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create', ProductCreateController::class);
Route::get('/', ProductSearchController::class);
Route::get('/category', CategoryController::class);
Route::post('/cart/add', CartController::class);
Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);





