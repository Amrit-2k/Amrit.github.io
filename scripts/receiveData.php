


<?php
    $modeSelect = 'on';
    $time = 0;
    $date= 0;
    $mainVoltage = 21324;
    $loadPower = 123;
    $exportPower = -123;
    $solarPower = 4300;
    $todayKwh = 123.4;
    $totalKwh = 7816;
    $circuit1 = 'on';
    $circuit2 = 'off';
    $circuit3 = 'on';
    $circuit4 = 'on';
    $circuit5 = 'on';
    $circuit6 = 'on';
    $circuit7 = 'on';
    $circuit8 = 'off';

    // construct a response object

    $response = [
        'mode' => ($modeSelect == 'on') ? true : false,
        'time' => $time,
        'date' => $date,
        'mainVoltage' => $mainVoltage,
        'loadPower' => $loadPower,
        'exportPower' => $exportPower,
        'solarPower' => $solarPower,
        'todayKwh' => $todayKwh,
        'totalKwh' => $totalKwh,
        'circuit1' => ($circuit1 == 'on') ? true : false,
        'circuit2' => ($circuit2 == 'on') ? true : false,
        'circuit3' => ($circuit3 == 'on') ? true : false,
        'circuit4' => ($circuit4 == 'on') ? true : false,
        'circuit5' => ($circuit5 == 'on') ? true : false,
        'circuit6' => ($circuit6 == 'on') ? true : false,
        'circuit7' => ($circuit7 == 'on') ? true : false,
        'circuit8' => ($circuit8 == 'on') ? true : false
    ];

    // send the response without echoing it
    echo json_encode($response);
    
?>