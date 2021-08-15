<?php

$showerror1="false";
$showalert1=false;
if($_SERVER["REQUEST_METHOD"]=='POST'){
    include '_dbconnect.php';
    $username1 = $_POST["signupusername"];
    $phone1 = $_POST["signupphone"];
    $email = $_POST["signupemail"];
    $address = $_POST["signupaddress"];
    $password1_1 = $_POST["password1"];
    $password2_1 = $_POST["password2"];
    // $license = $_POST[""];
   

    // check whether user exists
    $existSql = "SELECT * FROM `pharmacy`  WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numrows = mysqli_num_rows($result);
    if($numrows>0){
        $showerror1 = "username already taken.";
    }
    else{
        if($password1_1==$password2_1)
        {
            $hash = password_hash($password1_1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `pharmacy` (`Name`, `address`, `contact`, `password`, `email`)
             VALUES ('$username1', '$address', '$phone1', '$password1_1', '$email')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showalert1 = true;
                $sql_=" CREATE TABLE $username1(
                    sno INT NOT NULL AUTO_INCREMENT,
                    med VARCHAR(100) NOT NULL,
                    cost VARCHAR(100) NOT NULL,
                    quantity VARCHAR(100) NOT NULL,
                    
                    PRIMARY KEY ( sno )
                )";
                if ($conn->query($sql_) === TRUE) {
                    echo "Table MyGuests created successfully";
                  } else {
                    echo "Error creating table: " . $conn->error;
                  }
                header("Location:/Tech-Bug-404/index1.php?signupsuccess=true");
                exit();
            }
            
        }
        else{
            $showerror1= "password do not match";          
        }
    }
    header("Location:/Tech-Bug-404/index1.php?signupsuccess=false&error=$showerror1");

}