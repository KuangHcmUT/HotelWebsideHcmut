<?php
    require 'hotelModel.php';
    class bookingModel extends hotelModel{

        public function getAllRoom() {
            $this->open_db();
            $sql = "SELECT * FROM room";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function getAllBooking(){
            $this->open_db();
            $sql = "SELECT * FROM booking WHERE status = 'booking'";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function getAllConfirm(){
            $this->open_db();
            $sql = "SELECT * FROM confirmbooking";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function getBookingByPhone($pnumber){
            $this->open_db();
            $sql = "SELECT * FROM booking WHERE phoneNum = $pnumber";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function getConfirmByPhone($pnumber){
            $this->open_db();
            $sql = "SELECT * FROM confirmbooking WHERE customer_phone = $pnumber";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function acceptBooking($booking, $eID){
            $this->open_db();
            $sql = "UPDATE booking SET status = 'Confirm' WHERE booking_id = '$booking'";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function demisBooking($booking, $eID){
            $this->open_db();
            $sql = "UPDATE booking SET status = 'Rejected' WHERE booking_id = '$booking'";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function confirmBooking($name, $id, $phone, $checkin, $checkout, $room){
            $this->open_db();
            $sql = "INSERT INTO confirmbooking (customer_name, customer_idCard, customer_phone, checkin_date, checkout_date, room_number) VALUES ('$name', '$id', '$phone', '$checkin', '$checkout', '$room')";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function check_in($id){
            $this->open_db();
            $sql = "UPDATE confirmbooking SET status = 'Checked In' WHERE id = '$id'";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function check_out($id){
            $this->open_db();
            $sql = "UPDATE confirmbooking SET status = 'Checked Out' WHERE id = '$id'";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function updateStatus($room, $status){
            $this->open_db();
            $sql = "UPDATE room SET status = '$status' WHERE room_id = '$room'";
            $result = $this->conn->query($sql);
            $this->close_db();
            return $result;
        }

        public function getUser($userName){
            $this->open_db();
            $sql = "SELECT * FROM users WHERE userName = '$userName'";
            $result = $this->conn->query($sql);
            $this->close_db();
            if($result->num_rows > 0) {
                return $result->fetch_assoc();
            }
            return $result;
        }

    }

?>