<?php
session_start();
$_SESSION['visited'] = true;

if (isset($_SESSION['visited'])) {
  echo '<h1>Welcome back!</h1>';
} else {
  echo '<h1>Welcome!</h1>';
}

session_destroy();