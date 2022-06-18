<?php
    require 'hotelModel.php';
    class confirmModel extends hotelModel{

        public function getAll(){
            $this->open_db();
            $sql = "SELECT * FROM confirmbooking";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function getBookingByPhone($pnumber){
            $this->open_db();
            $sql = "SELECT * FROM confirmbooking WHERE customer_phone = $pnumber";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function confirmBooking($booking){
            $this->open_db();
            $sql = "INSERT INTO confirmbooking (customer_name, customer_idCard, customer_phone, checkin_date, checkout_date, room_number) VALUES ()";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function acceptBooking($booking, $eID){
            $this->open_db();
            $sql = "UPDATE booking SET status = 'Confirm', employee = '$eID' WHERE bookingID = $booking->bookingID";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        // public function demisBooking($booking, $eID){
        //     $this->open_db();
        //     $sql = "UPDATE booking SET status = 'Demised', employee = '$eID' WHERE bookingID = '$booking->bookingID'";
        //     $result = $this->conn->query($sql);
        //     $this->close_db();
        //     return $result;
        // }


        // public function insertBooking($booking){//booking is an obj
        //     $sql = "INSERT INTO booking (booking_id, room_id, customer_id, check_in, check_out, total_price) VALUES ('".$booking->booking_id."', '".$booking->room_id."', '".$booking->customer_id."', '".$booking->check_in."', '".$booking->check_out."', '".$booking->total_price."')";
        //     if ($this->hotelDB->query($sql) === TRUE) {
        //         echo "New record created successfully";
        //     } else {
        //         echo "Error: " . $sql . "<br>" . $this->hotelDB->error;
        //     }
        //     // code = copilot must be changed
        // }
    }

?>