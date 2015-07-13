<?php
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "pgattu@gmail.com, pgattu@strawberrysys.com";
    $email_subject = "Email from Strawberry Systems website";
 

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    } // end function died

 
    $name = $_POST['inputName']; // required
    $email_from = $_POST['inputEmail']; // required
    $phone = $_POST['inputPhone']; // not required
    $message = $_POST['inputMessage']; // required
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'Your Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
 
    $email_message .= "<p>Contact form submitted on Strawberry Systems website with the below data.</p>";
    $email_message .= "<p><strong>Name</strong>: "  . clean_string($name)	. "</p>";
    $email_message .= "<p><strong>Email</strong>: " . clean_string($email_from)	. "</p>";
    $email_message .= "<p><strong>Phone</strong>: " . clean_string($phone)	. "</p>";
    $email_message .= "<p><strong>Message</strong>:<br><pre style='font-size:14pt'>" . clean_string($message) . "</pre></p>";
 
 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'Reply-To: ' . $email_from . "\r\n";
$headers .= 'From: ' . $email_from . "\r\n";
  // $headers .= 'Cc: pgattu@example.com' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";


// send the email
@mail($email_to, $email_subject, $email_message, $headers);
 
 
header('Location: /contact_success.php');

?>
