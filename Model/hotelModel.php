<?php
    abstract class hotelModel{
        //set database 
        function __construct($configSetup)
        {
            $this->host = $configSetup->db_host;
            $this->user = $configSetup->db_user;
            $this->pass = $configSetup->db_pass;
            $this->db = $configSetup->db_name;
        }

        public function open_db(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            
        }

        public function close_db(){
            $this->conn->close();
        }
    }
?>