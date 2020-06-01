<?php

use App\Http\Controllers\MyController;
use App\Http\Middleware\CheckAge;
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
    return view('welcome');
});
Route::get('post/{post}/comment/{comment}', function($postId, $commentId){
    return "post: {$postId} - comment: {$commentId}";
});
Route::get('user/{id}', function($id= null){
    return $id;
})->middleware('CheckAge', 'checkName');

Route::get('show/{id}', 'MyController@show');

Route::get('tong/{a}/{b}', 'MyController@tong');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function(){
        return view('layouts.admin');
    })->name('index');
    Route::resource('products', 'ProductController');
    Route::resource('customers', 'CustomerController');
    Route::resource('orders', 'OrderController');
    Route::resource('productbrands', 'ProductBrandController');
    Route::resource('orderdetails', 'OrderDetailController');
    Route::get('layouts', 'LayoutsController@admin');
});

