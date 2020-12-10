<?php
require_once('../db/config.php');

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="paymentForm">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email-address" required value="<?php echo $email;?>" readonly  />
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="tel" id="amount" required />
        </div>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" />
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" />
        </div>
        <div class="form-submit">
            <button type="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
    </form>
    <script src="https://js.paystack.co/v1/inline.js"></script>
</body>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
        e.preventDefault();
        let handler = PaystackPop.setup({
            key: 'pk_test_212c6a956274335d640891ce188317a046abd95a', // Replace with your public key
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

</html>