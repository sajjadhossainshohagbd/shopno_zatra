<?php

namespace App\Livewire\Backend\Accounts;

use Livewire\Component;
use App\Models\BalanceRequest;
use Livewire\Attributes\Title;
use App\Models\BalanceWithdraw;

class Agent extends Component
{
    #[Title('Agent Accounts')]
    public function render()
    {
        return view('backend.accounts.agent',[
            'today_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->whereDate('created_at',now())->sum('amount'),
            'seven_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->sum('amount'),
            'thirty_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->sum('amount'),
            'total_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->sum('amount'),

            'today_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->whereDate('created_at',now())->sum('amount'),
            'seven_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->sum('amount'),
            'thirty_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->sum('amount'),
            'total_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','agent');
                        })->whereStatus('approved')->sum('amount')
        ]);
    }
}
