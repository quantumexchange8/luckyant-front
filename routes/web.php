<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[UserController::class, 'index'])->name('index');

Route::get('trading',[UserController::class, 'trading'])->name('trading');
Route::prefix('market')->group(function () {
Route::get('forex',[UserController::class, 'forex'])->name('forex');
Route::get('stock',[UserController::class, 'stock'])->name('stock');
Route::get('CFDs',[UserController::class, 'cfd'])->name('cfd');
Route::get('indices',[UserController::class, 'indices'])->name('indices');
});
Route::get('copytrading',[UserController::class, 'copytrading'])->name('copytrading');
Route::get('about',[UserController::class, 'about'])->name('about');

Route::get('contact',[CountryController::class, 'index'])->name('contact');

Route::get('error',[UserController::class, 'error'])->name('error');
Route::post('contact', [CountryController::class, 'storeContact'])->name('contact.store');