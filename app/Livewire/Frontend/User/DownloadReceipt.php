<?php

namespace App\Livewire\Frontend\User;

use Livewire\Component;
use App\Models\HajjOrder;
use App\Models\WorkOrder;
use App\Models\CourseEnroll;
use App\Models\MedicalOrder;
use App\Models\ServiceOrder;
use App\Models\BalanceRequest;
use App\Models\EducationOrder;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;
use App\Models\CourseBalanceHistory;

#[Layout('frontend.layouts.app')]
class DownloadReceipt extends Component
{
    #[Title('Downlaod Your Receipt')]
    public function render() 
    {
        $transactions = HajjOrder::query()->own()
        ->select('id','price','created_at',DB::raw("'hajj_order' as type")
        )->union(WorkOrder::query()->own()
            ->select('id','price','created_at',DB::raw("'work_visa_order' as type"))
        )->union(EducationOrder::query()->own()
            ->select('id','price','created_at',DB::raw("'education_visa_order' as type"))
        )->union(MedicalOrder::query()->own()
            ->select('id','price','created_at',DB::raw("'medical_visa_order' as type"))
        )->union(CourseBalanceHistory::query()->own()
            ->select('id',DB::raw('amount as price'),'created_at',DB::raw("'korea_visa' as type"))
        )->union(CourseEnroll::query()->own()
            ->select('id','price','created_at',DB::raw("'course_enrolls' as type"))
        )->union(ServiceOrder::query()->own()
            ->select('id','price','created_at',DB::raw("'service_order' as type"))
        )->union(BalanceRequest::query()->own()
            ->where('type','balance')
            ->select('id',DB::raw('amount as price'),'created_at',DB::raw("'add_balance' as type"))
        )->union(BalanceRequest::query()->own()
            ->where('type','deposit')
            ->select('id',DB::raw('amount as price'),'created_at',DB::raw("'add_balance_for_korea_visa' as type"))
        )->latest()->paginate(40);

        return view('frontend.user.download-receipt',compact('transactions'));
    }
}
