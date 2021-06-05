<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\FeaturedCategoryController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductPropertyController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\PropertyGroupController;
use App\Http\Controllers\Admin\RoleContorller;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Middleware\CheckPermission;
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

Route::prefix('')->name('client.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/products/{product}', [ClientProductController::class, 'show'])->name('products.show');
    Route::post('/products/{product}/comments/store', [CommentController::class, 'store'])->name('products.comments.store');

    Route::post('/cart/store',[CartController::class,'store'])->name('cart.store');

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register/sendmail', [RegisterController::class, 'sendMail'])->name('register.sendmail');
    Route::get('/register/otp/{user}', [RegisterController::class, 'otp'])->name('register.otp');
    Route::post('/register/verifyOtp/{user}', [RegisterController::class, 'verifyOtp'])->name('register.verifyOtp');

    Route::delete('/logout', [RegisterController::class, 'logout'])->name('logout');
});


Route::group(['prefix' => 'adminpanel'], function () {

});
Route::prefix('/adminpanel')
    ->middleware([CheckPermission::class . ":view_dashboard", 'auth'])
    ->group(function () {


        Route::get('/', function () {
            return view('admin.home');
        });

        Route::resource('offers', OfferController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('featuredCategory', FeaturedCategoryController::class);
        Route::resource('brands', BrandController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('products', ProductController::class);
        Route::resource('products.pictures', PictureController::class);
        Route::resource('products.discounts', DiscountController::class);
        Route::resource('propertyGroups', PropertyGroupController::class);
        Route::resource('properties', PropertyController::class);

        Route::get('/products/{product}/properties', [ProductPropertyController::class, 'index'])->name('products.properties.index');
        Route::get('/products/{product}/properties/create', [ProductPropertyController::class, 'create'])->name('products.properties.create');
        Route::post('/products/{product}/properties', [ProductPropertyController::class, 'store'])->name('products.properties.store');


        Route::resource('roles', RoleContorller::class);
        Route::resource('users', UserController::class);
    });



//
//|Method    |URI                                                  |Name                           |Action
//--------------------------------------------------------------------------------------------------------------------------------------
//|GET|HEAD  | /                                                   |client.index                   |Client\HomeController@index
//|GET|HEAD  | adminpanel                                          |                               |Closure
//|POST      | a/brands                                            |brands.store                   |Admin\BrandController@store
//|GET|HEAD  | a/brands                                            |brands.index                   |Admin\BrandController@index
//|GET|HEAD  | a/brands/create                                     |brands.create                  |Admin\BrandController@create
//|GET|HEAD  | a/brands/{brand}                                    |brands.show                    |Admin\BrandController@show
//|DELETE    | a/brands/{brand}                                    |brands.destroy                 |Admin\BrandController@destroy
//|PUT|PATCH | a/brands/{brand}                                    |brands.update                  |Admin\BrandController@update
//|GET|HEAD  | a/brands/{brand}/edit                               |brands.edit                    |Admin\BrandController@edit
//|GET|HEAD  | a/categories                                        |categories.index               |Admin\CategoryController@index
//|POST      | a/categories                                        |categories.store               |Admin\CategoryController@store
//|GET|HEAD  | a/categories/create                                 |categories.create              |Admin\CategoryController@create
//|DELETE    | a/categories/{category}                             |categories.destroy             |Admin\CategoryController@destroy
//|GET|HEAD  | a/categories/{category}                             |categories.show                |Admin\CategoryController@show
//|PUT|PATCH | a/categories/{category}                             |categories.update              |Admin\CategoryController@update
//|GET|HEAD  | a/categories/{category}/edit                        |categories.edit                |Admin\CategoryController@edit
//|POST      | a/featuredCategory                                  |featuredCategory.store         |Admin\FeaturedCategoryController@store
//|GET|HEAD  | a/featuredCategory                                  |featuredCategory.index         |Admin\FeaturedCategoryController@index
//|GET|HEAD  | a/featuredCategory/create                           |featuredCategory.create        |Admin\FeaturedCategoryController@create
//|DELETE    | a/featuredCategory/{featuredCategory}               |featuredCategory.destroy       |Admin\FeaturedCategoryController@destroy
//|PUT|PATCH | a/featuredCategory/{featuredCategory}               |featuredCategory.update        |Admin\FeaturedCategoryController@update
//|GET|HEAD  | a/featuredCategory/{featuredCategory}               |featuredCategory.show          |Admin\FeaturedCategoryController@show
//|GET|HEAD  | a/featuredCategory/{featuredCategory}/edit          |featuredCategory.edit          |Admin\FeaturedCategoryController@edit
//|POST      | a/offers                                            |offers.store                   |Admin\OfferController@store
//|GET|HEAD  | a/offers                                            |offers.index                   |Admin\OfferController@index
//|GET|HEAD  | a/offers/create                                     |offers.create                  |Admin\OfferController@create
//|PUT|PATCH | a/offers/{offer}                                    |offers.update                  |Admin\OfferController@update
//|DELETE    | a/offers/{offer}                                    |offers.destroy                 |Admin\OfferController@destroy
//|GET|HEAD  | a/offers/{offer}                                    |offers.show                    |Admin\OfferController@show
//|GET|HEAD  | a/offers/{offer}/edit                               |offers.edit                    |Admin\OfferController@edit
//|POST      | a/products                                          |products.store                 |Admin\ProductController@store
//|GET|HEAD  | a/products                                          |products.index                 |Admin\ProductController@index
//|GET|HEAD  | a/products/create                                   |products.create                |Admin\ProductController@create
//|PUT|PATCH | a/products/{product}                                |products.update                |Admin\ProductController@update
//|DELETE    | a/products/{product}                                |products.destroy               |Admin\ProductController@destroy
//|GET|HEAD  | a/products/{product}                                |products.show                  |Admin\ProductController@show
//|GET|HEAD  | a/products/{product}/discounts                      |products.discounts.index       |Admin\DiscountController@index
//|POST      | a/products/{product}/discounts                      |products.discounts.store       |Admin\DiscountController@store
//|GET|HEAD  | a/products/{product}/discounts/create               |products.discounts.create      |Admin\DiscountController@create
//|PUT|PATCH | a/products/{product}/discounts/{discount}           |products.discounts.update      |Admin\DiscountController@update
//|GET|HEAD  | a/products/{product}/discounts/{discount}           |products.discounts.show        |Admin\DiscountController@show
//|DELETE    | a/products/{product}/discounts/{discount}           |products.discounts.destroy     |Admin\DiscountController@destroy
//|GET|HEAD  | a/products/{product}/discounts/{discount}/edit      | products.discounts.edit       |Admin\DiscountController@edit
//|GET|HEAD  | a/products/{product}/edit                           |products.edit                  |Admin\ProductController@edit
//|POST      | a/products/{product}/pictures                       |products.pictures.store        |Admin\PictureController@store
//|GET|HEAD  | a/products/{product}/pictures                       |products.pictures.index        |Admin\PictureController@index
//|GET|HEAD  | a/products/{product}/pictures/create                |products.pictures.create       |Admin\PictureController@create
//|DELETE    | a/products/{product}/pictures/{picture}             |products.pictures.destroy      |Admin\PictureController@destroy
//|GET|HEAD  | a/products/{product}/pictures/{picture}             |products.pictures.show         |Admin\PictureController@show
//|PUT|PATCH | a/products/{product}/pictures/{picture}             |products.pictures.update       |Admin\PictureController@update
//|GET|HEAD  | a/products/{product}/pictures/{picture}/edit        |products.pictures.edit         |Admin\PictureController@edit
//|POST      | a/products/{product}/properties                     |products.properties.store      |Admin\ProductPropertyController@store
//|GET|HEAD  | a/products/{product}/properties                     |products.properties.index      |Admin\ProductPropertyController@index
//|GET|HEAD  | a/products/{product}/properties/create              |products.properties.create     |Admin\ProductPropertyController@create
//|GET|HEAD  | a/properties                                        |properties.index               |Admin\PropertyController@index
//|POST      | a/properties                                        |properties.store               |Admin\PropertyController@store
//|GET|HEAD  | a/properties/create                                 |properties.create              |Admin\PropertyController@create
//|DELETE    | a/properties/{property}                             |properties.destroy             |Admin\PropertyController@destroy
//|GET|HEAD  | a/properties/{property}                             |properties.show                |Admin\PropertyController@show
//|PUT|PATCH | a/properties/{property}                             |properties.update              |Admin\PropertyController@update
//|GET|HEAD  | a/properties/{property}/edit                        |properties.edit                |Admin\PropertyController@edit
//|GET|HEAD  | a/propertyGroups                                    |propertyGroups.index           |Admin\PropertyGroupController@index
//|POST      | a/propertyGroups                                    |propertyGroups.store           |Admin\PropertyGroupController@store
//|GET|HEAD  | a/propertyGroups/create                             |propertyGroups.create          |Admin\PropertyGroupController@create
//|GET|HEAD  | a/propertyGroups/{propertyGroup}                    |propertyGroups.show            |Admin\PropertyGroupController@show
//|PUT|PATCH | a/propertyGroups/{propertyGroup}                    |propertyGroups.update          |Admin\PropertyGroupController@update
//|DELETE    | a/propertyGroups/{propertyGroup}                    |propertyGroups.destroy         |Admin\PropertyGroupController@destroy
//|GET|HEAD  | a/propertyGroups/{propertyGroup}/edit               |propertyGroups.edit            |Admin\PropertyGroupController@edit
//|POST      | a/roles                                             |roles.store                    |Admin\RoleContorller@store
//|GET|HEAD  | a/roles                                             |roles.index                    |Admin\RoleContorller@index
//|GET|HEAD  | a/roles/create                                      |roles.create                   |Admin\RoleContorller@create
//|GET|HEAD  | a/roles/{role}                                      |roles.show                     |Admin\RoleContorller@show
//|DELETE    | a/roles/{role}                                      |roles.destroy                  |Admin\RoleContorller@destroy
//|PUT|PATCH | a/roles/{role}                                      |roles.update                   |Admin\RoleContorller@update
//|GET|HEAD  | a/roles/{role}/edit                                 |roles.edit                     |Admin\RoleContorller@edit
//|POST      | a/sliders                                           |sliders.store                  |Admin\SliderController@store
//|GET|HEAD  | a/sliders                                           |sliders.index                  |Admin\SliderController@index
//|GET|HEAD  | a/sliders/create                                    |sliders.create                 |Admin\SliderController@create
//|DELETE    | a/sliders/{slider}                                  |sliders.destroy                |Admin\SliderController@destroy
//|GET|HEAD  | a/sliders/{slider}                                  |sliders.show                   |Admin\SliderController@show
//|PUT|PATCH | a/sliders/{slider}                                  |sliders.update                 |Admin\SliderController@update
//|GET|HEAD  | a/sliders/{slider}/edit                             |sliders.edit                   |Admin\SliderController@edit
//|GET|HEAD  | a/users                                             |users.index                    |Admin\UserController@index
//|POST      | a/users                                             |users.store                    |Admin\UserController@store
//|GET|HEAD  | a/users/create                                      |users.create                   |Admin\UserController@create
//|GET|HEAD  | a/users/{user}                                      |users.show                     |Admin\UserController@show
//|PUT|PATCH | a/users/{user}                                      |users.update                   |Admin\UserController@update
//|DELETE    | a/users/{user}                                      |users.destroy                  |Admin\UserController@destroy
//|GET|HEAD  | a/users/{user}/edit                                 |users.edit                     |Admin\UserController@edit
//|DELETE    | logout                                              |client.logout                  |Client\RegisterController@logout
//|GET|HEAD  | products/{product}                                  |client.products.show           |Client\ProductController@show
//|POST      | products/{product}/comments/store                   |client.products.comments.store | Client\CommentController@store
//|GET|HEAD  | register                                            |client.register                |Client\RegisterController@create
//|GET|HEAD  | register/otp/{user}                                 |client.register.otp            |Client\RegisterController@otp
//|POST      | register/sendmail                                   |client.register.sendmail       |Client\RegisterController@sendMail
//|POST      | register/verifyOtp/{user}                           |client.register.verifyOtp      |Client\RegisterController@verifyOtp
