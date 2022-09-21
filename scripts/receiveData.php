<?php 
            //open data/rawData.txt
            $filename= "rawData.txt";
            $myfile=fopen($filename, "r" );            
              
                while (!feof($myfile)) {
                    $line = fgets ($myfile);
                    $lineA = explode("=", $line);
                    $data[$lineA[0]]=$lineA[1];;
                }
                fclose ($myfile);
                //remove anything after the string
                $data['$modeSelect'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$modeSelect']);
                
                // just removing ; from the string here
                $data['$date'] = str_replace(';', '', $data['$date']);                
                $data['$time'] = str_replace(';', '', $data['$time']);
                
                $data['$mainVoltage'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$mainVoltage']);
                $data['$loadPower'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$loadPower']);
                $data['$exportPower'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$exportPower']);
                $data['$solarPower'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$solarPower']);
                $data['$todayKwh'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$todayKwh']);
                $data['$totalKwh'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$totalKwh']);
                $data['$circuit1'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit1']);
                $data['$circuit2'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit2']);
                $data['$circuit3'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit3']);
                $data['$circuit4'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit4']);
                $data['$circuit5'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit5']);
                $data['$circuit6'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit6']);
                $data['$circuit7'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit7']);
                $data['$circuit8'] = preg_replace('/[^a-zA-Z0-9]/', '', $data['$circuit8']);
                
             

               
           
             
                $modeSelect=$data['$modeSelect'];
                $time=$data['$time'];
                $date=$data['$date'];
                $mainVoltage=$data['$mainVoltage'];
                $loadPower=$data['$loadPower'];
                $exportPower=$data['$exportPower'];
                $solarPower=$data['$solarPower'];
                $todayKwh=$data['$todayKwh'];
                $totalKwh=$data['$totalKwh'];
                $circuit1=$data['$circuit1'];
                $circuit2=$data['$circuit2'];
                $circuit3=$data['$circuit3'];
                $circuit4=$data['$circuit4'];
                $circuit5=$data['$circuit5'];
                $circuit6=$data['$circuit6'];
                $circuit7=$data['$circuit7'];
                $circuit8=$data['$circuit8'];


                

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
            
            echo json_encode($response);

            ?>