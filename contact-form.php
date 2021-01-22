<?php
if(!isset($_POST['submit']))
{
    //This page should not be accessed directly. Need to submit the form.
    echo "error; you need to submit the form!";
};
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "thelockdowncollective@outlook.com";
  $headers = "From: ".$mailFrom;
  $txt = "Incoming email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  
  header('Location: /contact.php');

}

?>
