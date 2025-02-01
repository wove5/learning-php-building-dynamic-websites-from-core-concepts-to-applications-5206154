<?php
if (! empty($_POST)) {
  required('Name', $_POST['name']);
  required('Email', $_POST['email']);
  $form_completed = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  required('Reason for Contact', $_POST['reason']);
  required('Message', $_POST['message']);


  if ($form_completed ?? true) {
    array_pop($_POST);
    $name = $_POST['name'];
    $email =
      filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $to = "Joe Casabona<joe@casabona.org>";
    $from = "$name<$email>";
    $subject = "Reason for Contact: " . ucfirst($_POST['reason']);
    $message = '';
    foreach ($_POST as $label => $value) {
      if (is_array($value)) {
        $message .= ucfirst($label) . ': ' . implode(', ', $value) . "\n\n";
      } else {
        $message .= ucfirst($label) . ': ' . validate($value) . "\n\n";
      }
    }

    $headers = 'From: ' . $from . " \r\n" .
      'Reply-To: ' . $email . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
      echo "<h3>Your message has been sent!</h3>";
    }
  }
}
