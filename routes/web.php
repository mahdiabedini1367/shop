<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\HomeController;
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

Route::get('/', [HomeController::class,'index']);



Route::group(['prefix' => 'adminpanel'], function () {

});
Route::prefix('/adminpanel')->group(function (){
    Route::get('/', function () {
        return view('admin.home');
    });

//    Route::prefix('/categories')->group(function (){
//        Route::get('/',[CategoryController::class,'index'])->name('admin.categories.index');
//        Route::get('/create',[CategoryController::class,'create'])->name('admin.categories.create');
//        Route::post('/store',[CategoryController::class,'store'])->name('admin.categories.store');
//        Route::get('/{category}/edit',[CategoryController::class,'edit'])->name('admin.categories.edit');
//        Route::patch('/{category}',[CategoryController::class,'update'])->name('admin.categories.update');
//        Route::delete('/{category}',[CategoryController::class,'destroy'])->name('admin.categories.destroy');
//    });
    Route::resource('categories', CategoryController::class);
});




