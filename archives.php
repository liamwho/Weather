<?php include 'header.php'; ?>


<?php 
	$date = isset($_GET['date']) ? $_GET['date'] : date("Y". "-m" . "-j");
	$previous = date("Y". "-m" . "-j", strtotime($date . '-1 day'));
	$next = date("Y". "-m" . "-j", strtotime($date . '+1 day'));
	$updateDate = date("j M Y", strtotime($date));
 ?>

<section id="main">
	<div class="container">
	<div class="contentbg">
			<img src="images/weather.jpg" class="img-responsive" alt="Contact"><br>
			<div class="row">
			<!-- SideBar Start ===================== -->        
			<?php include 'sidebar.php'; ?>
			<!-- Main Content ===================== -->
			<div class="col-md-9">
				<!-- Latest Users ================= -->
				<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Archives</h3>
				</div>	                
					<div class="panel-body">
					
					<div class="table-responsive" >
					<?php
					$date = isset($_GET['date']) ? $_GET['date'] : date("Y". "-m" . "-d");
					$previous = date("Y". "-m" . "-d", strtotime($date . '-1 day'));
					$next = date("Y". "-m" . "-d", strtotime($date . '+1 day'));
					$dateNow = date("d M Y", strtotime($date));
					print("<h2 style='text-align: center;'><a href = 'archives.php?date={$previous}' class='btn btn-primary' style='width: 150px'>Previous</a>  " . $dateNow . "  <a href = 'archives.php?date={$next}' class='btn btn-primary' style='width: 150px'>Next</a></h2>");
					$connection = mysqli_connect("localhost","link192_admin","*192*");
					mysqli_select_db($connection,"link192_weather");
					$result=mysqli_query($connection,"SELECT stations.county, weatherstationdata.maxtp, weatherstationdata.mintp, weatherstationdata.rain, weatherstationdata.wdsp, weatherstationdata.stno
					FROM stations, weatherstationdata
					WHERE stations.stno = weatherstationdata.stno
					AND weatherstationdata.date = '$date'
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
					</div>				
					</div>
				</div> <!-- Latest Users end -->
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
</section> <!-- Mian End -->

<?php include 'footer.php'; ?>