<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "harini.sbca2021@gmail.com";
  $subject = "New Message from $email";
  $body = "Message: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "successfull";
    // header("Location: contact_us.html?message=Email sent successfully");
  } else {
    echo "something wrong";
    // header("Location: contact_us.html?message=Failed to send email");
  }
}
?>