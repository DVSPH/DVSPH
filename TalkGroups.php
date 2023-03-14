<?php

//Quick and simple table to display the Official Talk Group feed from DVSPH DMR Network
//Feel free to customise but remember to please give credit to DVSHP.net for usage

$json_data = file_get_contents("https://dvsph.net/api/TalkGroups.json");

$data = json_decode($json_data, true);

$TalkGroups = $data['TalkGroups'];

echo '<table>';

foreach($TalkGroups as $row){

    $link = $row["Link"];
    if (isset($link)) {$description = '<a href="'.$row["Link"].'" target="_blank">'. $row["Description"];} else {$description = $row["Description"];} 

   echo "<tr><th>".$row["Slot"].'</th><th><a href="https://stats.dvsph.net/monitor.php?filter=tg&tgid='.$row["TalkGroup"].'" target="_blank">'.$row["TalkGroup"].'</th><th>'. $description."</a></th></tr>";}
   echo '</table></br><a href="https://dvsph.net/talk-groups">Credit: DVSPH.net</a>';  
?>
