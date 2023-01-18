<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Post;
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


Route::get('/dashboard', function () {
    $posts = Post::paginate(6);

    return view('dashboard', compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Route::get('/create', function () {
    //     return view('create');
    // })->middleware(['auth', 'verified'])->name('create');

// Route::get('/posts/my-posts', function(){
//     return view('posts.my-posts');
// })->name('my-posts');

Route::get('/posts/my-posts', [PostController::class, 'myPosts'])->name('my-posts');

    
Route::get('/posts/create', [PostController::class, 'create']);
    
Route::post('/posts/create', [PostController::class, 'store']);


Route::resource('posts', PostController::class); 


Route::get('/posts/modify', [PostController::class, 'edit'])->name('modify-post');

Route::post('/posts/modify', [PostController::class, 'update']);

Route::post('/posts/destroy', [PostController::class, 'destroy']);



require __DIR__.'/auth.php';


// Route::get('/allposts', [PostController::class, 'index']);



// Route::get('/', [WelcomeController::class, 'index']);



// Route::get('/user/{id}', [UserController::class, 'show']);
