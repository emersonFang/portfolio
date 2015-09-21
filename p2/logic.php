<?php
$word_list = Array(
    'oily',
    'creamy',
    'milky',
    'pungent',
    'tasty',
    'smooth',
    'warm',
    'furry',
    'rock',
    'hard'
    );

/* special characters */
$str = '!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';

function password_logic() {
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      global $word_list;
      global $str;
      shuffle($word_list);

    $numWords = $_POST["numWords"];
    if ($numWords=='') //user didn't enter a number for words
      {echo "Please enter 1 to 10 for the number of words in your password.";}
    else {
      //numWords
    for ($i = 1; $i <= htmlspecialchars($_POST["numWords"]); $i++) {
          echo $word_list[$i-1];
      if ($i < htmlspecialchars($_POST["numWords"])) {echo "-";}

    }

    if (isset($_POST["numBool"])) //password has a number
      {echo rand(0,9);}

    if (isset($_POST["symbolBool"])) //password has a symbol
      {$randomChar = $str[rand(0, strlen($str)-1)];
      echo $randomChar;}
    }


    }
  }
?>
