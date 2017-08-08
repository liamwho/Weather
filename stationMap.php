<?php include 'header.php'; ?>
<?php $today = date("Ymd"); ?>
<!-- Map Start -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
	<script src="js/stationMap.js"></script>
	<script src="js/ire_counties.js"></script>
    
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
					<h3 class="panel-title">Station Map</h3>
					</div>	                
					<div class="panel-body">
					<div id="mapid" style="width: auto; height: 700px;"></div>

					<div id="latID"><?php if(!isset($_GET['latID'])) print('53.4239'); else print($_GET['latID']); ?></div>
					<div id="lngID"><?php if(!isset($_GET['lngID'])) print('-7.9407'); else print($_GET['lngID']); ?></div>
					<div id="nameID"><?php if(!isset($_GET['nameID'])) print('Center Point'); else print($_GET['nameID']); ?></div>
					<div id="countyID"><?php if(!isset($_GET['countyID'])) print('Athlone'); else print($_GET['countyID']); ?></div>

					</div>
				</div> <!-- Latest Users end -->
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
</section> <!-- Mian End -->
<?php include 'footer.php'; ?>