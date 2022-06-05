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

        public function insertBooking($booking){//booking is an obj
            $sql = "INSERT INTO booking (booking_id, room_id, customer_id, check_in, check_out, total_price) VALUES ('".$booking->booking_id."', '".$booking->room_id."', '".$booking->customer_id."', '".$booking->check_in."', '".$booking->check_out."', '".$booking->total_price."')";
            if ($this->hotelDB->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $this->hotelDB->error;
            }
            // code = copilot must be changed
        }


    }
?>