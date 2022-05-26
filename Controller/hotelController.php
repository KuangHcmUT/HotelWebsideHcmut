<?php
    require 'Model/hotelModel.php';
    require 'Model/hotel.php';
    require_once 'Database/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

    class hotelController{
        function __construct()
        {
            $this->objConfig = new config();
            $this->hotel = new hotelModel($this->objConfig);
        }

        public function mvcHandler(){

        }

        public function pageRedirect($page){
            header("Location: $page");
        }
    }


?>