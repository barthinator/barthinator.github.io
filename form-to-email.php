<?php
if(!isset($_POST['submit'])){
  echo "error; you need to submit the form!";
}
else{
  echo "Thank you. Your email was sent! You will be redirected back to the page.";

  //sleep(5);

  ob_start(); // ensures anything dumped out will be caught
  // do stuff here
  $url = 'https://barthinator.github.io/'; // this can be set based on whatever
  // clear out the output buffer
  while (ob_get_status())
  {
      ob_end_clean();
  }
  // no redirect
  header( "Location: $url" );
}

$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];

$email_from = "dbartholomew13@apu.edu";
$email_subject = $subject;
$email_body = $message;
$to = "dbartholomew13@apu.edu";
$headers= "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

 ?>
