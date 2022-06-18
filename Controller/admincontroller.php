<?php
    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
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

?>