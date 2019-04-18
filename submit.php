<?php require('mysqli_connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$q = "INSERT INTO customers VALUES ('','$firstname','$lastname','$address','$phone','$email','$password');";
$r = @mysqli_query($dbc,$q);
$error = true;

/* Checks if password is ,ore than 6 characters */  
if (strlen($password) < 6){
    $error = false;
    echo "Password should be more than 6 characters";
}
 
if($error == true){
    echo "SUCCESSS";
}
}
?>