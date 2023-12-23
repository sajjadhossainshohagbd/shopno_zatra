<?php

namespace App\Livewire\Backend\Accounts;

use Livewire\Component;
use App\Models\MedicalOrder;
use App\Models\ServiceOrder;
use Livewire\Attributes\Title;

class MedicalVisa extends Component
{
    #[Title('Medical Visa Accounts')]
    public function render()
    {
        return view('backend.accounts.medical-visa',[
            'today' => MedicalOrder::whereDate('created_at',now())->whereStatus('approved')->sum('price'),
            'seven_days' => MedicalOrder::whereBetween('created_at',[now()->subDays(7),now()->subDay()])->whereStatus('approved')->sum('price'),
            'thirty_days' => MedicalOrder::whereBetween('created_at',[now()->subDays(30),now()->subDay()])->whereStatus('approved')->sum('price'),
            'total' => MedicalOrder::whereStatus('approved')->sum('price'),
            'services_today' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','medical_visa');
            })->whereDate('created_at',now())->whereStatus('approved')->sum('price'),
            'services_seven_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','medical_visa');
            })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->sum('price'),
            'services_thirty_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','medical_visa');
            })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->sum('price'),
            'services_total' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','medical_visa');
            })->whereStatus('approved')->sum('price'),
            'top_ten' => MedicalOrder::with('medical')
                                    ->has('medical')
                                    ->whereStatus('approved')
                                    ->selectRaw('COUNT(*) as sell_count,medical_id')
                                    ->groupBy('medical_id')
                                    ->havingRaw('COUNT(*) > 0')
                                    ->limit(10)
                                    ->get()
        ]);
    }
}
