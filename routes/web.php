<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\PageLinkController;
use App\Http\Controllers\Frontend\ClientBlogsController;
use App\Http\Controllers\Frontend\pressController;
use App\Http\Controllers\Frontend\ClientImageController;
use App\Http\Controllers\Frontend\careerController;
use App\Http\Controllers\AdminPressController;
use App\Http\Controllers\ImageGalleryController;


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
//for addmin section
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth',], function(){
    // Route::get('/', function () {
    //     return view('admin/dashboard');
    // });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/test', [DashboardController::class, 'test']);
//blog group
    Route::prefix('blog')->name('blog.')->group(function () {
        Route::get('manage', [BlogController::class, 'index'])->name('manage');
        Route::get('create', [BlogController::class, 'create'])->name('create');
        Route::post('store', [BlogController::class, 'store'])->name('store');
        Route::get('edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [BlogController::class, 'update'])->name('update');
        Route::get('delete/{id}', [BlogController::class, 'destroy'])->name('delete');
        Route::get('show/{id}', [BlogController::class, 'show'])->name('show');
});

//press group
Route::prefix('press')->name('press.')->group(function () {
    Route::get('manage', [AdminPressController::class, 'index'])->name('manage');
    Route::get('create', [AdminPressController::class, 'create'])->name('create');
    Route::post('store', [AdminPressController::class, 'store'])->name('store');
    Route::get('edit/{id}', [AdminPressController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [AdminPressController::class, 'show'])->name('show');
    Route::post('update/{id}', [AdminPressController::class, 'update'])->name('update');
    Route::get('delete/{id}', [AdminPressController::class, 'destroy'])->name('delete');
});
Route::prefix('imageGallery')->name('imageGallery.')->group(function () {
    Route::get('manage', [ImageGalleryController::class, 'index'])->name('manage');
    Route::get('create', [ImageGalleryController::class, 'create'])->name('create');
    Route::post('store', [ImageGalleryController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ImageGalleryController::class, 'edit'])->name('edit');
    Route::get('show/{id}', [ImageGalleryController::class, 'show'])->name('show');
    Route::post('update/{id}', [ImageGalleryController::class, 'update'])->name('update');
    Route::get('delete/{id}', [ImageGalleryController::class, 'destroy'])->name('delete');
});
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// for frontend section
//    Route::get('/', function () {
//         return view('/frontend/home');
//     });
Route::get('/', [HomepageController::class, 'index'])->name('home');



//frontend blog section
Route::prefix('blog')->name('blog.')->group(function () {
Route::get('/all-blogs', [ClientBlogsController::class, 'index'])->name('index');
Route::get('/single-blog/{id}', [ClientBlogsController::class, 'show'])->name('single');
});

//frontend career section
Route::prefix('career')->name('career.')->group(function () {
    Route::get('/career', [careerController::class, 'index'])->name('index');
    Route::get('/dspHiring', [careerController::class, 'dspHiring'])->name('dspHiring');
    Route::post('/support', [careerController::class, 'store'])->name('store');


    });

 Route::get('/press', [pressController::class, 'index']);

Route::get('/about', [PageLinkController::class, 'about']);
Route::get('/ourteam', [PageLinkController::class, 'ourteam']);

//our service

Route::get('/ourService', [PageLinkController::class, 'ourService']);
Route::get('/remortMonitoring', [PageLinkController::class, 'remortMonitoring']);
Route::get('/directSupport', [PageLinkController::class, 'directSupport']);
Route::get('/emergencyResponse', [PageLinkController::class, 'emergencyResponse']);
Route::get('/campusAmbassador', [PageLinkController::class, 'campusAmbassador']);

Route::get('/quiz', [PageLinkController::class, 'quiz']);


Route::get('/videoGallery', [PageLinkController::class, 'videoGallery']);
Route::get('/testPage', [PageLinkController::class, 'testPage']);

//user Image Gallery
Route::get('/imageGallery', [ClientImageController::class, 'index']);


