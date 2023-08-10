<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\TableCategoryController;

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
Route::get('/list',[TableCategoryController::class,'index']);
Route::post('/store',[TableCategoryController::class,'create']);
Route::post('/update/{id}',[TableCategoryController::class,'update']);
Route::delete('/destroy/{id}',[TableCategoryController::class,'destroy']);

Route::get('/show',[ArticleController::class,'index']);
Route::get('/detail/{id}',[ArticleController::class,'detail']);
Route::post('/create',[ArticleController::class,'add']);
Route::post('/renew/{id}',[ArticleController::class,'update']);
Route::delete('/delete/{id}',[ArticleController::class,'destroy']);


Route::get('/listcomment',[CommentController::class,'index']);
Route::post('/add',[CommentController::class,'create']);
Route::put('/deletecomment/{id}',[CommentController::class,'destroy']);

Route::post('/membuatproduk',[ProductController::class,'create']);
Route::get('/listproduk',[ProductController::class,'index']);
Route::get('/detailproduk/{id}',[ProductController::class,'detail']);
Route::post('/updateproduk/{id}',[ProductController::class,'update']);
Route::put('/deleteproduk/{id}',[ProductController::class,'destroy']);
// Route::post('/membuatstock',[ProductStockController::class,'add']);
// Route::get('/listprodukstock',[ProductStockController::class,'index']);