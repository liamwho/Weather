<?php include 'header.php'; ?>
<?php $today = date("Ymd"); ?>

<script type="text/javascript" src="js/jquery"></script>
<script type="text/javascript" src="js/liveNODE.js"></script>
<script type="text/javascript" src="js/liveNodeRefresh.js"></script>

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
				<h3 class="panel-title">Live Data (NODE)</h3>
				</div>	                
					<div class="panel-body">
					<h1><?php echo date("d M Y"); ?></h1>
					<div class="table-responsive" >
					
					<div id="myDiv"><?php include 'liveNODE_GET.php' ; ?></div>

					</div>		
					</div>
				</div> <!-- Latest Users end -->
			</div> <!-- Right Side end -->
		</div> <!-- Row End -->
	</div> <!-- Content BG End -->
	</div> <!-- Container End -->
</section> <!-- Mian End -->
<?php include 'footer.php'; ?>