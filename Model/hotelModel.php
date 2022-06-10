<?php
    class hotelModel{
        //set database 
        function __construct($configSetup)
        {
            $this->host = $configSetup->db_host;
            $this->user = $configSetup->db_user;
            $this->pass = $configSetup->db_pass;
            $this->db = $configSetup->db_name;
        }

        public function open_db(){
            $this->hotelDB = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($this->hotelDB->connect_error) {
                die("Connection failed: " . $this->hotelDB->connect_error);
            }
        }

        public function close_db(){
            $this->hotelDB->close();
        }

        


    }
?>