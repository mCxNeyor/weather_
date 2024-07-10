<div>
    <table class="table table-striped table-sm"  wire:poll.100ms="mountData">
        <thead>
   <tr>
    <th>Parameters</th>
   </tr>
   <tr>
    <th>Temperature</th>
    <td> {{ $data->temp }} <sup>0</sup>C</td>
    </tr>
    <tr>
    <th>Rain</th>
    <td>@if($data->r ==true)not raining @else raining @endif</td>
    </tr>

    <tr>
    <th>wind speed</th>
    <td>{{ $data->rpm }}</td>
    </tr>

    <tr>
    <th>wind direction</th>
    <td>{{ $data->d }}</td>
    </tr>

    <tr>
     <th>Atmospheric <br> pressure</th>
     <td>{{ $data->p }} hPa</td>
    </tr>
    <tr>
    <th>Altitude</th>
    <td>{{ $data->a }} meter</td>
   </tr>
   <tr>
    <th><br>Updated at:</th>
    <td><br>
        {{ \Carbon\Carbon::parse($data->created_at)->isoFormat('h:mm:ss A') }}
        <br>
        {{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, MMMM Do YYYY') }}

    </td>
   </tr>
    </table>
</div>
