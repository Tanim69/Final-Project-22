<?php
namespace App\Http\Controllers\Backend;
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

Route::get('/', function () {
    return view('backend/pages/dashboard/home');
});
Route::get('/house',[HouseController::class,'list'])->name('house');
Route::post('/house/create',[HouseController::class,'create'])->name('house.create');
Route::get('/dashboard',[HouseController::class,'dashboard'])->name('home');