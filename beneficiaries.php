<?php
	include_once("lib/dashboard_functions.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Beneficiaries | Pension GLA System</title>
	<?php
		/** head includes; css, meta etc */
		include_once("lib/head_includes.php")
	?>
</head> 

<body class="app">   	
    
    <?php
		/** side bar, search bar & notifications */
		include_once("lib/nav_content.php")
	?>

    <div class="app-wrapper">
		<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->	  
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

	<!-- Various page scripts -->
	<script>
		/** set nav item active */
		document.getElementById("overview_nav").classList.add('active');

		/** auto update stat-cards */
		// var auto_refresh = setInterval(
		// 	function (){
		// 		$('#client_count').load('').fadeIn("slow");
		// 	}, 1000);

	</script>
</body>
</html> 

