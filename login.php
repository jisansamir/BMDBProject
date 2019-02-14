<?php
session_start();
include('connect.php');


$uname = $_POST['uname'];
$pass = $_POST['password'];
$password = md5($pass);


$sql = "SELECT * FROM user where UserName='$uname' and Password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "name: " . $row["Name"];
        //print_r($row);
		$_SESSION["uid"]=$row["id"];
		
header("Location: submit_form.php");
                //echo $_SESSION["uid"];
    }
} else {
    echo "Wrong username or password";
}

?>