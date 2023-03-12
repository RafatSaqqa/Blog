<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Mail\BlogMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::controller(ServicesController::class)->group(function () {
    Route::get('/services', 'index')->name('services');
    Route::get('/contact', 'index1')->name('contact');
    Route::get('/about', 'index2')->name('about');


});
Route::controller(ContactController::class)->group(function () {

    Route::post('/contact', 'index')->name('Cont');

});

// Route::get('/send', function () {
//     Mail::to('rafatsaqqa@yahoo.com')->send(new BlogMail);

// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','UserStatus','UserType'])->name('dashboard');

Route::middleware('auth','UserStatus')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth','UserType')->group(function () {

Route::get('adminArea',[AdminController::class,'index'])->name('dashboard');
Route::get('adminArea/create',[AdminController::class,'create'])->name('create');
Route::get('adminArea/edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::put('adminArea/update/{id}',[AdminController::class,'update'])->name('update');
Route::delete('adminArea/destroy/{id}',[AdminController::class,'destroy'])->name('destroy');
Route::get('adminArea/show',[AdminController::class,'show'])->name('show');
Route::post('adminArea/store',[AdminController::class,'store'])->name('store');


Route::get('adminArea/Contact.Create',[AdminContactController::class,'create'])->name('Contact.Create');
Route::delete('adminArea/Contact.destroy/{id}',[AdminContactController::class,'destroy'])->name('Contact.destroy');
});

