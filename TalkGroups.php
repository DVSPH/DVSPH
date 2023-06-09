<?php

//Quick and simple table to display the Official Talk Group feed from DVSPH DMR Network
//Feel free to customise but remember to please give credit to DVSHP.net for usage

//Use CURL to get JSON file from DVSPH API Server
      $ch = curl_init("https://dvsph.net/api/TalkGroups.json");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $json_data = curl_exec($ch);
	  if(curl_exec($ch) === false)
			{
//Error message if the JSON file can not be imported - Customise this with your own message if you wish				
				echo 'DV Scotland Phoenix Talk Groups live feed not available at this time';
			}
      curl_close($ch);
      
$data = json_decode($json_data, true);

$TalkGroups = $data['TalkGroups'];

echo '<table>';

foreach($TalkGroups as $row){

    $link = $row["Link"];
    if (isset($link)) {$description = '<a href="'.$row["Link"].'" target="_blank">'. $row["Description"];} else {$description = $row["Description"];} 

   echo "<tr><th>".$row["Slot"].'</th><th>'.$row["TalkGroup"].'</th><th>'. $description."</th></tr>";}
   echo '</table></br><a href="https://dvsph.net/talk-groups">Credit: DVSPH.net</a>';  
?>
