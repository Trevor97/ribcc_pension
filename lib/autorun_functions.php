<?php
    /** retrieve legal entities from db and populate the dropdown in the CLient registration form */
    function retrieveLegalEntities($connect){
        $sql = "SELECT * FROM tbl_legal_entity_types";
        $stmt = mysqli_query($connect, $sql);
            while($resultSet = mysqli_fetch_assoc($stmt)){
                $entity_type = $resultSet['entity_type'];
                echo "<option value='".$entity_type."'>".$entity_type."</option>";
            }

    }

?>