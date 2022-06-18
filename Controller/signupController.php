<?php
    require '../Model/signupModel.php';
    require_once '../Database/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
    // session_start();
    $objConfig = new config();
    $signup = new signupModel($objConfig);
    $signup->detectPage();
    
    $checks = true;
    $confirmPass = true;
    $phone = true;
    
    if(isset($_POST['signUpBtn'])){

        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $fullName = $_POST['fullName'];
        $phoneNum = $_POST['phoneNum'];
        $checks = $signup->checkUser($userName);
        if(($password != $confirmpassword) and $checks == true){
            $confirmPass = false;
        }
        $phone = $signup->checkPhone($phoneNum);
        if($checks && $confirmPass && $phone){
            $res =  $signup->createUser($userName, $password, $fullName, $phoneNum);
            if($res){
                $message = "Successfully created account";
                echo "<script type='text/javascript'>alert('$message')</script>";
                sleep(5);
                header('Location: ./login.php');
                exit();
            }
            // header("Refresh:1");
        }
    }
?>