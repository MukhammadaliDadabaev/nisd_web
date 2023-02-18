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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::get('/', [MainIndexController::class, 'admin'])->name('admin');
  Route::get('/reset', [ResetController::class, 'reset'])->name('reset');

  Route::get('/language', [LanguagePageConroller::class, 'index'])->name('admin.language.index');
  Route::get('/language/create', [LanguagePageConroller::class, 'create'])->name('admin.language.create');
  Route::post('/language', [LanguagePageConroller::class, 'store'])->name('admin.language.store');
  Route::get('/language/{language}', [LanguagePageConroller::class, 'show'])->name('admin.language.show');
  Route::get('/language/{language}/edit', [LanguagePageConroller::class, 'edit'])->name('admin.language.edit');
  Route::patch('/language/{language}', [LanguagePageConroller::class, 'update'])->name('admin.language.update');
  Route::delete('/language/{language}', [LanguagePageConroller::class, 'destroy'])->name('admin.language.destroy');

  //---> PAGES
  Route::get('/page', [PageController::class, 'index'])->name('admin.page.index');
  Route::get('/page/create', [PageController::class, 'create'])->name('admin.page.create');
  Route::post('/page', [PageController::class, 'store'])->name('admin.page.store');
  Route::get('/page/{page}', [PageController::class, 'show'])->name('admin.page.show');
  Route::get('/page/{page}/edit', [PageController::class, 'edit'])->name('admin.page.edit');
  Route::patch('/page/{page}', [PageController::class, 'update'])->name('admin.page.update');
  Route::delete('/page/{page}', [PageController::class, 'destroy'])->name('admin.page.destroy');

  //---> BLOG
  Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog.index');
  Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
  Route::post('/blog', [BlogController::class, 'store'])->name('admin.blog.store');
  Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('admin.blog.show');
  Route::get('/blog/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
  Route::patch('/blog/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
  Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');

  // //---> CATEGORY
  Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
  Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
  Route::post('/category', [CategoryController::class, 'store'])->name('admin.category.store');
  Route::get('/category/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
  Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
  Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
  Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

  //---> UAERS
  Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
  Route::get('/user/create', [UserController::class, 'create'])->name('admin.user.create');
  Route::post('/user', [UserController::class, 'store'])->name('admin.user.store');
  Route::get('/user/{user}', [UserController::class, 'show'])->name('admin.user.show');
  Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
  Route::patch('/user/{user}', [UserController::class, 'update'])->name('admin.user.update');
  Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
});
