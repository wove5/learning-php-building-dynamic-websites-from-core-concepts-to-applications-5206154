<?php
function pre_dump($input)
{
  echo '<pre>';
  var_dump($input);
  echo '</pre>';
}

function required($label, $value)
{
  global $form_completed;
  if (! empty(trim($value))) {
    return true;
  }
  echo '<p class="alert">' . $label . ' is required.</p>';
  $form_completed = false;
}

function validate($input)
{
  return trim(htmlentities($input));
}
