<?php
setcookie('visited', true);

if (isset($_COOKIE['visited'])) {
  setcookie('visited', false, time() - 3600);
  echo '<h1>Welcome back!</h1>';
} else {
  echo '<h1>Welcome!</h1>';
}
