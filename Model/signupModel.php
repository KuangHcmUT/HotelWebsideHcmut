<?php
    require 'hotelModel.php';
    class signupModel extends hotelModel{

        public function detectPage() {
            return basename($_SERVER['PHP_SELF'], '.php');
        }

        public function checkUser($username){
            $this->open_db();
            $sql = "SELECT * FROM users WHERE userName = '$username'";
            $result = $this->conn->query($sql);
            $this->close_db();
            if($result->num_rows > 0){
                return false;
            }
            return true;
        }

        public function checkPhone($phone){
            $this->open_db();
            $sql = "SELECT * FROM users WHERE phoneNum = '$phone'";
            $result = $this->conn->query($sql);
            $this->close_db();
            if($result->num_rows > 0){
                return false;
            }
            return true;
        }

        public function createUser($userName, $password, $fullName, $phoneNum){
            $this->open_db();
            $sql = "INSERT INTO users (userName, password, fullName, phoneNum) VALUES ('$userName', '$password', '$fullName', '$phoneNum')";
            $result = $this->conn->query($sql);
            $this->close_db();
            // echo "<script type='text/javascript'>alert('$result');</script>";

            return $result;
        }
    }


?>