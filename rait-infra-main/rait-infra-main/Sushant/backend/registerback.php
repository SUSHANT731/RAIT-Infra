<?php

// print_r($_POST);

include 'conn.php';

$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];
$srnno= $_POST['srnno'];

// sql query to insert user data
$signup_query= "INSERT INTO `register`(`name`, `email`, `password`, `srn_no`) VALUES ('$username','$email','$password','$srnno')";
// echo $signup_query;

$signup_result= mysqli_query($conn,$signup_query);
if($signup_result){
    echo "<script>alert('Data inserted ... please login')</script>";
    echo  "<script>window.location = '../index.php'</script>";
}
else{
    echo 'operation failed';
}
?>