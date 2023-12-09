<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'lawgrit.knowyourrights@gmail.com';

  // $php_email_form = '../assets/vendor/php-email-form/php-email-form.php';
  // if(file_exists($php_email_form)) {
  //     include($php_email_form);
  // } else {
  //     die('Coming Soon!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->from_phone = $_POST['phone'];
  // $contact->subject = $_POST['Request for a quote'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['phone'], 'Phone');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

  $status = "";

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $to = "lawgrit.knowyourrights@gmail.com";
    $content = "Name: $name \n Email: $email \n Phone: $phone \n Message: $message";
    $headers = "From: $email";

    if(mail($to, $email, $content, $headers)){
      echo $status="Email sent!";
    } else{
      echo $status="Email not sent!";
    }
  }


//  // You should santize input, examples below;
//  // $data = strip_tags($data); - this removes tags like <a>
//  // $data = trim($data); - this removes whitespace

//  // New code
//  $status = ""; // First set the alert-msg to a null/empty value so it's not shown before the form is submitted.

//  // Listen for when the submit button is clicked
//  if (isset($_POST['submit'])) {
//  $name = $_POST['name'];
//  $email = $_POST['email'];
//  $phone = $_POST['phone'];
//  $message = $_POST['message'];

//  // Now we have the post data and it has been sanitized we can check to make sure it isn't null/empty
//  if ($name == "" || $email == "" || $phone == "" || $message == "") {

//  // If any of these values are empty send the alert that email hasn't been sent
//  $status = "Email not sent!";
 
//  // If all values have some data, continue...
//  } else {
//  $content = "Name: $name \n Email: $email \n Phone: $phone \n Message: $message";
//  $recipient = "lawgrit.knowyourrights@gmail.com";
//  $mailheader = "From: $email \r\n";
//  mail($recipient, $phone, $content, $mailheader) or die("Error!");

//  // Set alert-msg value for success
//  $status = "Email sent!";

//  }
//  }

?>
