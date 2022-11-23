<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\MediaFileController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TabController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
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

Route::get('locale/{language}', [LanguageController::class, 'language']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/apply', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/directions', [HomeController::class, 'directions'])->name('directions');
Route::get('/reports', [HomeController::class, 'reports'])->name('reports');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/cooperation', [HomeController::class, 'cooperation'])->name('cooperation');
Route::get('/media', [NewsController::class, 'media'])->name('media');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/torture', [HomeController::class, 'torture'])->name('torture');
Route::get('/soldier_rights', [HomeController::class, 'soldier_rights'])->name('soldier_rights');
Route::get('/women_rights', [HomeController::class, 'women_rights'])->name('women_rights');
Route::get('/child_rights', [HomeController::class, 'child_rights'])->name('child_rights');
Route::get('/invalid_rights', [HomeController::class, 'invalid_rights'])->name('invalid_rights');
Route::get('/statistics', [HomeController::class, 'statistics'])->name('statistics');
Route::get('/information', [HomeController::class, 'information'])->name('information');
Route::get('/business_rights', [HomeController::class, 'business_rights'])->name('business_rights');
Route::get('/decisions', [HomeController::class, 'decisions'])->name('decisions');
// Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/back', [HomeController::class, 'back_page'])->name('back');
Route::get('/interviews', [HomeController::class, 'interviews'])->name('interviews');
Route::get('/videos', [HomeController::class, 'videos'])->name('videos');
Route::get('/posts', [HomeController::class, 'posts'])->name('posts');
Route::get('/success_stories', [HomeController::class, 'success_stories'])->name('success_stories');
Route::get('/education_awareness', [HomeController::class, 'education_awareness'])->name('education_awareness');
Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
Route::get('/program_collaboration', [HomeController::class, 'program_collaboration'])->name('program_collaboration');

//Tab Redirects
Route::get('/reports#apteryges', [HomeController::class, 'reports']);
Route::get('/cooperation#advice', [HomeController::class, 'cooperation']);
Route::get('/reports#opinion', [HomeController::class, 'reports']);


// Admin Panel


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Admin Pages

// Route::group(['prefix' => 'admin',  'middleware' => ['auth']], function () {
//     Route::get('/', [AdminHomeController::class, 'admin']);

// });
// Route::get('/admin', [AdminHomeController::class, 'admin']);

// Route::prefix('admin')->group( function () {
//     Route::resource('news', AdminNewsController::class);
// });
Route::middleware(['auth'])->prefix('admin')->group( function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminHomeController::class, 'admin'] );
    Route::resource('news', AdminNewsController::class);
    Route::resource('page', PageController::class);
    Route::resource('tab', TabController::class);
    Route::resource('media', MediaFileController::class);
});
