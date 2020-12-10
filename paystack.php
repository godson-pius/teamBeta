<?php
require_once('db/config.php');

if(isset($_GET['id']))
$id = $_GET['id'];

$query = "SELECT *FROM students WHERE id = '$id'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $name = $row['fullname'];
    $email =$row['email_address'];
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>PAY FOR COURSE</title>
</head>
<body>
  <h2>PAY WITH PAYSTACK</h2>
  <h4>Confirm your payment details</h4>
<form id="paymentForm">
<div class="form-group">
    <label for="first-name">Course</label>
    <input type="text" id="first-name" value="<?php echo $_COOKIE['coursename'];?>" readonly/>
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" value="<?php echo $_COOKIE['amount'];?>" readonly />
  </div>
  <div class="form-group">
    <label for="first-name">Fullname</label>
    <input type="text" id="first-name" value="<?php echo $name;?>" readonly />
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" value="<?php echo $email;?>" readonly />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>
<script src="https://js.paystack.co/v1/inline.js"></script> 
</body>
</html>