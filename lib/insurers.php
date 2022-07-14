<?php
require("../config/connector.php");
        function retrieveExistingInsurers($connect){
            
            $sql = "SELECT * FROM tbl_insurer_details";
            $stmt = mysqli_query($connect, $sql);
                if(mysqli_num_rows($stmt) > 0){
                    
                    while($result = mysqli_fetch_assoc($stmt)){
                        $resultSet[] = $result;
                    }
                    echo json_encode($resultSet);
                }else{
                    echo "no results";
                }
                
        }
?>