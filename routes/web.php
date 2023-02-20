<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\MainIndexController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\LanguagePageConroller;
use App\Http\Controllers\ResetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/main', [HomePageController::class, 'main'])->name('main');
    Route::get('/features', [HomePageController::class, 'features'])->name('features');
    Route::get('/portfolio', [HomePageController::class, 'portfolio'])->name('portfolio');
    Route::get('/resume', [HomePageController::class, 'resume'])->name('resume');
    Route::get('/clients', [HomePageController::class, 'clients'])->name('clients');
    Route::get('/pricing', [HomePageController::class, 'pricing'])->name('pricing');
    Route::get('/blog', [HomePageController::class, 'blog'])->name('blog');
    Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
});

// // ADMIN__ROUTE
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {
    Route::get('/', [MainIndexController::class, 'admin'])->name('admin');

    //--->RESET_DB
    Route::get('/reset', [ResetController::class, 'reset'])->name('reset');

    //---> LANG
    Route::group(['prefix' => 'language'], function () {
        Route::get('/', [LanguagePageConroller::class, 'index'])->name('admin.language.index');
        Route::get('/create', [LanguagePageConroller::class, 'create'])->name('admin.language.create');
        Route::post('/', [LanguagePageConroller::class, 'store'])->name('admin.language.store');
        Route::get('/{language}', [LanguagePageConroller::class, 'show'])->name('admin.language.show');
        Route::get('/{language}/edit', [LanguagePageConroller::class, 'edit'])->name('admin.language.edit');
        Route::patch('/{language}', [LanguagePageConroller::class, 'update'])->name('admin.language.update');
        Route::delete('/{language}', [LanguagePageConroller::class, 'destroy'])->name('admin.language.destroy');
    });


    Route::post('menus/save', [MenuController::class, 'save'])->name('menus.save');
    Route::post('menus/{id}/toggle-publish', [MenuController::class, 'togglePublish'])->name('admin.menus.toggle-publish')->where('id', '[0-9]+');
    Route::resource('/menus', [MenuController::class]);


    //---> PAGES
    Route::group(['prefix' => 'page'], function () {
        Route::get('/', [PageController::class, 'index'])->name('admin.page.index');
        Route::get('/create', [PageController::class, 'create'])->name('admin.page.create');
        Route::post('/', [PageController::class, 'store'])->name('admin.page.store');
        Route::get('/{page}', [PageController::class, 'show'])->name('admin.page.show');
        Route::get('/{page}/edit', [PageController::class, 'edit'])->name('admin.page.edit');
        Route::patch('/{page}', [PageController::class, 'update'])->name('admin.page.update');
        Route::delete('/{page}', [PageController::class, 'destroy'])->name('admin.page.destroy');
    });

    //---> BLOG
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/create', [BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('/{blog}', [BlogController::class, 'show'])->name('admin.blog.show');
        Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::patch('/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    });

    // //---> CATEGORY
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    //---> UAERS
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::put('/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
    });
});
