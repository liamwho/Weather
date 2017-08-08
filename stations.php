<?php include 'header.php'; ?>
<?php $today = date("Ymd"); ?>
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
				<h3 class="panel-title">Stations</h3>
				</div>	                
					<div class="panel-body">
						<h1>Stations</h1>
						<div class="table-responsive" >
							<?php
							$connection = mysqli_connect("localhost","link192_admin","*192*");
							mysqli_select_db($connection,"link192_weather");
							$result=mysqli_query($connection,"SELECT stations.county, stations.lat, stations.lng, stations.name, weatherstationdata.stno
							FROM stations, weatherstationdata
							WHERE stations.stno = weatherstationdata.stno
							AND weatherstationdata.date = $today
							ORDER BY county"
							);
							echo "<table class='table table-bordered table-striped'>
							<thead class='thead-inverse'>
							<tr>
							<th>County</th>
							<th>Name</th>
							<th>Location</th>
							</tr>
							</thead>
							<tbody>";
							while($row=mysqli_fetch_array($result)) {
							$mapID = $row['stno'];
							$latID = $row['lat'];
							$lngID = $row['lng'];
							$countyID = $row['county'];
							$nameID = $row['name'];
							echo "<tr>
							<th scope='row'>" . $row['county'] . "</th>
							<td>" . $row['name'] . "</td>
							<td align='center'> <a class='btn btn-warning' href='stationMap.php?mapID=$mapID&latID=$latID&lngID=$lngID&countyID=$countyID&nameID=$nameID'>View On Map</a></td>
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