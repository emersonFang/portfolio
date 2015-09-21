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

    .container {
			width:75%;
      padding: 5%;
			min-width:800px;
			margin:auto;
      text-align:center;
    }

	</style>

  <?php require 'logic.php'; ?>

</head>

<body>

  	<header role="banner">
  		<h1>Emerson's xkcd-style Password Generator</h1>
  	</header>

    <h2>Generate a secure password:</h2>

    <div class="container">
      <form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <?php
        password_logic();
        ?>

        <br>
        <br>
        Number of words (1-10):
        <input type='number' name='numWords' min='1' max='10' >
        <br>


<!--
<select name="word_num">
<option value="Select number of words"></option>
<?php for ($i = 1; $i <= count($word_list); $i++) { ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>
<?php echo count($word_list) ?>
-->
        Include a number?
        <input type="checkbox" name="numBool" value='Yes' /> Yes
        <br>


        Include a special symbol?
        <input type="checkbox" name="symbolBool" value="Yes" /> Yes
        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
  </div>

    <h2>Inspired by xkcd:</h2>
      <div class="container">
        <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd password comic" class="comic">
      </div>
</html>
