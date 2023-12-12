<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $articles = \App\Models\Article::all();
    return view('pages.mainPage', ['articles' => $articles]);
});
Route::view('/addArticle', 'pages.addArticle');
Route::post('/addArticle', function (Request $request) {
    $title = $request->title;
    $content = $request->article;
    $author = $request->author;
    $article = new \App\Models\Article();
    $article->title = $title;
    $article->content = $content;
    $article->author = $author;
    $article->save();
    return redirect()->intended('/');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/blog/{id}', function (Request $request){
    $article = \App\Models\Article::where('id', $request->id)->first();
    return view('pages.blog', ['article'=>$article]);
});
require __DIR__ . '/auth.php';
