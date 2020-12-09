<?php
extract($_POST);

$profile = $_FILES(['profile']);
$query = "INSERT INTO students(fullname,email_address,PASSWORD,profile_picture) values('$fullname','$email','$password','$profile')"
?>