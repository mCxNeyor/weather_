<?php

namespace App\Livewire;

use App\Models\Device;
use Livewire\Component;

class WindDirection extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.wind-direction');
    }

    public function mount(){
        $this->data = Device::all();
    }


    public function mountData(){
        $this->data = Device::all();
    }

}
