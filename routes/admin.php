<?php

use App\Livewire\Backend\Dashboard;
use Illuminate\Support\Facades\Route;


// Dashboard
Route::get('/',Dashboard::class)->name('admin.dashboard');

// Categories
Route::prefix('categories')->name('categories.')->group(function(){
    Route::get('/',App\Livewire\Backend\Courses\Category\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Courses\Category\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Courses\Category\Edit::class)->name('edit');
});

// Courses
Route::prefix('courses')->name('courses.')->group(function(){
    Route::get('/',App\Livewire\Backend\Courses\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Courses\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Courses\Edit::class)->name('edit');
});

// Course Lesson
Route::prefix('lessons')->name('lessons.')->group(function(){
    Route::get('/',App\Livewire\Backend\Lesson\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Lesson\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Lesson\Edit::class)->name('edit');
});

// Lesson Content
Route::prefix('contents')->name('contents.')->group(function(){
    Route::get('/',App\Livewire\Backend\Content\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Content\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Content\Edit::class)->name('edit');
});

//  Enrolls
Route::get('/course/enrolls',App\Livewire\Backend\CourseEnroll::class)->name('course.enrolls');

// Hajj
Route::prefix('hajj')->name('hajj.')->group(function(){
    Route::get('/',App\Livewire\Backend\Hajj\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Hajj\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Hajj\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\Hajj\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\Hajj\OrderDetails::class)->name('order.details');
});

// Service
Route::prefix('services')->name('services.')->group(function(){
    Route::get('/{type}',App\Livewire\Backend\Service\Index::class)->name('index');
    Route::get('/add/{type}',App\Livewire\Backend\Service\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Service\Edit::class)->name('edit');
});

// Work Visa
Route::prefix('work-visa')->name('work.visa.')->group(function(){
    Route::get('/',App\Livewire\Backend\WorkVisa\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\WorkVisa\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\WorkVisa\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\WorkVisa\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\WorkVisa\OrderDetails::class)->name('order.details');
});

// Education
Route::prefix('education-visa')->name('education.visa.')->group(function(){
    Route::get('/',App\Livewire\Backend\EducationVisa\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\EducationVisa\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\EducationVisa\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\EducationVisa\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\EducationVisa\OrderDetails::class)->name('order.details');
});

// Medical
Route::prefix('medical-visa')->name('medical.visa.')->group(function(){
    Route::get('/',App\Livewire\Backend\MedicalVisa\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\MedicalVisa\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\MedicalVisa\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\MedicalVisa\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\MedicalVisa\OrderDetails::class)->name('order.details');
});

// Holiday Package
Route::prefix('holiday-package')->name('holiday.')->group(function(){
    Route::get('/',App\Livewire\Backend\Holiday\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Holiday\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Holiday\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\Holiday\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\Holiday\OrderDetails::class)->name('order.details');
});
