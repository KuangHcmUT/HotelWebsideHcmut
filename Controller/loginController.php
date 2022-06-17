

<?php
require './Model/loginModel.php';
require_once './Database/config.php';

// session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
session_start();
$objConfig = new config();
$login = new loginModel($objConfig);
$login->detectPage();
$check = true;
$currentUser = null;


if(isset($_POST['loginBtn'])){
    header('Location: Views/admin.php');
    echo 'aaaaa';
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $user = $login->login($userName, $password);
    if($user){
        $_SESSION['userName'] = $user['userName'];

    }
    else{
        $check = false;
    }
    if (isset($_SESSION['userName'])) {
        $currentUser = $login->getUser($_SESSION['userName']);
        if ($currentUser['role'] == 'admin') {
            header('Location: Views/admin.php');
            exit();
        }
        else if ($currentUser['role'] == 'employee') {
            header('Location: Views/employee.php');
            exit();
        }
        else if ($currentUser['role'] == 'customer') {
            header('Location: Views/customer.php');
            exit();
        }
    }
}

// if (isset($_GET['logout'])) {
//     session_destroy();
//     $currentUser = null;
//     unset($_SESSION['userName']);
//     unset($_SESSION['role']);
//     header('Location: ../index.php');
//     exit();
// }


?>