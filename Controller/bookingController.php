<?php
    require '../Model/bookingModel.php';
    require_once '../Database/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
    $objConfig = new config();
    $booking = new bookingModel($objConfig);
    $allRoomList = $booking->getAllRoom();
    $bookingList = $booking->getAllBooking();
    $bookingList = $bookingList->fetch_all(MYSQLI_ASSOC);
    $confirmList = $booking->getAllConfirm();
    $confirmList = $confirmList->fetch_all(MYSQLI_ASSOC);
    $user = $booking->getUser($_SESSION['userName']);
    // $employee = $_SESSION['employee'];
    if(isset($_POST['accept'])){
        $res =  $booking->acceptBooking($_POST['booking_id'],1);
        if ($res) {
            echo "1";
        } else {
            echo "Error";
        }

        // header('Location: ../View/employee.php');
        header("Refresh: 0");
    }

    if(isset($_POST['demis'])){
        $res = $booking->demisBooking($_POST['booking_id'],1);

        if ($res) {
            echo "1";
        } else {
            echo "Error";
        }

        // header('Location: ../View/employee.php');
        header("Refresh: 0");
    }

    if(isset($_POST['addConfirm'])){

        $res =  $booking->acceptBooking($_POST['booking_id'],1);
        if ($res) {
            echo "1";
        } else {
            echo "Error";
        }
        
        $booking->confirmBooking($_POST['customer_name'],$_POST['customer_idCard'],$_POST['customer_phone'],$_POST['checkin_date'],$_POST['checkout_date'],$_POST['room-id']);
        header("Refresh: 0");

    }

    if(isset($_POST['checkin'])){
        $res =  $booking->check_in($_POST['confirm_id']);
        $res = $res && $booking->updateStatus($_POST['confirm_room'],'Using');
        if($res){

            // header('Location: employee.php#confirmBooking');
            header("Refresh: 0");
        }
        else{
            echo "Error";
        }
    }

    if(isset($_POST['checkout'])){
        $res = $booking->check_out($_POST['confirm_id']);
        $res = $res && $booking->updateStatus($_POST['confirm_room'],'Ready');

        if($res){

            // header('Location: employee.php#confirmBooking');
            header("Refresh: 0");
        }
        else{
            echo "Error";
        }
    }
    // if (isset($_POST['logoutBtn'])) {
    //     session_destroy();
    //     $currentUser = null;
    //     unset($_SESSION['userName']);
    //     unset($_SESSION['role']);
    //     header('Location: ../login.php');
    //     exit();
    // }

?>