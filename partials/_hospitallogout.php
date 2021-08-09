<?php

session_start();

echo 'logging you out....';
session_destroy(); 
header("Location:/medi/index1.php");

?>