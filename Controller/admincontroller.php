<?php
    function addaccount ($username, $fullname, $password, $phone, $role) {
        global $con;
        $result = mysqli_query($con, "INSERT INTO users(userName, fullName, password, PhoneNum, role) VALUE('$username', '$fullname', '$password', '$phone', '$role')");
    }

    function edit_account ($username, $fullname, $phone, $role, $Id) {
        global $con;
        $result = mysqli_query($con, "UPDATE users SET userName = '$username', fullName = '$fullname', PhoneNum = '$phone', role = '$role' WHERE ID = '$Id'");
    }

?>