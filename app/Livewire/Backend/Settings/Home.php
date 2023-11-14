<?php

namespace App\Livewire\Backend\Settings;

use App\Models\VideoSection;
use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    public $name;
    public $url;

    public function add()
    {
        $this->validate([
            'name' => 'required',
            'url' => 'required'
        ]);

        $section = new VideoSection();
        $section->name = $this->name;
        $section->url = $this->url;
        $section->save();

        $this->reset('name','url');

        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Menu added successfully!'
        ]);
    }

    public function delete($id)
    {
        VideoSection::destroy($id);
        
        $this->dispatch('alert',[
            'type' => 'success',
            'message' => 'Menu deleted successfully!'
        ]);
    }

    public function render()
    {
        return view('backend.settings.home',[
            'sections' => VideoSection::latest()->get()
        ]);
    }
}
