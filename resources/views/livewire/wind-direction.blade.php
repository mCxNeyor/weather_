<div>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            visualized wind patterns
        </p>
    </figure>

    <div style="display:none">
        <table id="freq" border="0" cellspacing="0" cellpadding="0">
            <tr nowrap bgcolor="#CCCCFF">
                <th colspan="9" class="hdr">Table of Frequencies (percent)</th>
            </tr>
            <tr nowrap bgcolor="#CCCCFF">
                <th class="freq">Direction</th>
                <th class="freq">&lt; 0.5 m/s</th>
                <th class="freq">0.5-2 m/s</th>
                <th class="freq">2-4 m/s</th>
                <th class="freq">4-6 m/s</th>
                <th class="freq">6-8 m/s</th>
                <th class="freq">8-10 m/s</th>
                <th class="freq">&gt; 10 m/s</th>
                <th class="freq">Total</th>
            </tr>
            <tr nowrap>
                <td class="dir" >N</td>
                @foreach ($data as $v)
                @if($v->d=="N")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
           </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">NNE</td>
                @foreach ($data as $v)
                @if($v->d=="NNE")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="dir">NE</td>
                @foreach ($data as $v)
                @if($v->d=="NE")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">ENE</td>
                @foreach ($data as $v)
                @if($v->d=="ENE")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="dir">E</td>
                @foreach ($data as $v)
                @if($v->d=="E")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">ESE</td>
                @foreach ($data as $v)
                @if($v->d=="ESE")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="dir">SE</td>
                @foreach ($data as $v)
                @if($v->d=="SE")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">SSE</td>
                @foreach ($data as $v)
                @if($v->d=="SSE")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="dir">S</td>
                @foreach ($data as $v)
                @if($v->d=="S")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">SSW</td>
                @foreach ($data as $v)
                @if($v->d=="SSW")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="dir">SW</td>
                @foreach ($data as $v)
                @if($v->d=="SW")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">WSW</td>
                @foreach ($data as $v)
                @if($v->d=="WSW")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="dir">W</td>
                @foreach ($data as $v)
                @if($v->d=="W")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">WNW</td>
                @foreach ($data as $v)
                @if($v->d=="WNW")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="dir">NW</td>
                @foreach ($data as $v)
                @if($v->d=="NW")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap bgcolor="#DDDDDD">
                <td class="dir">NNW</td>
                @foreach ($data as $v)
                @if($v->d=="NNW")
                     <td class="data">{{ $v->rpm }}</td>
                     @endif
                @endforeach
            </tr>
            <tr nowrap>
                <td class="totals">Total</td>
                <td class="totals">25.53</td>
                <td class="totals">44.54</td>
                <td class="totals">15.07</td>
                <td class="totals">8.52</td>
                <td class="totals">4.31</td>
                <td class="totals">1.81</td>
                <td class="totals">0.23</td>
                <td class="totals">&nbsp;</td>
            </tr>
        </table>
    </div>

</div>
