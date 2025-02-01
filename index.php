<?php
require_once('functions.php');
$form_completed = null;
?>
<h2>Contact</h2>

<form name="contact" method="POST">
  <div>
    <?php if (!empty($_POST)) {
      required('Name', $_POST['name']);
    } ?>
    <label for="name">*Name:</label> <input type="text" name="name" placeholder="Your Name" />
  </div>
  <div>
    <?php if (!empty($_POST)) {
      required('Email', $_POST['email']);
      $regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
      if (! preg_match($regex, $_POST['email'])) {
        echo '<p class="alert">Please enter a valid email address.</p>';
        $form_completed = false;
      }
    } ?>
    <label for="name">*Email:</label> <input type="text" name="email" placeholder="Your Email" />
  </div>
  <div>
    <?php if (!empty($_POST)) {
      required('Reason for Contact', $_POST['reason']);
    } ?>
    <p>*Reason for Contact:</p>
    <input type="radio" name="reason" id="consult" value="consult" checked /> <label for="consult">Consult</label>
    <input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
    <input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
  </div>
  <div>
    <p>What topics do you like reading about? (Check all that apply):</p>
    <input type="checkbox" name="topics[]" id="HTML" value="HTML" /> <label for="HTML">HTML</label>
    <input type="checkbox" name="topics[]" id="CSS" value="CSS" /> <label for="CSS">CSS</label>
    <input type="checkbox" name="topics[]" id="PHP" value="PHP" /> <label for="PHP">PHP</label>
    <input type="checkbox" name="topics[]" id="AI" value="AI" /> <label for="AI">AI</label>
  </div>
  <div>
    <p>What's your favorite movie(s)?</p>
    <select name="movie[]" id="movie" multiple style="width: 350px; height: 180px;">
      <option value="Star Wars I">Star Wars I</option>
      <option value="Star Wars II">Star Wars II</option>
      <option value="Star Wars III">Star Wars III</option>
      <option value="Star Wars IV">Star Wars IV</option>
      <option value="Star Wars V">Star Wars V</option>
      <option value="Star Wars VI">Star Wars VI</option>
      <option value="Star Wars VII">Star Wars VII</option>
      <option value="Star Wars VIII">Star Wars VIII</option>
      <option value="Star Wars IX">Star Wars IX</option>
      <option value="none">I don't like movies</option>
    </select>
  </div>
  <div>
    <?php if (!empty($_POST)) {
      required('Message', $_POST['message']);
    } ?>
    <label for="message">*What's your message?</label>
    <textarea name="message"></textarea>
  </div>
  <div><input type="submit" name="submit" value="Submit" /></div>
</form>

<style>
  .alert {
    color: red;
    font-weight: bold;
  }
</style>

<?php

if (! empty($_POST) && ($form_completed ?? true)) {
  array_pop($_POST);
  foreach ($_POST as $label => $value) {
    if (is_array($value)) {
      echo '<p><strong>' . ucfirst($label) . ':</strong> ' . implode(', ', $value) . '</p>';
    } else {
      echo '<p><strong>' . ucfirst($label) . ':</strong> ' . $value . '</p>';
    }
  }
}
?>