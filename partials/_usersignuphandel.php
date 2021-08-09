<?php
$showerror2="false";
$showalert2=false;
if($_SERVER["REQUEST_METHOD"]=='POST'){
    include '_dbconnect.php';
    $username2 = $_POST["signupusername"];
    $phone2 = $_POST["signupphone"];
    $email2 = $_POST["signupemail"];
    $password1_2 = $_POST["password1"];
    $password2_2 = $_POST["password2"];
    // check whether user exists
    $existSql = "SELECT * FROM `users`  WHERE email = '$email2'";
    $result = mysqli_query($conn, $existSql);
    $numrows = mysqli_num_rows($result);
    if($numrows>0){
        $showerror2 = "username already taken.";
    }
    else{
        if($password1_2==$password2_2)
        {
            
            $sql = "INSERT INTO `users` (`username`, `password`, `email`, `contact`)
             VALUES ('$username2', '$password1_2', '$email2', '$phone2');";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showalert2 = true;
                header("Location:/Tech-Bug-404/index1.php?signupsuccess=true");
                exit();
            }
            
        }
        else{
            $showerror2= "password do not match";          
        }
    }
    header("Location:/Tech-Bug-404/index1.php?signupsuccess=false&error=$showerror2");

}