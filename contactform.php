<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $mailTo = "info@daoyicaotang.nl";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend");
}