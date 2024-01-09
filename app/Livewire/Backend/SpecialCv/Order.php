<?php

namespace App\Livewire\Backend\SpecialCv;

use App\Models\CvRequest;
use Livewire\Component;
use Livewire\Attributes\Title;

class Order extends Component
{
    public function delete($id)
    {
        $order = CvRequest::findOrFail($id);
        @unlink(public_path($order->picture));
        $order->delete();

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Order has been deleted!'
        ]);
    }

    #[Title('Special CV Orders')]
    public function render()
    {
        return view('backend.special-cv.order',[
            'orders' => CvRequest::latest()->paginate()
        ]);
    }
}
