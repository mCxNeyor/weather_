<?php

namespace App\Livewire;

use App\Models\Device;
use Livewire\Component;

use Illuminate\Support\Facades\Http;

class GaugeCharts extends Component
{
    public $temp;
    public $data;



    public function render()
    {
        return view('livewire.gauge-charts')->layout('layouts.app');
    }

    public function mount(){
        $this->data = Device::latest()->first();
    }
}

