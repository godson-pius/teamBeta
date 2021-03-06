<?php

if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $donate = $_POST['amount'];
    echo $name;
    echo $email;
    echo $donate;
    
    $textref = rand(0, 12345678910);
    $textref = "wbt-" . $textref;
    
    
} else {
    echo "No No";
}

// Processing Payment..

$curl = curl_init();

$customer_email = $email;
$amount = $donate;  
$currency = "NGN";
$txref = $textref; // ensure you generate unique references per transaction.
$PBFPubKey = "FLWPUBK_TEST-8db19c4f259bf8b3b0ad4f315666346a-X"; // get your public key from the dashboard.
$redirect_url = "https://localhost/p_class/flutter-wave/success.php";


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);




