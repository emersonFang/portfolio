<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="utf-8">
	<title>Emerson Fang DWA-15 P2 - xkcd-style password generator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<style>

    h1 {
      text-align: center;
    }

	</style>

  <?php require 'logic.php'; ?>

</head>

<body>

  <div class="container">

  	<header role="banner">
  		<h1>Emerson's xkcd-style Password Generator</h1>
  	</header>

  <h2>Generate a secure password<h2>
    <p>
      <form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

        }
        ?>

        Number of words
        <input type='number' name='numWords' min='1' max='<?php echo count($word_list) ?>' >
        <br>


<!--
<select name="word_num">
<option value="Select number of words"></option>
<?php for ($i = 1; $i <= count($word_list); $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>
-->
        Include a number?
        <input type="radio" name="numBool" value="Yes" /> Yes
        <input type="radio" name="numBool" value="No" /> No
        <br>


        Include a special symbol?
        <input type="radio" name="symbolBool" value="Yes" /> Yes
        <input type="radio" name="symbolBool" value="No" /> No
        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</p>

    <h2>Inspired by xkcd:<h2> <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd password comic" class="comic">


  </div>

</html>
