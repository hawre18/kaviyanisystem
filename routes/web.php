<?php

use Illuminate\Support\Facades\Route;
Route::get('admin/login','App\Http\Controllers\Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'App\Http\Controllers\Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::get('admin/logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth','namespace'=>'App\Http\Controllers\admin'],function (){
    Route::get('dashboard','IndexController@index')->name('dashboard');
    Route::resource('category','CategoryController');
    Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');
    Route::get('category.indexSetting/{id}','CategoryController@indexSetting')->name('categories.indexSetting');
    Route::post('category.saveSetting/{id}','CategoryController@saveSetting');
    Route::resource('attributegroup','AttributeGroupController');
    Route::get('/attributegroup/delete/{id}','AttributeGroupController@delete')->name('attributegroup.delete');
    Route::resource('attributevalue','AttributeValueController');
    Route::get('/attributevalue/delete/{id}','AttributeValueController@delete')->name('attributevalue.delete');
    Route::post('/photos/upload','ImageController@uploadPhoto')->name('photos.upload');
    Route::resource('brand','BrandController');
    Route::get('brand.delete/{id}','BrandController@delete')->name('brand.delete');
    Route::get('comments','CommentController@index')->name('comments.index');
    Route::get('comments.show/{id}','CommentController@show')->name('comments.show');
    Route::get('comments.delete/{id}','CommentController@delete')->name('comments.delete');
    Route::post('comments/action/{id}','CommentController@action')->name('comments.action');
    Route::get('slides.delete/{id}','CommentController@delete')->name('slides.delete');
    Route::post('slides/action/{id}','SlideController@action')->name('slides.action');
    Route::resource('slides','SlideController');
    Route::resource('products','ProductController');
    Route::get('products/{id}','ProductController@delete')->name('products.delete');
    Route::get('order/pay/{id}','OrderController@orderPay')->name('order.pay');
    Route::get('orders/lists/{id}','OrderController@getOrderLists')->name('orders.lists');
    Route::get('orders/send/{id}','OrderController@send')->name('order.send');
    Route::get('orders/index','OrderController@index')->name('order.index');
});
Route::prefix('api')->group(function () {
    Route::get('/categories', 'App\Http\Controllers\admin\CategoryController@apiIndex');
    Route::post('/categories/attribute', 'App\Http\Controllers\admin\CategoryController@apiIndexAttribute');
});
Route::get('/','App\Http\Controllers\user\IndexController@index')->name('index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
