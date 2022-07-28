<?php
    if(isset($_POST['query'])){
        require ("../config/connector.php");

        $data = array();

        $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

        $query = mysqli_query($connect,"SELECT firstname, lastname, employer_id 
                                        FROM tbl_member_details
                                        WHERE firstname LIKE '%".$condition."%'
                                        OR lastname LIKE '%".$condition."%'
                                        ORDER BY firstname ASC
                                        LIMIT 10");
        
        $replace_string = '<b>'.$condition.'</b>';

        foreach($query as $row){
            $data[] = array(
                'member_name' => str_ireplace($condition, $replace_string, $row["firstname"]." ".$row["lastname"]." - ".$row['employer_id']) 
            );
        }
        
        echo json_encode($data);
    }
?>