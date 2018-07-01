<?php
include_once 'db.php';

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

//Error Handlers
if(empty($email) || empty($password)) {
    echo "Please fill both the fields !";
}else {
    $sql = "SELECT user_id FROM login_form WHERE email='$email' AND password='$password';";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);

    if($row > 0) {
        //login the user
/* $_SESSION['u_id'] = $row['user_id']; $_SESSION['u_email'] = $row['email']; $_SESSION['u_password'] = $row['password'];*/
//        echo "logged in";
//        include("profile.php");
        echo "<script> window.location.assign('profile.html'); </script>";
    }
    else
        echo "Failed to Login";
}


?>
