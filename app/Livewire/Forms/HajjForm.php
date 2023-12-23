<?php

namespace App\Livewire\Forms;

use App\Models\Hajj;
use Livewire\Attributes\Rule;
use Livewire\Form;

class HajjForm extends Form
{
    #[Rule('required')]
    public $package_name;

    #[Rule('required')]
    public $terms_condition;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $type;

    #[Rule('required|mimes:jpg,png,jpeg')]
    public $thumbnail;

    #[Rule('required')]
    public $start_from;
    
    #[Rule('required')]
    public $b2b_price;

}
