<?php
    require 'hotelModel.php';
    class loginModel extends hotelModel{
        public function detectPage() {
            return basename($_SERVER['PHP_SELF'], '.php');
        }

        public function login($userName, $password){
            $this->open_db();
            $sql = "SELECT * FROM users WHERE userName = '$userName' AND password = '$password'";
            $result = $this->conn->query($sql);
            $this->close_db();
            if($result->num_rows > 0) {
                return $result->fetch_assoc();
            }
            return false;
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