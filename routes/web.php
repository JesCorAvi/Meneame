<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    $Articles = Article::orderBy('created_at', 'asc')->Paginate(3);

    return view('articles.index', [
        'articles' => $Articles
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('articles', ArticleController::class);

Route::put('articles/{article}/meneo', [ArticleController::class, 'meneo'])->name('articles.meneo')->middleware("auth");
Route::get('articles/{article}/click', [ArticleController::class, 'click'])->name('articles.click');

Route::resource('comments', CommentController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('articles', ArticleController::class)->only(['create','store','edit','update','destroy']);

});

require __DIR__.'/auth.php';
