<?php
        /*  
            if user clicks save button, form is submitted. 
            variabled are declared and checkClient function is called. 
            registerClient funtion is called afterwards. 
        */

        if(isset($_POST['reg_number'])){
            $organization_name = $_POST['organization_name'];
            $reg_number = $_POST['reg_number'];
            $entity_type = $_POST['legal_entity_type'];
            $physical_address = $_POST['physical_address'];
            $postal_address = $_POST['postal_address'];
            $telephone_number = $_POST['telephone_number'];
            $email_address = $_POST['email_address'];
            $website_address = $_POST['website_address'];
            $business_type = $_POST['business_type'];
            //$principal_officer_id = $_POST['principal_officer_id'];

            checkClient($connect, $organization_name, $reg_number, $entity_type, $physical_address, $postal_address, $telephone_number, $email_address, $website_address, $business_type);
        }

        function registerClient($connect, $organization_name, $reg_number, $entity_type, $physical_address,  $postal_address, $telephone_number, $email_address, $website_address, $business_type){
            
            $sql = mysqli_query($connect, "INSERT INTO `tbl_client_details` (`organization_name`, `reg_num`, `legal_entity_type`, `physical_address`, `postal_address`, `telephone_number`, `email_address`, `website_address`, `type_of_business`) VALUES ('$organization_name', '$reg_number', '$entity_type', '$physical_address', '$postal_address', '$telephone_number', '$email_address', '$website_address', '$business_type')");

            if(!$sql){
                echo "failed to register client".mysqli_error($connect);
            }else{
                echo "client registered successfully";
            }
            
        }

        function checkClient($connect, $organization_name, $reg_number, $entity_type, $physical_address, $postal_address, $telephone_number, $email_address, $website_address, $business_type){
            $sql = mysqli_query($connect, "SELECT reg_num, email_address FROM tbl_client_details WHERE reg_num = '$reg_number'");   
                if(mysqli_num_rows($sql) > 0){
                    echo "Failed! ".$reg_number." already in use";
                }else{
                    registerClient($connect, $organization_name, $reg_number, $entity_type, $physical_address, $postal_address, $telephone_number, $email_address, $website_address, $business_type);
                }
        }

        

        
?>