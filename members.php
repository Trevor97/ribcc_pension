<?php
	include_once("lib/members.php");
	include_once("config/connector.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Members | Pension GLA System</title>
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
			<div class="row">
				<div class="col-sm-3 offset-sm-7 space-top">
					<div>
						<button class="btn app-btn-primary w-100 theme-btn mx-auto" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Quick Actions 
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
									<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
								</svg>
							</span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
							<li><a class="dropdown-item" href="members.php">Add Member</a></li>
							<li><a class="dropdown-item" href="view_edit_members.php">Update/ View Member details</a></li>
						</ul>
					</div>
				</div>
			</div><!--//quick-action-row--> 
		   <div class="col-md-8 offset-md-2">
			   <div class="row space-top">						
					<div class="card fixed-card-height">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h1 class="heading-text"><strong>Add Member</strong></h1>
								</div>
								<div class="col-md-12">
									<label for="organization_name">Name of Employer</label>
									<select name="organization_name" id="organization_name" class="form-select">
										<option disabled selected>- Select Employer -</option>
										<?php
											retrieveRegisteredClients($connect);
										?>
									</select><br>
								</div>
								<div class="col-md-3">
										<label for="firstname"><strong>First Name</strong></label>
										<input type="text" name="firstname" id="firstname" class="form-control"/>
								</div>
								<div class="col-md-3">
									<label for="last_name"><strong>Last Name</strong></label>
									<input type="text" name="last_name" id="last_name" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="maiden_name"><strong>Maiden Name</strong></label>
									<input type="text" name="maiden_name" id="maiden_name" class="form-control">
									<br>
								</div>
								<div class="col-md-6">
									<label for="date_of_birth"><strong>Date of Birth</strong></label>
									<input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
								</div>
								<div class="col-md-3">
									<label for="gender"><strong>Gender</strong></label>
									<select name="gender" id="gender" class="form-select">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="col-md-3">
									<label for="marital_status"><strong>Marital Status</strong></label>
									<select name="marital_status" id="marital_status" class="form-select">
										<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Divorced">Divorced</option>
										<option value="Widowed">Widowed</option>
									</select>
									<br>
								</div>
								<div class="col-md-12">
									<label for="permanent_home_address"><strong>Permanent Home Address</strong></label>
									<input type="text" name="permanent_home_address" id="permanent_home_address" class="form-control">
									<br>
								</div>
								<div class="col-md-4">
									<label for="nationality"><strong>Nationality</strong></label>
									<input type="text" name="nationality" id="nationality" class="form-control">
								</div>
								<div class="col-md-4">
									<label for="id_type"><strong>ID Type</strong></label>
									<select name="id_type" id="id_type" class="form-select">
										<option value="National ID">National ID</option>
										<option value="Passport">Passport</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="col-md-4">
									<label for="id_number"><strong>ID Number</strong></label>
									<input type="text" name="id_number" id="id_number" class="form-control">
									<br>
								</div>
								<div class="col-md-12">
									<label for="occupation"><strong>Occupation</strong></label>
									<input type="text" name="occupation" id="occupation" class="form-control">
									<br>
								</div>
								<div class="col-md-6">
									<label for="salary_per_annum"><strong>Salary Per Annum</strong></label>
									<input type="number" name="salary_per_annum" id="salary_per_annum" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="date_of_entry"><strong>Date of Entry into Scheme</strong></label>
									<input type="date" name="date_of_entry" id="date_of_entry" class="form-control">
									<br>
								</div>
								<div class="col-md-3">
									<label for="phone_number"><strong>Phone Number</strong></label>
									<input type="tel" name="phone_number" id="phone_number" class="form-control">
								</div>
								<div class="col-md-4">
									<label for="email_address"><strong>Email Address</strong></label>
									<input type="email" name="email_address" id="email_address" class="form-control">
								</div>
								<div class="col-md-5">
									<label for="postal_address"><strong>Postal Address</strong></label>
									<input type="text" name="postal_address" id="postal_address" class="form-control">
									<br>
								</div>
								
								<div class="col-md-4 offset-md-4 space-top">
									<button type="submit" class="btn btn-success white-text w-100">Save</button>
								</div>
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

