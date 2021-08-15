<?php
$showerror1="false";
$erroro1='false';
if($_SERVER["REQUEST_METHOD"]=='POST'){
    include '_dbconnect.php';
    $email1 = $_POST['loginusername1'];
    $password_1 = $_POST['loginPassword1'];
    $sql1 = "SELECT * FROM `pharmacy`  WHERE  `Name` = '$email1'";
    $result1 = mysqli_query($conn, $sql1);
    $numrows1 = mysqli_num_rows($result1);
    if($numrows1==1){
            $row1 = mysqli_fetch_assoc($result1);
            if($password_1){
            session_start();
            $_SESSION['loggedin1'] = true;
            $_SESSION['p_username'] = $email1;
            header("Location:/Tech-Bug-404/index4.php?loginsuccess=true");
            }
            else{
                $erroro1 = 'wrong password';
                header("Location:Tech-Bug-404/index1.php?loginsuccess=false&error=$erroro1");
            }            
    }
    else{
        $erroro1 = 'account does not exist';
        header("Location:Tech-Bug-404/index1.php?loginsuccess=false&error=$erroro1");
    }
}

