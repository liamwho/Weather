<?php $today = date("Ymd"); ?>
<?php
$connection = mysqli_connect("localhost","link192_admin","*192*");
mysqli_select_db($connection,"link192_weather");
$result=mysqli_query($connection,"SELECT stations.county, weatherstationdata.maxtp, weatherstationdata.mintp, weatherstationdata.rain, weatherstationdata.wdsp, weatherstationdata.stno
FROM stations, weatherstationdata
WHERE stations.stno = weatherstationdata.stno
AND weatherstationdata.date = $today
ORDER BY county"
);
echo "<table id='mytable' class='table table-bordered table-striped'>
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
$value = $row['maxtp'];

echo "<tr class='<?php echo \"%result\" ;?>'>
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



<style type="text/css">
	.two{
	background-color:white;   
	color:yellow;
	}
	.three{
	background-color:#e1f6fb;   
	color:black;
	}
	.four{
	background-color:#bceefb;   
	color:black;
	}
	.five{
	background-color:#b9ecd8;   
	color:black;
	}
	.six{
	background-color:#cadb92;   
	color:black;
	}
	.seven{
	background-color:#ffeb88;   
	color:black;
	}
	.eight{
	background-color:#fbc25e;   
	color:black;
	}
	.nine{
	background-color:#ff9933;   
	color:black;
	}
	.ten{
	background-color:#ff7b33;   
	color:black;
	}
	.eleven{
	background-color:#cd5b12;   
	color:black;
	}
	.twelve{
	background-color:#ff3c1c;   
	color:black;
	}
</style>

<script type="text/javascript">
	$('#mytable td').each(function() {
    if (parseInt($(this).html())<=-5){
    $(this).addClass("two");
    }
    else if (parseInt($(this).html())<=0){
    $(this).addClass("three");
    }
    else if (parseInt($(this).html())<=5){
    $(this).addClass("four");
    } 
    else if (parseInt($(this).html())<=10){
    $(this).addClass("five");
    } 
    else if (parseInt($(this).html())<=15){
    $(this).addClass("six");
    } 
    else if (parseInt($(this).html())<=20){
    $(this).addClass("seven");
    } 
    else if (parseInt($(this).html())<=25){
    $(this).addClass("eight");
    } 
    else if (parseInt($(this).html())<=30){
    $(this).addClass("nine");
    } 
    else if (parseInt($(this).html())<=35){
    $(this).addClass("ten");
    } 
    else if (parseInt($(this).html())<=40){
    $(this).addClass("eleven");
    } 
    else if (parseInt($(this).html())>=40){
    $(this).addClass("twelve");
    } 
 });
</script>