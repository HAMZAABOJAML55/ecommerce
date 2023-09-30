<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;


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
    return View('home');
    // return redirect()->route ('home'); //('client.test');
});
Route::get('home', function () {
    return View('home');
    // return redirect()->route ('home'); //('client.test');
});


// Route::get('/fetch_video',[App\Http\Controllers\VideoController::class,'fetch']);
// Route::get('/index_u',[App\Http\Controllers\VideoController::class,'index']);
// Route::post('/insert_video',[App\Http\Controllers\VideoController::class,'insert'])->name('insert.file');


Route::group(['middleware' => 'auth'], function() {

    Route::get('test',[\App\Http\Controllers\TestController::class, 'index'])->name('client.test');
    Route::post('test',[\App\Http\Controllers\TestController::class, 'store'])->name('client.test.store');
    Route::get('results/{result_id}',[\App\Http\Controllers\ResultController::class, 'show'])->name('client.results.show');


    Route::get('selectCategory',[\App\Http\Controllers\TestController::class,'selectCategory'])->name('selectCategory');
    Route::get('select',[\App\Http\Controllers\TestController::class,'select'])->name('select');
    Route::get('test2/{id}',[\App\Http\Controllers\TestController::class, 'index2'])->name('client.test2');

    // Route::get('selectId',[\App\Http\Controllers\TestController::class, 'index2'])->name('selectId');

    // admin only
    Route::group(['middleware' => 'isAdmin','prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
        Route::delete('permissions_mass_destroy', [\App\Http\Controllers\Admin\PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');
        Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
        Route::delete('roles_mass_destroy', [\App\Http\Controllers\Admin\RoleController::class, 'massDestroy'])->name('roles.mass_destroy');
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::delete('users_mass_destroy', [\App\Http\Controllers\Admin\UserController::class, 'massDestroy'])->name('users.mass_destroy');

        // categories
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
        Route::delete('categories_mass_destroy', [\App\Http\Controllers\Admin\CategoryController::class, 'massDestroy'])->name('categories.mass_destroy');

        // questions
        Route::resource('questions', \App\Http\Controllers\Admin\QuestionController::class);
        Route::delete('questions_mass_destroy', [\App\Http\Controllers\Admin\QuestionController::class, 'massDestroy'])->name('questions.mass_destroy');

        // options
        Route::resource('options', \App\Http\Controllers\Admin\OptionController::class);
        Route::delete('options_mass_destroy', [\App\Http\Controllers\Admin\OptionController::class, 'massDestroy'])->name('options.mass_destroy');

        // results
        Route::resource('results', \App\Http\Controllers\Admin\ResultController::class);
        Route::delete('results_mass_destroy', [\App\Http\Controllers\Admin\ResultController::class, 'massDestroy'])->name('results.mass_destroy');
        // results

        Route::resource('video', \App\Http\Controllers\Admin\VideoController::class);
//        Route::delete('video_mass_destroy', [\App\Http\Controllers\Admin\VideoController::class, 'massDestroy'])->name('video.mass_destroy');

    });


});

Auth::routes();

