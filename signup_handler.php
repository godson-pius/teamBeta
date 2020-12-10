<?php
require_once('db/config.php');

extract($_POST);
$pic =  uniqid().$_FILES['profile']['name'];
$id =$_COOKIE['id'];
$success = "success";
$time = time() + 86400;

$destination = './images/uploads/';
$tempdstn = $_FILES['profile']['tmp_name'];
$upload = move_uploaded_file($tempdstn,$destination.$pic);

if($upload){
$query = "INSERT INTO students(fullname,email_address,PASSWORD,profile_picture) values('$fullname','$email','$password','$pic')";
$result = mysqli_query($conn,$query);
if($result){
    setcookie('success',$success,$time);
    header("Location:login.php?id=$id");
}
}
?>