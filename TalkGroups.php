<?php
$json_data = file_get_contents("https://dvsph.net/api/TalkGroups.json");

$data = json_decode($json_data, true);

$TalkGroups = $data['TalkGroups'];

foreach($TalkGroups as $row){

    $link = $row["Link"];
    if (isset($link)) {$description = '<a href="'.$row["Link"].'" target="_blank">'. $row["Description"];} else {$description = $row["Description"];} 

   echo "<tr><th>".$row["Slot"].'</th><th><a href="http://stats.dvscotland.net/monitor.php?filter=tg&tgid='.$row["TalkGroup"].'" target="_blank">'.$row["TalkGroup"].'</th><th>'. $description."</a></th></tr>";}
?>
