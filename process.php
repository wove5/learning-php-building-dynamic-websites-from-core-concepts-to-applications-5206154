<?php
if (!empty($_POST)) {
  required('Name', $_POST['name']);

  required('Email', $_POST['email']);

  $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  $form_completed = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

  required('Reason for Contact', $_POST['reason']);
  required('Message', $_POST['message']);
}

if ($form_completed ?? true) {
  array_pop($_POST);
  foreach ($_POST as $label => $value) {
    if (is_array($value)) {
      echo '<p><strong>' . ucfirst($label) . ':</strong> ' . implode(', ', $value) . '</p>';
    } else {
      echo '<p><strong>' . ucfirst($label) . ':</strong> ' . validate($value) . '</p>';
    }
  }
}
