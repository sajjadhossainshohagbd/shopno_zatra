<?php

use Illuminate\Support\Facades\Route;


// Dashboard
Route::get('/',App\Livewire\Backend\Agent\Dashboard::class)->name('dashboard');

// Bank Info
Route::get('/bank-infos',App\Livewire\Backend\Agent\BankInfo::class)->name('bank.info');
// My Balance
Route::get('/my-balance',App\Livewire\Backend\Agent\MyBalance::class)->name('my.balance');
// My Bank Info
Route::get('/my-bank-info',App\Livewire\Backend\Agent\MyBankInfo::class)->name('my.bank.info');
// Add Bank
Route::get('/add-bank',App\Livewire\Backend\Agent\AddBank::class)->name('add.bank');
// Edit Bank
Route::get('/edit-bank/{id}',App\Livewire\Backend\Agent\EditBank::class)->name('edit.bank');

Route::prefix('balance')->group(function(){
    // Create Balance Request
    Route::get('/create-request',App\Livewire\Backend\Agent\AddBalanceRequest::class)->name('create.balance.request');
    // Request History
    Route::get('/request-history',App\Livewire\Backend\Agent\RequestHistory::class)->name('balance.request.history');
});

Route::prefix('withdraw')->group(function(){
    // Create withdraw Request
    Route::get('/create-request',App\Livewire\Backend\Agent\CreateWithdrawRequest::class)->name('create.withdraw.request');
    // Request History
    Route::get('/request-history',App\Livewire\Backend\Agent\WithdrawRequestHistory::class)->name('withdraw.request.history');
});

// Orders
Route::prefix('orders')->group(function(){
    // Work Visa
    Route::get('work-visa',App\Livewire\Backend\Agent\WorkVisa\Order::class)->name('work.visa.orders');
    Route::get('work-visa/details/{id}',App\Livewire\Backend\Agent\WorkVisa\OrderDetails::class)->name('work.visa.details');
    // Hajj Visa
    Route::get('hajj-visa',App\Livewire\Backend\Agent\HajjVisa\Order::class)->name('hajj.visa.orders');
    Route::get('hajj-visa/details/{id}',App\Livewire\Backend\Agent\HajjVisa\OrderDetails::class)->name('hajj.visa.details');
    // Education Visa
    Route::get('education-visa',App\Livewire\Backend\Agent\EducationVisa\Order::class)->name('education.visa.orders');
    Route::get('education-visa/details/{id}',App\Livewire\Backend\Agent\EducationVisa\OrderDetails::class)->name('education.visa.details');
    // Medical Visa
    Route::get('medical-visa',App\Livewire\Backend\Agent\MedicalVisa\Order::class)->name('medical.visa.orders');
    Route::get('medical-visa/details/{id}',App\Livewire\Backend\Agent\MedicalVisa\OrderDetails::class)->name('medical.visa.details');
    // Holiday Pack
    Route::get('holiday-pack',App\Livewire\Backend\Agent\HolidayPack\Order::class)->name('holiday.pack.orders');
    Route::get('holiday-pack/details/{id}',App\Livewire\Backend\Agent\HolidayPack\OrderDetails::class)->name('holiday.pack.details');
});
