<?php

use Illuminate\Support\Facades\Route;


// Dashboard
Route::get('/',App\Livewire\Backend\Buyer\Dashboard::class)->name('dashboard');
Route::get('/find-workers',App\Livewire\Backend\Buyer\FindWorker::class)->name('find.worker');
Route::get('/worker-request-history',App\Livewire\Backend\Buyer\WorkerRequestHistory::class)->name('worker.request.history');
Route::get('/worker-request/{id}',App\Livewire\Backend\Buyer\WorkerRequest::class)->name('worker.request');

// Bank Info
Route::get('/bank-infos',App\Livewire\Backend\Buyer\BankInfo::class)->name('bank.info');
// My Balance
Route::get('/my-balance',App\Livewire\Backend\Buyer\MyBalance::class)->name('my.balance');
// My Bank Info
Route::get('/my-bank-info',App\Livewire\Backend\Buyer\MyBankInfo::class)->name('my.bank.info');
// Add Bank
Route::get('/add-bank',App\Livewire\Backend\Buyer\AddBank::class)->name('add.bank');
// Edit Bank
Route::get('/edit-bank/{id}',App\Livewire\Backend\Buyer\EditBank::class)->name('edit.bank');

Route::prefix('pay')->name('pay.')->group(function(){
    Route::get('/create',App\Livewire\Backend\Buyer\Pay\Create::class)->name('create');
    Route::get('/history',App\Livewire\Backend\Buyer\Pay\History::class)->name('history');
});

Route::prefix('balance')->group(function(){
    // Create Balance Request
    Route::get('/create-request',App\Livewire\Backend\Buyer\AddBalanceRequest::class)->name('create.balance.request');
    // Request History
    Route::get('/request-history',App\Livewire\Backend\Buyer\RequestHistory::class)->name('balance.request.history');
});

Route::prefix('withdraw')->group(function(){
    // Create withdraw Request
    Route::get('/create-request',App\Livewire\Backend\Buyer\CreateWithdrawRequest::class)->name('create.withdraw.request');
    // Request History
    Route::get('/request-history',App\Livewire\Backend\Agent\WithdrawRequestHistory::class)->name('withdraw.request.history');
});
