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
  <link rel="stylesheet" href="pay.css">
</head>
<body>
<form id="paymentForm">
  <div class="profile"></div>
  <h2>PAY WITH PAYSTACK</h2>
  <h4>Confirm your payment details</h4>

<div class="form-group">
    <label for="first-name">Course</label><br>
    <input type="text" id="first-name" value="<?php echo $_COOKIE['coursename'];?>" readonly/>
  </div>
  <div class="form-group">
    <label for="amount">Amount</label><br>
    <input type="tel" id="amount" value="<?php echo $_COOKIE['amount'];?>" readonly />
  </div>
  <div class="form-group">
    <label for="first-name">Fullname</label><br>
    <input type="text" id="first-name" value="<?php echo $name;?>" readonly />
  </div>
  <div class="form-group">
    <label for="email">Email Address</label><br>
    <input type="email" id="email-address" value="<?php echo $email;?>" readonly />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form> 
<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_743edf96a40f006bcb9ed23ed502d6f30310c08b', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: document.getElementById("amount").value * 100,
            ref: 'apt-challenge' + <?= rand(340030, 78477847); ?>, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function() {
                alert('Window closed.');
            },
            callback: function(response) {
                let message = 'Payment complete! Reference: ' + response.reference;
                alert(message);
            }
        });
        handler.openIframe();
    }
</script>
</body>
</html>