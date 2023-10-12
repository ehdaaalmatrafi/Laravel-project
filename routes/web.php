<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Admin\Controllers\TeamController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\PageController;






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
    return view('welcome');
});


//كلاس اوث داخله فنكشن الروتس الخاصه بالتسجيل ودخول وايميلات
Auth::routes();

//روت خاص باليوزر اول مايسجل  يوديه لراوت الهوم
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('home', [HomeController::class, 'index'])->name('home');
});

Route::get('/user/profile',[ProfileController::class,'index'])->name('user/profile');
// routes/web.php



//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/Teams', 'app\Admin\Controllers\TeamController@index');

});

Route::get('/arabic', 'App\Http\Controllers\PageController@arabic')->name('arabic');
 
