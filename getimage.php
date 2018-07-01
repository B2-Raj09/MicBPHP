<?php
include_once 'db.php';
//include_once 'login.php';

$image = $_FILES["post-image"]["name"];
print_r($image);
$photo = addslashes(file_get_contents($image));
//$image = getimagesize($_FILES['post-image']['tmp_name']); //to get the image type
$details = $_POST['post-text'];
/*$result = mysqli_fetch_assoc($res); $uid = $result['user_id'];*/

$q = "INSERT INTO post VALUES('','','$photo','$details','');";
$r = mysqli_query($conn, $q);

if($r) {
    echo "Post Uploaded";
}else 
    echo mysql_error();
?>
