<?php
extract($_REQUEST);

$response = [
    ($modeSelect == 'on') ? 'A' :"M",
    ($circuit1 == 'on') ?  1 : 0,
    ($circuit2 == 'on') ?  1 : 0,
    ($circuit3 == 'on') ?  1 : 0,
    ($circuit4 == 'on') ?  1 : 0,
    ($circuit5 == 'on') ?  1 : 0,
    ($circuit6 == 'on') ?  1 : 0,
    ($circuit7 == 'on') ?  1 : 0,
    ($circuit8 == 'on') ?  1 : 0,
];
$file = fopen("dataDisplayer.txt", "w");
fwrite($file, json_encode($response));
fclose($file);
header("location: ../index.html");
?>


