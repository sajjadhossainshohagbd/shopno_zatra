<?php

use App\Livewire\Backend\Dashboard;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


// Dashboard
Route::get('/',Dashboard::class)->name('admin.dashboard');

// Cache Clear
Route::get('/cache-clear',function (){
    Artisan::call('optimize:clear');
    return Artisan::output();
})->name('cache.clear');

// Accounts
Route::prefix('accounts')->name('accounts.')->group(function(){
    Route::get('/courses',App\Livewire\Backend\Accounts\Course::class)->name('courses');
    Route::get('/hajj-visa',App\Livewire\Backend\Accounts\HajjVisa::class)->name('hajj.visa');
    Route::get('/work-visa',App\Livewire\Backend\Accounts\WorkVisa::class)->name('work.visa');
    Route::get('/education-visa',App\Livewire\Backend\Accounts\EducationVisa::class)->name('education.visa');
    Route::get('/medical-visa',App\Livewire\Backend\Accounts\MedicalVisa::class)->name('medical.visa');
    Route::get('/holiday-pack',App\Livewire\Backend\Accounts\HolidayPack::class)->name('holiday.pack');
    Route::get('/buyers',App\Livewire\Backend\Accounts\Buyer::class)->name('buyer');
    Route::get('/agents',App\Livewire\Backend\Accounts\Agent::class)->name('agent');
    Route::get('/customers',App\Livewire\Backend\Accounts\Customer::class)->name('customer');
});

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

// Services
Route::prefix('services')->name('services.')->group(function(){
    Route::get('/{type}',App\Livewire\Backend\Service\Index::class)->name('index');
    Route::get('/add/{type}',App\Livewire\Backend\Service\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Service\Edit::class)->name('edit');
    Route::get('/orders/{type}',App\Livewire\Backend\Service\Orders::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\Service\OrderDetails::class)->name('order.details');
});

// Work Visa
Route::prefix('work-visa')->name('work.visa.')->group(function(){
    Route::get('/',App\Livewire\Backend\WorkVisa\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\WorkVisa\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\WorkVisa\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\WorkVisa\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\WorkVisa\OrderDetails::class)->name('order.details');
    Route::get('request-history',App\Livewire\Backend\WorkVisa\RequestHistory::class)->name('request.history');
    Route::get('request-details/{id}',App\Livewire\Backend\WorkVisa\RequestDetails::class)->name('request.details');
});

// Education
Route::prefix('education-visa')->name('education.visa.')->group(function(){
    Route::get('/',App\Livewire\Backend\EducationVisa\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\EducationVisa\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\EducationVisa\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\EducationVisa\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\EducationVisa\OrderDetails::class)->name('order.details');
    Route::get('request-history',App\Livewire\Backend\EducationVisa\RequestHistory::class)->name('request.history');
    Route::get('request-details/{id}',App\Livewire\Backend\EducationVisa\RequestDetails::class)->name('request.details');
});

// Medical
Route::prefix('medical-visa')->name('medical.visa.')->group(function(){
    Route::get('/',App\Livewire\Backend\MedicalVisa\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\MedicalVisa\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\MedicalVisa\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\MedicalVisa\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\MedicalVisa\OrderDetails::class)->name('order.details');
    Route::get('request-history',App\Livewire\Backend\MedicalVisa\RequestHistory::class)->name('request.history');
    Route::get('request-details/{id}',App\Livewire\Backend\MedicalVisa\RequestDetails::class)->name('request.details');
});

// Holiday Package
Route::prefix('holiday-package')->name('holiday.')->group(function(){
    Route::get('/',App\Livewire\Backend\Holiday\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Holiday\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Holiday\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\Holiday\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\Holiday\OrderDetails::class)->name('order.details');
    Route::get('request-history',App\Livewire\Backend\Holiday\RequestHistory::class)->name('request.history');
    Route::get('request-details/{id}',App\Livewire\Backend\Holiday\RequestDetails::class)->name('request.details');
});

// Tourist Package
Route::prefix('tourist')->name('tourist.')->group(function(){
    Route::get('/',App\Livewire\Backend\Tourist\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Tourist\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Tourist\Edit::class)->name('edit');
    Route::get('orders',App\Livewire\Backend\Tourist\Order::class)->name('orders');
    Route::get('order-details/{id}',App\Livewire\Backend\Tourist\OrderDetails::class)->name('order.details');
    Route::get('request-history',App\Livewire\Backend\Tourist\RequestHistory::class)->name('request.history');
    Route::get('request-details/{id}',App\Livewire\Backend\Tourist\RequestDetails::class)->name('request.details');
});

// Agent
Route::prefix('agents')->name('agent.')->group(function(){
    Route::get('/',App\Livewire\Backend\Agent\AgentList::class)->name('index');
    Route::get('/requests',App\Livewire\Backend\Agent\RequestList::class)->name('request.list');
    Route::get('/request/details/{id}',App\Livewire\Backend\Agent\RequestDetails::class)->name('request.details');
});

// Buyer
Route::prefix('buyer')->name('buyer.')->group(function(){
    Route::get('/',App\Livewire\Backend\Buyer\BuyerList::class)->name('index');
    Route::get('/requests',App\Livewire\Backend\Buyer\RequestList::class)->name('request.list');
    Route::get('/request/details/{id}',App\Livewire\Backend\Buyer\RequestDetails::class)->name('request.details');
});

// Worker
Route::prefix('worker')->name('worker.')->group(function(){
    Route::get('/',App\Livewire\Backend\Worker\WorkerList::class)->name('index');
    Route::get('/buyer-requests',App\Livewire\Backend\Worker\BuyerRequest::class)->name('buyer.requests');
    Route::get('/buyer-request-details/{id}',App\Livewire\Backend\Worker\BuyerRequestDetails::class)->name('buyer.request.details');
    Route::get('/requests',App\Livewire\Backend\Worker\RequestList::class)->name('request.list');
    Route::get('/request/details/{id}',App\Livewire\Backend\Worker\RequestDetails::class)->name('request.details');
});

// Bank Info
Route::prefix('bank-info')->name('bank.info.')->group(function(){
    Route::get('/',App\Livewire\Backend\BankInfo\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\BankInfo\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\BankInfo\Edit::class)->name('edit');
});

// Balancce Request
Route::prefix('balance-request')->name('balance.request.')->group(function(){
    Route::get('/{type?}',App\Livewire\Backend\BalanceRequest\Index::class)->name('index');
    Route::get('/details/{id}',App\Livewire\Backend\BalanceRequest\Details::class)->name('details');
});

// Balancce Transfer Request
Route::prefix('balance-transfer')->name('balance.transfer.')->group(function(){
    Route::get('/{type?}',App\Livewire\Backend\BalanceTransferRequest\Index::class)->name('index');
    Route::get('/details/{id}',App\Livewire\Backend\BalanceTransferRequest\Details::class)->name('details');
});

// Balance Withdraw Request
Route::prefix('balance-withdraw')->name('balance.withdraw.')->group(function(){
    Route::get('/{type?}',App\Livewire\Backend\BalanceWithdrawRequest\Index::class)->name('index');
    Route::get('/details/{id}',App\Livewire\Backend\BalanceWithdrawRequest\Details::class)->name('details');
});

// Marketing
Route::prefix('marketing')->name('marketing.')->group(function(){
    Route::get('/{type}',App\Livewire\Backend\Marketing\Index::class)->name('index');
    Route::get('/add/{type}',App\Livewire\Backend\Marketing\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Marketing\Edit::class)->name('edit');
});

// Marketing
Route::prefix('korea.visa')->name('korea.visa.')->group(function(){
    Route::get('/user-list',App\Livewire\Backend\Korea\UserList::class)->name('user.list');
    Route::get('/deduct-balance/{id}',App\Livewire\Backend\Korea\Deduct::class)->name('deduct.balance');
});

// News Media
Route::prefix('news-categories')->name('news.category.')->group(function(){
    Route::get('/',App\Livewire\Backend\News\Category\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\News\Category\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\News\Category\Edit::class)->name('edit');
});

// Posts
Route::prefix('posts')->name('post.')->group(function(){
    Route::get('/',App\Livewire\Backend\News\Post\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\News\Post\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\News\Post\Edit::class)->name('edit');
});

// Pages
Route::prefix('pages')->name('page.')->group(function(){
    Route::get('/',App\Livewire\Backend\Page\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Page\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Page\Edit::class)->name('edit');
});
// Offices
Route::prefix('offices')->name('office.')->group(function(){
    Route::get('/',App\Livewire\Backend\Office\Index::class)->name('index');
    Route::get('/add',App\Livewire\Backend\Office\Add::class)->name('add');
    Route::get('/edit/{id}',App\Livewire\Backend\Office\Edit::class)->name('edit');
});

// Settings
Route::get('/settings',App\Livewire\Backend\Settings\Index::class)->name('settings');
Route::post('/setting-store',App\Http\Controllers\Backend\SettingsController::class)->name('settings.store');

