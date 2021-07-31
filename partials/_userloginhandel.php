<?php
$showerror2="false";
$erroro2='false';
if($_SERVER["REQUEST_METHOD"]=='POST'){
    include '_dbconnect.php';
    $email2 = $_POST['loginemail'];
    $password_2 = $_POST['loginPassword'];
    $sql = "SELECT * FROM `users`  WHERE email = '$email2'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
    if($numrows==1){
            $row = mysqli_fetch_assoc($result);
            if( $row['password']){
            session_start();
            $_SESSION['loggedin2'] = true;
            $_SESSION['user_username'] = $email2;
            header("Location:/Tech-Bug-404/index.php?loginsuccess=true");
            }
            else{
                $erroro2 = 'wrong password';
                header("Location:/Tech-Bug-404/index1.php?loginsuccess=false&error=$erroro2");
            }            
    }
    else{
        $erroro2 = 'account does not exist';
        header("Location:/Tech-Bug-404/index1.php?loginsuccess=false&error=$erroro2");
    }
}

