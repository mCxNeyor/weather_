<div>
    <div>
        <table id="dtBasicExample" class="table table-striped table-advance table-hover table-sm" >            <thead>
            <thead style="background-color: #d9e7e0">
            <tr>
                    <th>#</th>
                    <th>Temperature</th>
                    <th>wind speed</th>
                    <th>Wind direction</th>
                    <th>Atmospheric pressure</th>
                    <th>Altitude</th>
                    <th>Rain status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $Data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $Data->temp }}</td>
                    <td>{{ $Data->rpm }}</td>
                    <td>{{ $Data->d }}</td>
                    <td>{{ $Data->p }}</td>
                    <td>{{ $Data->a }}</td>
                    <td>@if($Data->r ==true)not raining @else raining @endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
