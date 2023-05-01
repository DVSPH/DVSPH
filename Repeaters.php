<!--Quick and simple table to display the Official Repeater feed from DVSPH DMR Network
Feel free to customise but remember to please give credit to DVSHP.net for usage
You will need to add html, header and body tags-->

<table>
  <thead>

    <tr>
       <th style="width:15%">REPEATER</th>
       <th style="width:33%">CITY</th>
       <th style="width:15%">FREQUENCY</th>
       <th style="width:10%">OFFSET</th>
       <th style="width:7%">CC</th>
       <th style="width:15%">KEEPER</th>
         
    </tr>
  </thead>
  <tbody>

<?php
$json_data = file_get_contents("https://dvsph.net/api/Repeaters.json");

$data = json_decode($json_data, true);

$items = $data['Repeaters'];

foreach($items as $row){
  
  	//Set Variables - some are taken from RadioID.net 
  	$callsign = $row["callsign"];
  	$city = $row["city"];
	$freq_output = $row["frequency"];
  	$freq_offset = $row["offset"];
  	$cc = $row["color_code"]; 
  	$keeper = $row["trustee"];
   	 //to calc for input frequency
	$freq_input = $freq_output + $freq_offset;
  
  
  
  echo '<tr><td>'.$callsign.'</td><td>'.$city.'</td><td>'.$freq_output.'</td><td>'.$freq_offset.'</td><td>'.$cc.'</td><td>'.$keeper.'</td></tr>';}
?>
  </tbody>
</table>
<br>
<!--PLEASE DO NOT REMOVE THIS LINK - SEE LICENSE-->
<a href="https://dvsph.net/repeaters">Available from DVSPH.net</a>
