<?php
    session_unset();
    require_once 'Controller/hotelController.php';
    $hotel = new hotelController();
    $hotel -> mvcHandler();
?>