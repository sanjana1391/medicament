<?php
$showerror="false";
$showalert=false;
if($_SERVER["REQUEST_METHOD"]=='POST'){
    include '_dbconnect.php';
    $hospitalname = $_POST["signuphospital"];
    $type = $_POST["signuptype"];
    $spec = $_POST["signupspec"];
    $address = $_POST["signupaddress"];
    $phone = $_POST["signupphone"];
    $email = $_POST["signupemail"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    // check whether user exists
    $existSql = "SELECT * FROM `hospital`  WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numrows = mysqli_num_rows($result);
    if($numrows>0){
        $showerror = "username already taken.";
    }
    else{
        if($password1==$password2)
        {
            
            $sql = "INSERT INTO `hospital` (`username`,  `spec`, `adress`, `password`, `type`, `contact`, `email`)
             VALUES ('$hospitalname', '$spec', '$address', '$password1', '$type', '$phone', '$email');";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showalert = true;
               
                header("Location:/medi/index1.php?signupsuccess=true");
                exit();
            }
            
        }
        else{
            $showerror= "password do not match";          
        }
    }
    header("Location:/medi/index1.php?signupsuccess=false&error=$showerror");

}
