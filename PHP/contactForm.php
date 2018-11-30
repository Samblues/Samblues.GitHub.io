<?php

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "Sam@samguzel.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You Have Recieved an Email From ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
  }
 ?>
