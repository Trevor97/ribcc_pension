<?php

    function retrieveRegisteredClients($connect){
        $sql = "SELECT client_id, organization_name FROM tbl_client_details ORDER BY organization_name ASC";
        $stmt = mysqli_query($connect, $sql);
            while($resultSet = mysqli_fetch_assoc($stmt)){
                $client_id = $resultSet['client_id'];
                $organization_name = $resultSet['organization_name'];
                echo "<option value='".$client_id."'>".$organization_name."</option>";
            }

    }

    function retrieveRegisteredMembers($connect){
        $sql = "SELECT member_id, employer_id, firstname, lastname, phone_number, email_address, occupation FROM tbl_member_details ORDER BY firstname ASC;";
        $stmt = mysqli_query($connect, $sql);
            while($resultSet = mysqli_fetch_assoc($stmt)){
                $member_id = $resultSet['member_id'];
                $member_name = $resultSet['firstname']." ".$resultSet['lastname'];
                echo "<option value='".$member_id."'>".$member_name."</option>";
            }

    }
?>