<?php

namespace App\Livewire\Backend\Accounts;

use App\Models\HajjOrder;
use Livewire\Component;
use Livewire\Attributes\Title;

class HajjVisa extends Component
{
    #[Title('Hajj Visa Accounts')]
    public function render()
    {
        return view('backend.accounts.hajj-visa',[
            'hajj_today' => HajjOrder::whereHas('hajj',function($query){
                                    $query->where('type','hajj');
                                })->whereDate('created_at',now())
                                ->whereStatus('approved')->sum('price'),
            'hajj_seven_days' => HajjOrder::whereHas('hajj',function($query){
                                $query->where('type','hajj');
                            })->whereBetween('created_at',[now()->subDays(7),now()->subDay()])
                            ->whereStatus('approved')->sum('price'),
            'hajj_thirty_days' => HajjOrder::whereHas('hajj',function($query){
                                $query->where('type','hajj');
                            })->whereBetween('created_at',[now()->subDays(30),now()->subDay()])
                            ->whereStatus('approved')->sum('price'),
            'hajj_total' => HajjOrder::whereHas('hajj',function($query){
                            $query->where('type','hajj');
                        })->whereStatus('approved')->sum('price'),
            'top_ten' => HajjOrder::with('hajj')
                                    ->has('hajj')
                                    ->whereStatus('approved')
                                    ->selectRaw('COUNT(*) as sell_count,hajj_id')
                                    ->groupBy('hajj_id')
                                    ->havingRaw('COUNT(*) > 0')
                                    ->limit(10)
                                    ->get(),

            'umrah_today' => HajjOrder::whereHas('hajj',function($query){
                                        $query->where('type','umrah');
                                    })->whereDate('created_at',now())
                                    ->whereStatus('approved')->sum('price'),
            'umrah_seven_days' => HajjOrder::whereHas('hajj',function($query){
                                $query->where('type','umrah');
                            })->whereBetween('created_at',[now()->subDays(7),now()->subDay()])
                            ->whereStatus('approved')->sum('price'),
            'umrah_thirty_days' => HajjOrder::whereHas('hajj',function($query){
                                $query->where('type','umrah');
                            })->whereBetween('created_at',[now()->subDays(30),now()->subDay()])
                            ->whereStatus('approved')->sum('price'),
            'umrah_total' => HajjOrder::whereHas('hajj',function($query){
                            $query->where('type','umrah');
                        })->whereStatus('approved')->sum('price'),

        ]);
    }
}
