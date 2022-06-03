<?php

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


Route::get('index','Takrity@index')->name('index');
Route::get('about_us','Takrity@about_us')->name('about_us');
Route::get('product','Takrity@product')->name('product');
Route::get('portfolio','Takrity@portfolio')->name('portfolio');
 Route::get('products1/{id}','Takrity@products_1')->name('products.1');
 Route::get('products2/{id}','Takrity@products_2')->name('products.2');
Route::get('products3/{id}','Takrity@products3')->name('products3');
Route::get('new','Takrity@new')->name('new');
Route::get('news_details/{id}','Takrity@news_details')->name('news_details');
Route::get('careers','Takrity@careers')->name('careers');
Route::get('contact_us','Takrity@contact_us')->name('contact_us');


 Auth::routes();



 Route::get('/dashboard', 'ProductController@index')->name('products.dash');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/store', 'ProductController@store')->name('product.store');
Route::get('/product/show/{id}', 'ProductController@show')->name('product.show');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::put('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/product/destroy/{id}', 'ProductController@destroy')->name('product.destroy');


 Route::get('/portfolio.dash', 'PortfolioController@index')->name('portfolio.dash');
Route::get('/portfolio/create', 'PortfolioController@create')->name('portfolio.create');
Route::post('/Portfolio/store', 'PortfolioController@store')->name('portfolio.store');
Route::get('/portfolio/show/{id}', 'PortfolioController@show')->name('portfolio.show');
Route::get('/portfolio/edit/{id}', 'PortfolioController@edit')->name('portfolio.edit');
Route::put('/portfolio/update/{id}', 'PortfolioController@update')->name('portfolio.update');
Route::get('/portfolio/destroy/{id}', 'PortfolioController@destroy')->name('portfolio.destroy');


Route::get('/news_dashboard', 'NewsController@index')->name('news.dash');
Route::get('/newsdash/create', 'NewsController@create')->name('news.dash.create');
Route::post('/newsdash/store', 'NewsController@store')->name('news.dash.store');
Route::get('/newsdash/show/{id}', 'NewsController@show')->name('news.dash.show');
Route::get('/newsdash/edit/{id}', 'NewsController@edit')->name('news.dash.edit');
Route::put('/newsdash/update/{id}', 'NewsController@update')->name('news.dash.update');
Route::get('/newsdash/destroy/{id}', 'NewsController@destroy')->name('news.dash.destroy');


Route::get('/about_dashboard', 'AboutbetterController@index')->name('about.dash');
Route::get('/about/create', 'AboutbetterController@create')->name('about.dash.create');
Route::post('/about/store', 'AboutbetterController@store')->name('about.dash.store');
Route::get('/about/show/{id}', 'AboutbetterController@show')->name('about.dash.show');
Route::get('/about/edit/{id}', 'AboutbetterController@edit')->name('about.dash.edit');
Route::put('/about/update/{id}', 'AboutbetterController@update')->name('about.dash.update');
Route::get('/about/destroy/{id}', 'AboutbetterController@destroy')->name('about.dash.destroy');


Route::get('/aboutmeet_dashboard', 'AboutmeetController@index')->name('about.meet.dash');
Route::get('/aboutmeet/create', 'AboutmeetController@create')->name('about.meet.dash.create');
Route::post('/aboutmeet/store', 'AboutmeetController@store')->name('about.meet.dash.store');
Route::get('/aboutmeet/show/{id}', 'AboutmeetController@show')->name('about.meet.dash.show');
Route::get('/aboutmeet/edit/{id}', 'AboutmeetController@edit')->name('about.meet.dash.edit');
Route::put('/aboutmeet/update/{id}', 'AboutmeetController@update')->name('about.meet.dash.update');
Route::get('/aboutmeet/destroy/{id}', 'AboutmeetController@destroy')->name('about.meet.dash.destroy');


Route::get('/contact_us_dashboard', 'ContactusController@index')->name('contact_us.dash');
Route::get('/contact_us/create', 'ContactusController@create')->name('contact_us.create');
Route::post('/contact_us/store', 'ContactusController@store')->name('contact_us.store');
Route::get('/contact_us/show/{id}', 'ContactusController@show')->name('contact_us.show');
Route::get('/contact_us/edit/{id}', 'ContactusController@edit')->name('contact_us.edit');
Route::put('/contact_us/update/{id}', 'ContactusController@update')->name('contact_us.update');
Route::get('/contact_us/destroy/{id}', 'ContactusController@destroy')->name('contact_us.destroy');

Route::get('/contact_us_mapdashboard', 'ContactmapController@index')->name('contact_us.map.dash');
Route::get('/contact_us_map/create', 'ContactmapController@create')->name('contact_us.map.create');
Route::post('/contact_us_map/store', 'ContactmapController@store')->name('contact_us.map.store');
Route::get('/contact_us_map/show/{id}', 'ContactmapController@show')->name('contact_us.map.show');
Route::get('/contact_us_map/edit/{id}', 'ContactmapController@edit')->name('contact_us.map.edit');
Route::put('/contact_us_map/update/{id}', 'ContactmapController@update')->name('contact_us.map.update');
Route::get('/contact_us_map/destroy/{id}', 'ContactmapController@destroy')->name('contact_us.map.destroy');


Route::get('/product1/dashboard', 'Product1Controller@index')->name('products1.dash');
Route::get('/product1/dash/create', 'Product1Controller@create')->name('product1.dash.create');
Route::post('/product1/dash/store', 'Product1Controller@store')->name('product1.dash.store');
Route::get('/product1/dash/show/{id}', 'Product1Controller@show')->name('product1.dash.show');
Route::get('/product1/dash/edit/{id}', 'Product1Controller@edit')->name('product1.dash.edit');
Route::put('/product1/dash/update/{id}', 'Product1Controller@update')->name('product1.dash.update');
Route::get('/product1/dash/destroy/{id}', 'Product1Controller@destroy')->name('product1.dash.destroy');


Route::get('/product2/dashboard', 'Product2Controller@index')->name('products2.dash');
Route::get('/product2/dash/create', 'Product2Controller@create')->name('product2.dash.create');
Route::post('/product2/dash/store', 'Product2Controller@store')->name('product2.dash.store');
Route::get('/product2/dash/show/{id}', 'Product2Controller@show')->name('product2.dash.show');
Route::get('/product2/dash/edit/{id}', 'Product2Controller@edit')->name('product2.dash.edit');
Route::put('/product2/dash/update/{id}', 'Product2Controller@update')->name('product2.dash.update');
Route::get('/product2/dash/destroy/{id}', 'Product2Controller@destroy')->name('product2.dash.destroy');

Route::get('/product3/dashboard', 'Product3Controller@index')->name('products3.dash');
Route::get('/product3/dash/create', 'Product3Controller@create')->name('product3.dash.create');
Route::post('/product3/dash/store', 'Product3Controller@store')->name('product3.dash.store');
Route::get('/product3/dash/show/{id}', 'Product3Controller@show')->name('product3.dash.show');
Route::get('/product3/dash/edit/{id}', 'Product3Controller@edit')->name('product3.dash.edit');
Route::put('/product3/dash/update/{id}', 'Product3Controller@update')->name('product3.dash.update');
Route::get('/product3/dash/destroy/{id}', 'Product3Controller@destroy')->name('product3.dash.destroy');


//send mail
Route::post('/send_mail_career', 'CareerController@sendmail')->name('career.send.mail');
Route::post('/send_mail_contact', 'ContactController@sendmailcontact')->name('contact.send.mail');
