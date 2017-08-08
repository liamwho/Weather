<?php
$today = date("Ymd");
$connection = mysqli_connect("localhost","link192_admin","*192*");
mysqli_select_db($connection,"link192_weather");
$result=mysqli_query($connection,"SELECT stations.county, weatherstationdata.maxtp, weatherstationdata.mintp, weatherstationdata.rain, weatherstationdata.wdsp, weatherstationdata.stno
FROM stations, weatherstationdata
WHERE stations.stno = weatherstationdata.stno
AND weatherstationdata.date = $today
ORDER BY county"
);
echo "<table class='table table-bordered table-striped'>
<thead class='thead-inverse'>
<tr>
<th>County</th>
<th>Min Temp</th>
<th>Max Temp</th>
<th>Rain Fall</th>
<th>Wind Speed</th>
</tr>
</thead>
<tbody>";
while($row=mysqli_fetch_array($result)) {
$id = $row['stno'];
echo "<tr>
<th scope='row'>" . $row['county'] . "</th>
<td>" . $row['mintp'] . "</td>
<td>" . $row['maxtp'] . "</td>
<td>" . $row['rain'] . "</td>
<td>" . $row['wdsp'] . "</td>
</tr>";
}
echo "</tbody></table>";
mysqli_close($connection);
?>