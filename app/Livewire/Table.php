<?php

namespace App\Livewire;

use App\Models\Device;
use Livewire\Component;

class Table extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.table');
    }

    public function mount(){
        $this->data = Device::latest()->first();
    }


    public function mountData(){
        $this->data = Device::latest()->first();
    }
}
