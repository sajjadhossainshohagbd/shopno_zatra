<?php

namespace App\Livewire\Backend\Service;

use App\Models\BalanceCostHistory;
use App\Models\ServiceOrder;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public $type;

    public function mount($type)
    {
        match($type){
            'hajj_visa' => 1,
            'work_visa' => 1,
            'education_visa' => 1,
            'medical_visa' => 1,
            'holiday_package' => 1,
            default => abort(404)
        };

        $this->type = $type;
    }

    public function delete($id)
    {
        $order = ServiceOrder::findOrFail($id);
        @unlink(public_path($order->nid));
        @unlink(public_path($order->passport));
        @unlink(public_path($order->payment_receipt));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Services Orders')]
    public function render()
    {
        return view('backend.service.orders',[
            'orders' => ServiceOrder::with('service','user')->whereHas('service',function($query){
                $query->where('type',$this->type);
            })->latest()->paginate()
        ]);
    }
}
