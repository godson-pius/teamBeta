<?php
require_once('db/config.php');
extract($_POST);

$query ="SELECT *FROM students WHERE email_address = '$email' && PASSWORD = '$password'";
$result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['fullname'];
            $id = $row['id'];
            $picture = $row['profile_picture'];
            $time = time() + 86400;

            setcookie('name',$name,$time);
            setcookie('picture',$picture,$time);
            header("Location:paystack.php?id=$id");
    }
}
?>
