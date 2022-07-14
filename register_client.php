<?php
	include_once("lib/autorun_functions.php");
	include_once("config/connector.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Register Client | Pension GLA System</title>
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
					<div class="card">
						<div class="card-body">
							<form id="register-client-form" action="" autocomplete="off">
								<div class="row">
									<div class="col-md-12">
										<h1 class="app-page-title"><strong>Register Client</strong></h1>
									</div>
									<div class="col-md-12">
											<label for="organization_name">Client Name</label>
											<input type="text" name="organization_name" id="organization_name" class="form-control"/>
									</div>
									<div class="col-md-6">
											<label for="reg_number">Registration Number</label>
											<input type="text" name="reg_number" id="reg_number" class="form-control"/>
									</div>
									<div class="col-md-6">
											<label for="legal_entity_type">Type of Legal Entity</label>
											<select name="legal_entity_type" id="legal_entity_type" class="form-select">
												<option disabled selected>- Select Type of Legal Entity -</option>
												<?php
													retrieveLegalEntities($connect);
												?>
											</select>
									</div>
									<div class="col-md-12">
										<label for="physical_address">Physical Address</label>
										<input type="text" name="physical_address" id="physical_address" class="form-control">
									</div>
									<div class="col-md-12">
										<label for="postal_address">Postal Address</label>
										<input type="text" name="postal_address" id="postal_address" class="form-control">
									</div>
									<div class="col-md-6">
										<label for="telephone_number">Telephone Number</label>
										<input type="tel" name="telephone_number" id="telephone_number" class="form-control">
									</div>
									<div class="col-md-6">
										<label for="email_address">Email Address</label>
										<input type="email" name="email_address" id="email_address" class="form-control">
									</div>
									<div class="col-md-12">
										<label for="website_address">Web Address</label>
										<input type="url" name="website_address" value="https://" id="website_address" class="form-control">
									</div>
									<div class="col-md-12">
										<label for="business_type">Type of Business</label>
										<input type="text" name="business_type" id="business_type" class="form-control">
									</div>
									<div class="col-md-4 offset-md-4 space-top">
										<button type="submit" id="save_btn" name="save_btn" onClick="validateForm()" class="btn btn-success white-text w-100">Save</button>
									</div>
								</div>
							</form>
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
	
	<!-- Validate.js for forms -->
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script src="assets/js/validate-client-form.js"></script> 

	<!-- set nav item active -->
	<script>
		document.getElementById("client_nav").classList.add('active');
	</script>
</body>
</html> 
