<?php

namespace App\Livewire\Frontend\User;

use Livewire\Component;
use App\Models\HajjOrder;
use App\Models\WorkOrder;
use App\Models\MedicalVisa;
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
class PrintReceipt extends Component
{
    public $data;

    public function mount($id,$type)
    {
        $this->data = match($type){
            'hajj_order' => HajjOrder::select('id','price','created_at',DB::raw("'hajj_visa_order' as type"))->own()->findOrFail($id),
            'work_visa_order' => WorkOrder::select('id','price','created_at',DB::raw("'work_visa_order' as type"))->own()->findOrFail($id),
            'education_visa_order' => EducationOrder::select('id','price','created_at',DB::raw("'education_visa_order' as type"))->own()->findOrFail($id),
            'medical_visa_order' => MedicalOrder::select('id','price','created_at',DB::raw("'medical_visa_order' as type"))->own()->findOrFail($id),
            'korea_visa' => CourseBalanceHistory::select('id',DB::raw('amount as price'),'created_at',DB::raw("'korea_visa' as type"))->own()->findOrFail($id),
            'course_enrolls' => CourseEnroll::select('id','price','created_at',DB::raw("'course_enrolls' as type"))->own()->findOrFail($id),
            'service_order' => ServiceOrder::select('id','price','created_at',DB::raw("'service_order' as type"))->own()->findOrFail($id),
            'add_balance' => BalanceRequest::select('id',DB::raw('amount as price'),'created_at',DB::raw("'add_balance' as type"))->own()->findOrFail($id),
            'add_balance_for_korea_visa' => BalanceRequest::select('id',DB::raw('amount as price'),'created_at',DB::raw("'add_balance_for_korea_visa' as type"))->own()->findOrFail($id),
        };
    }
    #[Title('Print Receipt')]
    public function render()
    {
        return view('frontend.user.print-receipt');
    }
}
