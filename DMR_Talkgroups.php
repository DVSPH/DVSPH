<!-- Another DVSPH Talk Group page example -->
<!-- As used on LYRG.co.uk, This time using file_get_contents-->


<table>
<thead>

<tr>
    <th style="width:10%">Slot</th>
  	<th style="width:25%">Talk Group</th>
    <th style="width:65%">Description</th>
    
     
</tr>
</thead>
  <tbody>


<?php
$json_data = file_get_contents("https://dvsph.net/api/TalkGroups.json");

$data = json_decode($json_data, true);

$items = $data['TalkGroups'];

foreach($items as $row){

  if ($row["Interlink"] =="") {
      
     echo "<tr><td>".$row["Slot"].'</td><td>'.$row["TalkGroup"].'</td><td>'.$row["Description"]."</td></tr>";
      
      
      
    } else { 
  

   echo "<tr><td>".$row["Slot"].'</td><td>'.$row["TalkGroup"].'</td><td><a href="#" data-toggle="tooltip" title="Linked to: '.$row["Interlink"].'">'.$row["Description"]."</a></td></tr>";}
  
  
}
   
?>
 </tbody>
</table>
