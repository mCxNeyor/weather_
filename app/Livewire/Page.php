<?php

namespace App\Livewire;

use App\Models\Device;
use Livewire\Component;

class Page extends Component
{ public $data;
    public function render()
    {
        return view('livewire.page');
    }


    public function mount(){
        $this->data = Device::all();
    }

}
