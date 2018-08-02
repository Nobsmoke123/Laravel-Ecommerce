<?php

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

Route::get('/','IndexController@index')->name('landing-page');

Auth::routes();

Route::get('/shop/contact',[
    'uses'=>'TestController@contact'
])->name('contact');

Route::get('/shop/about',[
    'uses'=>'TestController@about'
])->name('about');

Route::get('/shop/product-list',[
    'uses'=>'TestController@products_list'
])->name('product-list');

Route::get('/shop/product-grid',[
    'uses'=>'TestController@products_grid'
])->name('product-grid');

Route::get('/shop/category',[
    'uses'=>'TestController@category'
])->name('category');

Route::get('/shop/product/{id}','IndexController@product')->name('product');

Route::get('/shop/delivery','HomeController@delivery')->name('delivery');

Route::get('/shop/payment','HomeController@payment')->name('payment');

Route::get('/shop/receipt','HomeController@receipt')->name('receipt');
Route::get('/shop','IndexController@index')->name('shop');
Route::get('/profile/{id}','ProfileController@show')->name('user-profile');

Route::get('/cart/{id}','CartController@show')->name('cart');
Route::get('/product/view/{id}','IndexController@show_json');
Route::get('/all-products','IndexController@show_all')->name('all-product');
Route::get('/home','HomeController@index');

Route::get('/cart/add/{pdct_id}','CartController@store')->name('cart-add');
Route::get('/cart/delete/{id}','CartController@destroy')->name('cart-delete');
Route::post('/cart/update/{id}','CartController@update')->name('cart-edit');
Route::post('/profile/update/{id}','ProfileController@update')->name('profile-update');
Route::get('/categories/all','IndexController@listCategories')->name('categories');
Route::get('/category/{id}','IndexController@showCategoryProducts')->name('category-products');

Route::get('/test-page',function(){
    return view('auth.admin_login');
});
/* Admin Routes */
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/product-list','ProductController@index')->name('admin:product-list');
    Route::get('/users-list','AdminController@showUsers')->name('admin:users-list');

    Route::get('/settings','SettingsController@showSettings')->name('admin:settings');
    Route::get('/settings/create','SettingsController@createSettings')->name('admin:create-settings');
    Route::post('/settings/save','SettingsController@saveSettings')->name('admin:save-settings');
    Route::get('/settings/edit','SettingsController@editSettings')->name('admin:edit-settings');
    Route::post('/settings/update','SettingsController@updateSettings')->name('admin:update-settings');



    Route::get('/product-create','ProductController@create')->name('admin:product-create');
    Route::post('/product-store','ProductController@store')->name('admin:product-store');
    Route::get('/product-edit/{id}','ProductController@edit')->name('admin:product-edit');
    Route::post('/product-update/{id}','ProductController@update')->name('admin:product-update');
    Route::get('/product-delete/{id}','ProductController@destroy')->name('admin:product-delete');
    Route::get('/category/all','CategoryController@index')->name('admin:category-list');
    Route::get('/category/create','CategoryController@create')->name('admin:category-create');
    Route::post('/category/store','CategoryController@store')->name('admin:category-store');
    Route::get('/category/edit/{id}','CategoryController@edit')->name('admin:category-edit');
    Route::post('/category/update/{id}','CategoryController@update')->name('admin:category-update');
    Route::get('category/delete/{id}','CategoryController@destroy')->name('admin:category-delete');


    Route::get('/admin/add','AdminController@createAdmin')->name('add-admin');
    Route::post('/admin/add','AdminController@saveAdmin')->name('save-admin');



    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});