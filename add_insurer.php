<?php
	include_once("lib/members.php");
	include_once("config/connector.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Add Insurer | Pension GLA System</title>
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
	   <div class="container">
		   <div class="col-md-6 offset-md-3">
			   <div class="row space-top">						
					<div class="card fixed-card-height">
						<div class="card-body">
							<h1><strong>Add Insurer</strong></h1>
							<div class="row">
								<form action="add_dependant.php" method="post">
									<div class="row">
										<div class="col-md-12">
											<label for="insurer_name"><strong>Please Insurer Name</strong></label>
											<input type="text" name="insurer_name" id="insurer_name" class="form-control"/>
											<br>
										</div>
										<div class="col-md-12">
											<label for="postal_address"><strong>Postal Address</strong></label>
											<input type="text" name="postal_address" id="postal_address" class="form-control"/>
											<br>
										</div>
										<div class="col-md-6">
											<label for="telephone_number"><strong>Postal Address</strong></label>
											<input type="tel" name="telephone_number" id="telephone_number" class="form-control"/>
											<br>
										</div>
										<div class="col-md-6">
											<label for="email_address"><strong>Email Address</strong></label>
											<input type="email" name="email_address" id="email_address" class="form-control"/>
											<br>
										</div>
										<div class="col-md-6 offset-md-3 space-top">
											<button type="submit" name="save_btn" id="save_btn" class="btn btn-success white-text w-100">Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
			   </div>
		   </div>
		   
	   </div>
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

	<!-- set nav item active -->
	<script>
		document.getElementById("insurer_nav").classList.add('active');
	</script>
</body>
</html> 

