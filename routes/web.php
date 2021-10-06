<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\front\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Response;
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
    return view('front.home');
})->name('front.home');
Route::get('front/about', function () {
    return view('front.about');
})->name('front.about');
Route::get('front/portfolio', function () {
    return view('front.projects');
})->name('front.projects');
Route::get('front/contact', function () {
    return view('front.contact');
})->name('front.contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/front/blog', [BlogController::class, 'index'])->name('front.blog');
Route::get('/front/blog/{post}', [BlogController::class, 'show'])->name('front.blog.show');
Route::get('/download/cv', function(){
    $file = storage_path()."/cv/resume.pdf";
    return response()->download($file,'resume.pdf');
})->name('cv');



Route::group(['middleware'=>'auth'], function(){
    Route::get('admin', function(){
        return view('admin.dashboard');
    })->name('admin');
    //Routes for posts
    Route::get('/posts', [PostController::class,'index'])->name('admin.post.index');
    Route::get('/posts/create', [PostController::class,'create'])->name('admin.post.create');
    Route::post('/posts/store', [PostController::class,'store'])->name('admin.post.store');
    Route::get('/posts/show/{post}', [PostController::class,'show'])->name('admin.post.show');
    Route::get('/posts/edit/{post}', [PostController::class,'edit'])->name('admin.post.edit');
    Route::patch('/posts/update/{post}', [PostController::class,'update'])->name('admin.post.update');
    Route::delete('/posts/destroy/{post}', [PostController::class,'destroy'])->name('admin.post.destroy');
    //Routes for contacts
    Route::get('/contacts', [ContactController::class,'index'])->name('admin.contact.index');
    Route::get('/contacts/show/{contact}', [ContactController::class,'show'])->name('admin.contact.show');
    Route::delete('/contact/destroy/{contact}', [ContactController::class,'destroy'])->name('admin.contact.destroy');
});

require __DIR__.'/auth.php';
