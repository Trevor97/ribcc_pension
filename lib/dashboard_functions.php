<?php

    function countTotalClients($connect){
        $sql = mysqli_query($connect, "SELECT COUNT(client_id) AS number_of_clients FROM tbl_client_details");
            if(mysqli_num_rows($sql) > 0){     
                while($rows = mysqli_fetch_assoc($sql)){
                    echo $rows['number_of_clients'];
                }
            }
    }

    function countTotalMembers($connect){
        $sql = mysqli_query($connect, "SELECT COUNT(member_id) AS number_of_members FROM tbl_member_details");
            if(mysqli_num_rows($sql) > 0){     
                while($rows = mysqli_fetch_assoc($sql)){
                    echo $rows['number_of_members'];
                }
            }
    }

    function countTotalDependants($connect){
        $sql = mysqli_query($connect, "SELECT COUNT(beneficiary_id) AS number_of_beneficiaries FROM tbl_beneficiary_details");
            if(mysqli_num_rows($sql) > 0){     
                while($rows = mysqli_fetch_assoc($sql)){
                    echo $rows['number_of_beneficiaries'];
                }
            }
    }

    function countTotalInvoices($connect){
        /** */
    }
?>