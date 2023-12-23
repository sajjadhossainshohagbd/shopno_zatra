<?php

namespace App\Livewire\Backend\Marketing;

use App\Models\Marketing;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $type;
    public $rowType;

    public function mount($type)
    {
        $this->rowType = $type;
        $this->type = match($type){
            'seo' => 'Search Engine Optimization',
            'google_ads' => 'Google Ads',
            'fb_ads' => 'Facebook Ads',
            'youtube_ads' => 'YouTube Ads',
            'making' => 'Video & Graphics Making',
            default => abort(404)
        };
    }

    public function delete($id)
    {
       $marketing = Marketing::find($id);
       $marketing->delete();

       $this->dispatch('alert',[
        'type' => 'success',
        'message' => 'Entry has been deleted!'
    ]);
    }

    #[Title('Marketing')]
    public function render()
    {
        return view('backend.marketing.index',[
            'marketing' => Marketing::where('type',$this->rowType)->latest()->paginate()
        ]);
    }
}
