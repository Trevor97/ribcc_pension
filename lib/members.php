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
    /*
    class Member{
        //Mysqli Connect variable decaration
        private $connect;

        //Client details Table
        private $db_table = "tbl_client_details";

        //Client Table Columns
        private $organization_name;
        private $reg_num;
        private $legal_entity_type;
        private $physical_address;
        private $postal_address;
        private $telephone_number;
        private $email_address;
        private $website_address;
        private $type_of_business;
        private $principal_officer_id;
        
        //database connection
        public function __construct($db)
        {
            $this->connect = $db;
        }

        public function sanitize($data){
            $data = htmlspecialchars(strip_tags($this->data));
            return $data;
        }

        public function verifyExistingAccount(){
            $sql = "SELECT email_address FROM".$this->db_table."WHERE email_address = ?'";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam("s", $this->email_address);
            $stmt->execute;

            $numRows = $stmt->num_rows;
                if($numRows <1){
                    return true;
                }
                return false;
        } 

        public function registerMember(){
            $accountExists = false;

            $sql = "SELECT email_address FROM".$this->db_table."WHERE email_address = ?'";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam("s", $this->email_address);
            $stmt->execute;

            $numRows = $stmt->num_rows;
                if($numRows >0){
                    $accountExists = true;
                }   
            
            $sql = "INSERT INTO
                    ".$this->db_table."
                    SET
                        organization_name = :organization_name,
                        reg_num = :reg_num,
                        legal_entity_type = :legal_entity_type,
                        physical_address = :physical_address,
                        postal_address = :postal_address,
                        telephone_number = :telephone_number,
                        email_address = :email_address,
                        website_address = :website_address,
                        type_of_business = :type_of_business,
                        principal_officer_id = :principal_officer_id";

            $stmt = $this->connect->prepare($sql);

            //Sanitize data before submission
            $this->organization_name = $this->sanitize($this->organization_name);
            $this->reg_num = $this->sanitize($this->reg_num);
            $this->legal_entity_type = $this->sanitize($this->legal_entity_type);
            $this->physical_address = $this->sanitize($this->physical_address);
            $this->postal_address = $this->sanitize($this->postal_address);
            $this->telephone_number = $this->sanitize($this->telephone_number);
            $this->email_address = $this->sanitize($this->email_address);
            $this->website_address = $this->sanitize($this->website_address);
            $this->type_of_business = $this->sanitize($this->type_of_business);
            $this->principal_officer_id = $this->sanitize($this->principal_officer_id);

            //Bind data
            $stmt->bindParam(":organization_name", $this->organization_name);
            $stmt->bindParam(":reg_num", $this->reg_num);
            $stmt->bindParam(":legal_entity_type", $this->legal_entity_type);
            $stmt->bindParam(":physical_address", $this->physical_address);
            $stmt->bindParam(":postal_address", $this->postal_address);
            $stmt->bindParam(":telephone_number", $this->telephone_number);
            $stmt->bindParam(":email_address", $this->email_address);
            $stmt->bindParam(":website_address", $this->website_address);
            $stmt->bindParam(":type_of_business", $this->type_of_business);
            $stmt->bindParam(":principal_officer_id", $this->principal_officer_id);

            if($stmt->execute()){
                return true;
            }
            return false;
        }

        
    }
    */
?>