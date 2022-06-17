<?php 
    // include_once '../Model/adminmodel.php';
    include_once 'Model/adminmodel.php';
    // include_once '../Controller/admincontroller.php';
    include_once 'Controller/admincontroller.php';
    // $res1 = mysqli_query($con, "SELECT * FROM confirmbooking");
    // $res2 = mysqli_query($con, "SELECT * FROM users");
    
    // if (isset($_POST['btnadd'])) {
    //     $username = $_POST['new_username'];
    //     $fullname = $_POST['new_name'];
    //     $pass = $_POST['new_password'];
    //     $phone = $_POST['new_phone'];
    //     $role = $_POST['new_role'];
    //     addaccount($username, $fullname, $pass, $phone, $role);
    //     header("Refresh:0");
    // }
    $fullname = $_POST['Fname'];
    $Checkin = $_POST['Checkin'];
    $Checkout = $_POST['Checkout'];
    $phone = $_POST['Phone'];
    $ID = $_POST['ID'];

    // $sql = "INSERT INTO `confirmbooking` (`customer_name`, `customer_idCard`, `customer_phone`, `checkin_date`, `checkout_date`) 
    // VALUES ('$fullname', '$ID', '$phone', '$Checkin', '$Checkout');";

    // mysqli_query($sql);
    function addbooking ($fullname, $ID, $phone, $Checkin, $Checkout) {
        global $con;
        $result = mysqli_query($con, "INSERT INTO confirmbooking(customer_name, customer_idCard, customer_phone, checkin_date, checkout_date) VALUE('$fullname', '$ID', '$phone', '$Checkin', '$Checkout')");
    }

    addbooking($fullname, $ID, $phone, $Checkin, $Checkout);
        header('Location: booking.php');

    // header("Location: booking.php?booking=success")

    
?>