<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $success = "nsuccess";
    $time = time() + 86400;
    setcookie('id',$id,$time);
    setcookie('success',$success,$time);
    $_SESSION['id'] = $id;
    if($id == 1){
     $coursename = "Web Design";
     $amount = "$266.67";
     setcookie('coursename',$coursename,$time);
     setcookie('amount',$amount,$time);
    }elseif($id == 2){
        $coursename = "Ui/Ux";
        $amount = "$183.49";
        setcookie('coursename',$coursename,$time);
        setcookie('amount',$amount,$time);
    }elseif($id == 3){
        $coursename = "Ccna";
        $amount = "$200.78";
        setcookie('coursename',$coursename,$time);
        setcookie('amount',$amount,$time);
    }
    
    header("Location:login.php?id=$id");
}
?>