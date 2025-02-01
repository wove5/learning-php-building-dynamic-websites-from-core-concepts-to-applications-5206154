<?php
require_once('functions.php');
$form_completed = null;

include('process.php');
?>

<h2>Contact</h2>

<form name="contact" method="POST">
  <div>
    <label for="name">*Name:</label> <input type="text" name="name" placeholder="Your Name" />
  </div>
  <div>
    <label for="name">*Email:</label> <input type="text" name="email" placeholder="Your Email" />
  </div>
  <div>
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