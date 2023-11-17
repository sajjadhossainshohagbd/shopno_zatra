<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/


Route::get('/',App\Livewire\Frontend\Index::class)->name('home');

// Hajj Details & Order
Route::get('/{type}/package-details/{id}',App\Livewire\Frontend\Hajj\Details::class)->name('hajj.details');
Route::get('/hajj-order/{id}',App\Livewire\Frontend\Hajj\Order::class)->name('hajj.order');

// Work Visa Package & Order
Route::get('/work-visa-details/{id}',App\Livewire\Frontend\WorkVisa\Details::class)->name('work.visa.details');
Route::get('/work-visa-order/{id}',App\Livewire\Frontend\WorkVisa\Order::class)->name('work.order');

// Education Visa Package & Order
Route::get('/education-visa-details/{id}',App\Livewire\Frontend\EducationVisa\Details::class)->name('education.visa.details');
Route::get('/education-visa-order/{id}',App\Livewire\Frontend\EducationVisa\Order::class)->name('education.order');

// Medical Visa Package & Order
Route::get('/medical-visa-details/{id}',App\Livewire\Frontend\MedicalVisa\Details::class)->name('medical.visa.details');
Route::get('/medical-visa-order/{id}',App\Livewire\Frontend\MedicalVisa\Order::class)->name('medical.order');

// Holiday Package & Order
Route::get('/holiday-details/{id}',App\Livewire\Frontend\Holiday\Details::class)->name('holiday.details');
Route::get('/holiday-order/{id}',App\Livewire\Frontend\Holiday\Order::class)->name('holiday.order');

// Service Details
Route::get('services-details/{id}',App\Livewire\Frontend\Service\Details::class)->name('services.details');

// CV Builder
Route::get('/cv-builder',[App\Http\Controllers\Frontend\CVBuilderController::class,'index'])->name('cv.builder');
Route::post('/preview-cv',[App\Http\Controllers\Frontend\CVBuilderController::class,'preview'])->name('preview.cv');

// Courses
Route::prefix('courses')->group(function () {
    Route::get('/cart',App\Livewire\Frontend\Courses\Cart::class)->name('courses.cart');
    Route::get('/checkout',App\Livewire\Frontend\Courses\Checkout::class)->name('courses.checkout');
    Route::get('/',App\Livewire\Frontend\Courses\Index::class)->name('courses');
    Route::get('/{slug}',App\Livewire\Frontend\Courses\Details::class)->name('course.details');
});

// User Dashboard
Route::prefix('user')->middleware('auth')->name('user.')->group(function(){
    Route::get('my-profile',App\Livewire\Frontend\User\MyProfile::class)->name('my.profile');
    Route::get('bank-info',App\Livewire\Frontend\User\BankInfo::class)->name('bank.info');
    Route::get('add-balance-request',App\Livewire\Frontend\User\AddBalanceRequest::class)->name('add.balance.request');
    Route::get('balance-transfer',App\Livewire\Frontend\User\BalanceTransfer::class)->name('balance.transfer');
    Route::get('transaction-statement',App\Livewire\Frontend\User\TransactionStatement::class)->name('transaction.statement');
    Route::get('balance-cost-history',App\Livewire\Frontend\User\BalanceCostHistory::class)->name('balance.cost.history');
    Route::get('my-courses',App\Livewire\Frontend\User\PurchaseCourse::class)->name('my.courses');
    Route::get('course/learning/{id}/{content_id?}',App\Livewire\Frontend\User\CourseLearn::class)->name('course.learn');
    Route::get('logout',function(){
        Auth::logout();
        session()->regenerate();

        return to_route('home');
    })->name('logout');
});

// Guest
Route::middleware('guest')->group(function(){
    Route::get('/login',App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', App\Livewire\Auth\Register::class)->name('register');
    Route::get('/forget-password', App\Livewire\Auth\ForgetPassword::class)->name('forget.password');
    Route::get('reset-password/{token}',App\Livewire\Auth\ResetPassword::class)->name('password.reset');
});
