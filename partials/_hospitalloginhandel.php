<?php
$showerror="false";
$erroro='false';
if($_SERVER["REQUEST_METHOD"]=='POST'){
    include '_dbconnect.php';
    $email = $_POST['loginemail'];
    $password = $_POST['loginPassword'];
    $sql = "SELECT * FROM `hospital`  WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
    if($numrows==1){
            $row = mysqli_fetch_assoc($result);
            if($row['password']){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['hos_useremail'] = $email;
            header("Location:/medi/index.php?loginsuccess=true");
            }
            else{
                $erroro = 'wrong password';
                header("Location:/medi/index1.php?loginsuccess=false&error=$erroro");
            }            
    }
    else{
        $erroro = 'account does not exist';
        header("Location:/medi/index1.php?loginsuccess=false&error=$erroro");
    }
}

