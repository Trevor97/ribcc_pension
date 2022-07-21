<?php
	include_once("lib/members.php");
	include_once("config/connector.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Add User | Pension GLA System</title>
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
		   <div class="col-md-8 offset-md-2">
			   <div class="row space-top">						
					<div class="card fixed-card-height">
						<div class="card-body">
							<div class="row">
                                <form action="add_user.php" method="POST"> 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="FirstName">First Name</label>
                                            <input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="Enter First Name" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="LastName">Last Name</label>
                                            <input type="text" name="LastName" id="LastName" class="form-control"placeholder="Enter Last Name" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Password">Password</label>
                                            <input type="Password" name="Password" id="Password" class="form-control"placeholder="Enter Password" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="ConfirmPassword">Confirm Password</label>
                                            <input type="Password" name="ConfirmPassword" id="ConfirmPassword" class="form-control"placeholder="Confirm Password" required/>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="Branch">Branch</label>
                                            <select name="Branch" id="Branch" class="form-control" required>
                                                <option disabled selected> ---select branch---</option>
                                                <option value="BT">Blantyre</option>
                                                <option value="CH">Chilembwe</option>
                                                <option value="LLW">Lilongwe</option>  
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="EmailAddress">Email Address</label>
                                            <input type="email" name="EmailAddress" id="EmailAddress" class="form-control"placeholder="Enter Email Address" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Role">Role</label>
                                            <select name="Role" id="Role" class="form-control" required>
                                                <option disabled selected> ---select role---</option>
                                                <option value="Broking Officer">Broking Officer</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="DateOfEmployment">Date Of Employment</label>
                                            <input type="date" name="DateOfEmployment" id="DateOfEmployment" class="form-control" required/>
                                        </div>
                                        <div class="col-md-4 offset-md-4 space-top"><br/>
                                            <button type="Submit" name="BtnSubmit" id="BtnSubmit" class="btn app-btn-primary w-100 theme-btn mx-auto">Save</button>
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
		document.getElementById("dependant_nav").classList.add('active');
	</script>
</body>
</html> 
<?php
    if(isset($_POST['BtnSubmit'])){
        require_once "config/connector.php";

        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $password = $_POST['Password'];
        $confirmpassword = $_POST['ConfirmPassword'];
        $branch = $_POST['Branch'];
        $email = $_POST['EmailAddress'];
        $role = $_POST['Role'];
        $date_of_employment = $_POST['DateOfEmployment'];

        $Query01 = mysqli_query ($connect, "SELECT email FROM tbl_user_details WHERE email = '$email'");
            $num_rows = mysqli_num_rows($Query01);

            if($num_rows >0){
                echo "  <script>
                            Swal.fire(
                                'Error',
                                'This email is already in use!',
                                'error'
                            );
                        </script>";
            }else{
                //Proceed to add user 
                $Query02 = mysqli_query($connect, "INSERT INTO tbl_user_details (firstname, lastname, email, designation, password, role) 
                                        VALUES ('$firstname', '$lastname', '$email', '$role', '$confirmpassword', '$role')");
                    if(!$Query02){
                        echo "failed! ".mysqli_error($connect);
                    }else{
                        echo "  <script>
                                    Swal.fire(
                                        'Success',
                                        'User added successfuly!',
                                        'success'
                                    );
                                </script>";
                    }
            }
        
    }

?>