<?php
include("../data/db_con.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO user (username,password)  VALUES ('$username','$password')"; 
    
$result = $conn->query($sql);

    if($result){
        header("location:index.php/../../..");       
        }
    else{
        echo "<script>alert('naay kulang choi!!');window.location.replace('register/register.php');</script>";
    }
?>