<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;




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

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/search', [HomeController::class, 'search']);

Route::get('/product/{id}', [HomeController::class, 'product']);

Route::post('/add-cart/{id}', [HomeController::class, 'addCart']);

Route::get('/cart', [HomeController::class, 'cart']);

Route::get('/delete-cart/{id}', [HomeController::class, 'deleteCart']);

Route::post('/order', [HomeController::class, 'confirmOrder']);


// __Home page__//
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/shop', [HomeController::class, 'shop']);


// __Admin Page Controller__//
Route::get('/product', [AdminController::class, 'product']);

Route::get('/add-product', [AdminController::class, 'addProduct']);

Route::get('/single-product/{id}', [AdminController::class, 'singleProduct']);

Route::get('/delete/{id}', [AdminController::class, 'delete']);

Route::get('/edit-product/{id}', [AdminController::class, 'editProduct']);

Route::post('/update-product/{id}', [AdminController::class, 'updateProduct']);

Route::post('/upload-product', [AdminController::class, 'uploadProduct']);

Route::get('/order', [AdminController::class, 'showOrder']);

Route::get('/update-status/{id}', [AdminController::class, 'updateStatus']);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


