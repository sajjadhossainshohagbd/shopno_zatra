<?php

namespace App\Livewire\Backend\Accounts;

use App\Models\ServiceOrder;
use App\Models\WorkOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class WorkVisa extends Component
{
    #[Title('Work Visa Accounts')]
    public function render()
    {
        return view('backend.accounts.work-visa',[
            'today' => WorkOrder::whereDate('created_at',now())->whereStatus('approved')->sum('price'),
            'seven_days' => WorkOrder::whereBetween('created_at',[now()->subDays(7),now()->subDay()])->whereStatus('approved')->sum('price'),
            'thirty_days' => WorkOrder::whereBetween('created_at',[now()->subDays(30),now()->subDay()])->whereStatus('approved')->sum('price'),
            'total' => WorkOrder::whereStatus('approved')->sum('price'),
            'services_today' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','work_visa');
            })->whereStatus('approved')->whereDate('created_at',now())->sum('price'),
            'services_seven_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','work_visa');
            })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->sum('price'),
            'services_thirty_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','work_visa');
            })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->sum('price'),
            'services_total' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','work_visa');
            })->whereStatus('approved')->sum('price'),
            'top_ten' => WorkOrder::with('work')
                                    ->has('work')
                                    ->whereStatus('approved')
                                    ->selectRaw('COUNT(*) as sell_count,work_id')
                                    ->groupBy('work_id')
                                    ->havingRaw('COUNT(*) > 0')
                                    ->limit(10)
                                    ->get()
        ]);
    }
}
