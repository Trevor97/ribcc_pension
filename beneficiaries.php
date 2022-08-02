<?php
	include_once("lib/members.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Beneficiaries | Pension GLA System</title>	
	<script src="lib/autocomplete_member.js"></script>
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
							<li><a class="dropdown-item" href="beneficiary.php">Add Beneficiary</a></li>
							<li><a class="dropdown-item" href="view_edit_dependants.php">Update/ View Beneficiary details</a></li>
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
									<h1 class="heading-text"><strong>Add Beneficiary</strong></h1>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="member_name"><strong>Member Name</strong></label>
									<input type="text" name="member_name" id="member_name" onkeyup="javascript:load_data(this.value)" class="form-control">
									<span id="search_result"></span>
									<br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="first_name"><strong>Firstname</strong></label>
									<input type="text" name="first_name" id="first_name" class="form-control"/>
								</div>
								<div class="col-md-6">
									<label for="last_name"><strong>Last Name</strong></label>
									<input type="text" name="last_name" id="last_name" class="form-control"/>
									<br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="date_of_birth"><strong>Date of Birth</strong></label>
									<input type="date" name="date_of_birth" id="date_of_birth" class="form-control"/>
								</div>
								<div class="col-md-6">
									<label for="relationship_to_member"><strong>Relationship to Member</strong></label>
									<select name="last_name" id="relationship_to_member" class="form-select">
										<option value="Husband">Husband</option>
										<option value="Wife">Wife</option>
										<option value="Son">Son</option>
										<option value="Daughter">Daughter</option>
										<option value="Grandfather">Grandfather</option>
										<option value="Grandmother">Grandmother</option>
										<option value="Cousin">Cousin</option>
										<option value="Uncle">Uncle</option>
										<option value="Nephew">Nephew</option>
										<option value="Niece">Niece</option>
										<option value="Aunt">Aunt</option>
										<option value="Brother-in-law">Brother-in-law</option>
										<option value="Sister-in-law">Sister-in-law</option>
									</select><br>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<label for="address"><strong>Address</strong></label>
									<textarea name="address" id="address" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label for="proportion_benefit_payable"><strong>Proportion benefit payable (%)</strong></label>
									<input type="number" min="1" max="100" name="proportion_benefit_payable" id="proportion_benefit_payable" class="form-control"/><br>
								</div>
								<div class="col-md-6 space-top">
									<span class="badge rounded-pill bg-danger text-dark space-top">Remaining % Share:</span>
								</div>
							</div>
							<div class="row">
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
		document.getElementById("module_nav").classList.add('active');
	</script>
</body>
</html> 

