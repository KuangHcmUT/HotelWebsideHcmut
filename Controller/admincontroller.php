<?php
    require '../Model/signupModel.php';
    require_once '../Database/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

    $res1 = mysqli_query($con, "SELECT * FROM confirmbooking");
    $res2 = mysqli_query($con, "SELECT * FROM users");

    function addaccount ($username, $fullname, $password, $phone, $role) {
        global $con;
        $result = mysqli_query($con, "INSERT INTO users(userName, fullName, password, PhoneNum, role) VALUE('$username', '$fullname', '$password', '$phone', '$role')");
    }

    function edit_account ($username, $fullname, $phone, $role, $Id) {
        global $con;
        $result = mysqli_query($con, "UPDATE users SET userName = '$username', fullName = '$fullname', PhoneNum = '$phone', role = '$role' WHERE ID = '$Id'");
    }

    function findUser ($username) {
        global $con;
        $result = mysqli_query($con, "SELECT * FROM users WHERE userName = '$username'");
        return $result;
    }

    $objConfig = new config();
    $signup = new signupModel($objConfig);
    $signup->detectPage();

    $checks = true;
    $phone = true;
    
    if (isset($_POST['btnadd'])) {
        $new_username = $_POST['new_username'];
        $new_name = $_POST['new_name'];
        $new_password = $_POST['new_password'];
        $new_phone = $_POST['new_phone'];
        $new_role = $_POST['new_role'];
        $checks = $signup->checkUser($new_username);
        $phone = $signup->checkPhone($new_phone);
        if ($checks and $phone) {
            addaccount($new_username, $new_name, $new_password, $new_phone, $new_role);
            header('Location: admin.php');
        }
        
    }

?>