<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "thelockdowncollective@outlook.com";
  $headers = "From: ".$mailFrom;
  $txt = "Incoming email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact-form.php?mailsend");

}
