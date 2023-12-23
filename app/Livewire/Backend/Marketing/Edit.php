<?php

namespace App\Livewire\Backend\Marketing;

use App\Models\Marketing;
use Livewire\Component;
use Livewire\Attributes\Title;

class Edit extends Component
{
    public $date;
    public $progress_description;
    public $amount;
    public $type;
    public $marketing;

    public function mount($id)
    {
        $this->marketing = Marketing::findOrFail($id);
        $this->date = $this->marketing->created_at->format('Y-m-d');
        $this->amount = $this->marketing->amount;
        $this->progress_description = $this->marketing->progress_description;
        $this->type = match($this->marketing->type){
            'seo' => 'Search Engine Optimization',
            'google_ads' => 'Google Ads',
            'fb_ads' => 'Facebook Ads',
            'youtube_ads' => 'YouTube Ads',
            'making' => 'Video & Graphics Making',
            default => ''
        };
    }

    public function save()
    {
        $this->validate([
            'date' => 'required',
            'amount' => 'required'
        ]);

        $marketing = $this->marketing;
        $marketing->created_at = $this->date;
        $marketing->progress_description = $this->progress_description;
        $marketing->amount = $this->amount;
        $marketing->save();

        return redirect(route('marketing.index',$marketing->type))->with('success','Cost updated successfully!');
    }

    #[Title('Edit')]
    public function render()
    {
        return view('backend.marketing.edit');
    }
}
