<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Test\ConverterController;
use App\Http\Controllers\Test\ConverterPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', SiteController::class);
Route::get('/store', StoreController::class);
Route::get('/store/{category}/{product}', ProductPageController::class)->name('store.product');


Route::get('/cart', [CartController::class, 'getCart']);
Route::get('/add_to_cart', [CartController::class, 'addToCart']);
Route::get('/test', function (\Illuminate\Http\Request $request){

//    $client = new \GuzzleHttp\Client();
//    $response = $client->request('GET', 'https://www.nbrb.by/api/exrates/rates/145?ondate=2016-7-1&periodicity=1');

    $response = Http::acceptJson()->get('https://www.nbrb.by/api/exrates/rates/');
    dd($response->collect());
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', [MyController::class, 'index']);
//    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resources([
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'articles' => ArticleController::class,
    ]);
});
Route::get('/test/converter', ConverterController::class);
Route::post('/test/converter', ConverterPostController::class);

Route::get('/test', function(\Illuminate\Http\Request $request){
    $query = [
        'min' => 0,
        'max' => 10000,
        'default' => 'Unrealistic+number+bro',
    ];
    $response = Http::get('http://numbersapi.com/random');
    dd($response->body());

});


