<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomepageController::class, 'index'])->name('home.index');

Route::get('/blog', [HomepageController::class, 'index'])->name('home.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('send');

Route::post('comments', [CommentController::class, 'store'])->name('comments');

Route::get('/blog/{category_slug}', [BlogController::class, 'viewCategoryPosts']);
Route::get('/blog/{category_slug}/{blog_slug}', [BlogController::class, 'viewArticle']);

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');

Route::get('/search-results', [SearchController::class, 'search']);
Route::post('/search-results', [SearchController::class, 'search'])->name('search');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('add-category', [CategoryController::class, 'create'])->name('admin.add-category');
    Route::post('add-category', [CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [CategoryController::class, 'update']);

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('add-post', [PostController::class, 'create'])->name('admin.add-post');
    Route::post('add-post', [PostController::class, 'store']);
    Route::get('edit-post/{post_id}', [PostController::class, 'edit'])->name('admin.edit-post');
    Route::put('update-post/{post_id}', [PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [PostController::class, 'delete']);
    Route::get('view-post/{post_id}', [PostController::class, 'view']);


    Route::get('authors', [AuthorController::class, 'index'])->name('admin.authors');
    Route::get('add-author', [AuthorController::class, 'create'])->name('admin.add-author');
    Route::post('add-author', [AuthorController::class, 'store']);
    Route::get('edit-author/{author_id}', [AuthorController::class, 'edit'])->name('admin.edit-author');
    Route::put('update-author/{author_id}', [AuthorController::class, 'update']);
    Route::get('delete-author/{author_id}', [AuthorController::class, 'delete']);
    Route::get('view-author/{author_id}', [AuthorController::class, 'view']);


    Route::get('users', [UserController::class, 'index'])->name('admin.users');
    Route::get('user/{user_id}', [UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [UserController::class, 'update']);
});
