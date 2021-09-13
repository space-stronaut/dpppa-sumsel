<?php

use App\Http\Controllers\DocumentController;
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

Route::get('/check', function() {
    if(Auth::guest()) {
        return redirect()->route('login');
    } elseif (Auth::user()->role == 0 || Auth::user()->role == 1) {
        return redirect('admin');
    }
    else {
        return redirect('user');
    }
});

Route::get('/', function () {
    $posts = App\Models\Post::paginate(4);
    return view('welcome', compact('posts'));
});


// For User
Route::middleware(['auth', 'user'])
    ->group( function() {
        Route::get('user', function (){
            return 'Halo User';
        });
    });

// For Admin and Editor
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group( function() {
        Route::get('/', [\App\Http\Controllers\AdminController::class, 'index']);
        Route::resource('posts', \App\Http\Controllers\PostController::class);
        Route::resource('complaints', \App\Http\Controllers\ComplaintController::class);
        Route::resource('post-categories', \App\Http\Controllers\PostCategoryController::class);
        Route::resource('complaint-categories', \App\Http\Controllers\ComplaintCategoryController::class);
        Route::resource('confirmation', \App\Http\Controllers\ConfirmationController::class);
        Route::resource('galleries', \App\Http\Controllers\GalleryController::class);
        Route::resource('users', \App\Http\Controllers\RoleController::class);
        Route::resource('documents', \App\Http\Controllers\DocumentController::class);
        Route::post('/admin/documents/download', [DocumentController::class, 'download']);
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
