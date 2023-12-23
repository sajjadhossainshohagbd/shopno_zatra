<?php

namespace App\Livewire\Backend\Accounts;

use App\Models\User;
use Livewire\Component;
use App\Models\BalanceRequest;
use App\Models\BalanceWithdraw;
use Livewire\Attributes\Title;

class Buyer extends Component
{
    #[Title('Buyer Accounts')]
    public function render()
    {
        return view('backend.accounts.buyer',[
            'today_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->whereDate('created_at',now())->sum('amount'),
            'seven_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->sum('amount'),
            'thirty_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->sum('amount'),
            'total_deposit' => BalanceRequest::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->sum('amount'),

            'today_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->whereDate('created_at',now())->sum('amount'),
            'seven_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(7),now()->subDay()])->sum('amount'),
            'thirty_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->whereBetween('created_at',[now()->subDays(30),now()->subDay()])->sum('amount'),
            'total_withdraw' => BalanceWithdraw::whereHas('user',function($query){
                            $query->where('role','buyer');
                        })->whereStatus('approved')->sum('amount'),
            'total_buyer' => User::whereRole('buyer')->whereHas('buyer',function($query){
                $query->where('status','approved');
            })->count()
        ]);
    }
}
