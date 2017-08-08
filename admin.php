<?php include 'header.php'; ?>
<?php $today = date("Ymd"); ?>


<section id="main">

	
	<div class="container">
	<div class="contentbg">
			<img src="images/weather.jpg" class="img-responsive" alt="Contact"><br>
			<div class="row">
			<!-- SideBar Start 
			===================== -->        
			<!--	<?php include 'sidebar.php'; ?>	-->
		          
			<!-- Main Content 
			===================== -->
			<div class="col-md-12">
				
				<!-- Latest Users
				================= -->
				<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Admin Live Data</h3>
				</div>	                
					<div class="panel-body">
					<h1>Admin Live Data</h1>

					<div class="table-responsive" >

					<?php
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
					<th>Id</th>
					<th>County</th>
					<th>Min Temp</th>
					<th>Max Temp</th>
					<th>Rain Fall</th>
					<th>Wind Speed</th>
					<th>Confirm</th>
					</tr>
					</thead>
					<tbody>";
					while($row=mysqli_fetch_array($result)) {
					print("<form action=\"adminUpdate.php\" method=\"post\">");

					print("<tr>");
					print("<th>");
					print("<input type=\"hidden\" name=\"stno\" value=\"{$row['stno']}\">");
					print($row['stno']);
					print("</th>");

					print("<td>");
					print($row['county']);
					print("</td>");

					print("<td>");
					print("<input type=\"text\" name=\"mintp\" value=\"{$row['mintp']}\">");
					print("</td>");

					print("<td>");
					print("<input type=\"text\" name=\"maxtp\" value=\"{$row['maxtp']}\">");
					print("</td>");

					print("<td>");
					print("<input type=\"text\" name=\"rain\" value=\"{$row['rain']}\">");
					print("</td>");

					print("<td>");
					print("<input type=\"text\" name=\"wind\" value=\"{$row['wdsp']}\">");
					print("</td>");

					print("<td>");
					print("<input type=\"submit\" name=\"submit\" value=\"Update\">");
					print("</td>");

					print("</tr>");

					print("</form>");
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











<?php
	include 'footer.php';
?>