<?php 
include('connect.php');

$name = $_POST['name'];
$uname = $_POST['uname'];
$pass = $_POST['password'];
$password = md5($pass);




$sql = "INSERT INTO user (Name, UserName, Password,TypeID,StatusID)
VALUES ('$name', '$uname', '$password','1','1')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>