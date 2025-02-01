<?php
session_start();
if (! isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100);
}

if (sizeof($_GET) > 1) {
    $guess = $_GET['guess'];
    if ($guess == $_SESSION['number']) {
        echo '<h2>Congrats! You\'re correct!</h2>';
        $_SESSION['guessed_right'] = true;
    } else if ($guess < 1 || $guess > 100) {
        echo '<h2>Guess out of range.</h2>';
    } else if ($guess > $_SESSION['number']) {
        echo '<h2>Guess is too high</h2>';
    } else {
        echo '<h2>Guess is too low</h2>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Number Guessing Game</title>
    <meta name="author" value="Joe Casabona" />
</head>

<body>
    <?php echo $_SESSION['number']; ?>
    <h1>Guess a number 1-100</h1>
    <form name="game" method="GET">
        <input type="text" name="guess" placeholder="Make your guess" />
        <input type="submit" name="submit" value="Guess" />
    </form>
</body>

</html>