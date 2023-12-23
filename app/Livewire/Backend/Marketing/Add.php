<?php

namespace App\Livewire\Backend\Marketing;

use App\Models\Marketing;
use Livewire\Component;
use Livewire\Attributes\Title;

class Add extends Component
{
    public $date;
    public $amount;
    public $progress_description;
    public $type;
    public $rowType;

    public function mount($type)
    {
        $this->type = match($type){
            'seo' => 'Search Engine Optimization',
            'google_ads' => 'Google Ads',
            'fb_ads' => 'Facebook Ads',
            'youtube_ads' => 'YouTube Ads',
            'making' => 'Video & Graphics Making',
            default => abort(404)
        };

        $this->rowType = $type;
    }

    public function save()
    {
        $this->validate([
            'date' => 'required',
            'amount' => 'required',
            'progress_description' => 'nullable'
        ]);

        $marketing = new Marketing();
        $marketing->user_id = auth()->id();
        $marketing->type = $this->rowType;
        $marketing->created_at = $this->date;
        $marketing->progress_description = $this->progress_description;
        $marketing->amount = $this->amount;
        $marketing->save();

        return redirect(route('marketing.index',$this->rowType))->with('success','Cost added successfully!');
    }

    #[Title('Add')]
    public function render()
    {
        return view('backend.marketing.add');
    }
}
