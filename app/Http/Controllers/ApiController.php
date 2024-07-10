<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Threshold;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData()
    {
        $latestDeviceData = Device::latest()->first();

        // Assuming $latestDeviceData has the necessary structure, modify as needed
        $temperature = $latestDeviceData->temp;
        $rpm = $latestDeviceData->rpm;

        return response()->json(['temperature' => $temperature, 'rpm' => $rpm]);
    }

    public function store(Request $request){

            Device::create($request->all());
            return response()->json([
                "ok"
            ]);
        }
}



