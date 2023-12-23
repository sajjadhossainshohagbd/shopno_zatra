<?php

namespace App\Livewire\Backend\Accounts;

use Livewire\Component;
use App\Models\HolidayOrder;
use App\Models\ServiceOrder;
use Livewire\Attributes\Title;

class HolidayPack extends Component
{
    #[Title('Holiday Pack Accounts')]
    public function render()
    {
        return view('backend.accounts.holiday-pack',[
            'today' => HolidayOrder::whereDate('created_at',now())->whereStatus('approved')->sum('price'),
            'seven_days' => HolidayOrder::whereBetween('created_at',[now()->subDays(7),now()->subDay()])->whereStatus('approved')->sum('price'),
            'thirty_days' => HolidayOrder::whereBetween('created_at',[now()->subDays(30),now()->subDay()])->whereStatus('approved')->sum('price'),
            'total' => HolidayOrder::sum('price'),
            'services_today' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','holiday_package');
            })->whereDate('created_at',now())->whereStatus('approved')->sum('price'),
            'services_seven_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','holiday_package');
            })->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->whereStatus('approved')->sum('price'),
            'services_thirty_days' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','holiday_package');
            })->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->whereStatus('approved')->sum('price'),
            'services_total' => ServiceOrder::whereHas('service',function($query){
                $query->where('type','holiday_package');
            })->whereStatus('approved')->sum('price'),
            'top_ten' => HolidayOrder::with('holiday')
                                    ->has('holiday')
                                    ->whereStatus('approved')
                                    ->selectRaw('COUNT(*) as sell_count,holiday_id')
                                    ->groupBy('holiday_id')
                                    ->havingRaw('COUNT(*) > 0')
                                    ->limit(10)
                                    ->get()
        ]);
    }
}
