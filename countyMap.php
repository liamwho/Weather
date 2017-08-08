<?php include 'header.php'; ?>
<?php $today = date("Ymd"); ?>
<!-- Map Start -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
	<script src="js/countyMap.js"></script>
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
					<h3 class="panel-title">Live Map</h3>
					</div>	                
					<div class="panel-body">
					<div id="liveMap" style="width: auto; height: 700px;"></div>

					</div>
				</div> <!-- Latest Users end -->
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
</section> <!-- Mian End -->
<?php include 'footer.php'; ?>