<?php

namespace App\Livewire\Backend\Accounts;

use Livewire\Component;
use App\Models\ServiceOrder;
use App\Models\EducationOrder;
use Livewire\Attributes\Title;

class EducationVisa extends Component
{
    #[Title('Education Visa Accounts')]
    public function render()
    {
        return view('backend.accounts.education-visa',[
            'today' => EducationOrder::whereDate('created_at',now())->whereStatus('approved')->sum('price'),
            'seven_days' => EducationOrder::whereBetween('created_at',[now()->subDays(7),now()->subDay()])->whereStatus('approved')->sum('price'),
            'thirty_days' => EducationOrder::whereBetween('created_at',[now()->subDays(30),now()->subDay()])->whereStatus('approved')->sum('price'),
            'total' => EducationOrder::whereStatus('approved')->sum('price'),
            'services_today' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','education_visa');
            })->whereDate('created_at',now())->whereStatus('approved')->sum('price'),
            'services_seven_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','education_visa');
            })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->sum('price'),
            'services_thirty_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','education_visa');
            })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->sum('price'),
            'services_total' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','education_visa');
            })->whereStatus('approved')->sum('price'),
            'top_ten' => EducationOrder::with('education')
                                    ->has('education')
                                    ->whereStatus('approved')
                                    ->selectRaw('COUNT(*) as sell_count,education_id')
                                    ->groupBy('education_id')
                                    ->havingRaw('COUNT(*) > 0')
                                    ->limit(10)
                                    ->get()
        ]);
    }
}
