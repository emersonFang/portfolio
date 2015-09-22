<?php
//original testing wordlist
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

/*
$wordscraped_data = "";
//wordscraping paulnoll
for ($i = 1; $i <= 15; $i++) {

    $j = 2*$i-1;
    $k = 2*$i;

    if ($j<=9) {
      $j = "0" . (string)$j;
    }

    if ($k<=8) {
      $k = "0" . (string)$k;
    }

    $wordscraped_data .= file_get_contents("http://www.paulnoll.com/Books/Clear-English/words-" . $j . "-" . $k . "-hundred.html");
    preg_match_all("'<li>(.*?)</li>'si", $wordscraped_data, $matches, PREG_PATTERN_ORDER);
  }

$file = 'wordscraped_data.txt';
file_put_contents($file, $matches[1]);
*/

//text processing...
$big_wordlist = file('../files/wordscraped_data.txt', FILE_IGNORE_NEW_LINES); //referred to http://stackoverflow.com/questions/1776033/php-get-array-of-words-from-txt-file
$trimmedArray = array_map('trim', $big_wordlist);//remove whitespace
$emptyRemoved = array_filter($trimmedArray); //needed to remove empty array elements, referred to http://stackoverflow.com/questions/3654295/remove-empty-array-elements

function password_logic() {
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      global $emptyRemoved;
      global $str;

      shuffle($emptyRemoved);//randomize the array everytime a user submits

    $numWords = $_POST["numWords"];

    echo '<font color="green">';
    if ($numWords=='') //user didn't enter a number for words
      {echo "Please enter 1 to 10 for the number of words in your password.";}
    else {
      //numWords
    for ($i = 1; $i <= htmlspecialchars($_POST["numWords"]); $i++) {
      if (isset($_POST["camelBool"])) //for camelCase
        {echo (ucwords(strtolower($emptyRemoved[$i-1])));}
      else {echo (strtolower($emptyRemoved[$i-1]));}

      if (isset($_POST["hyphensBool"])) //for hyphens
      {if ($i < htmlspecialchars($_POST["numWords"])) {echo "-";};}

    }

    if (isset($_POST["numBool"])) //password has a number
      {echo rand(0,9);}

    if (isset($_POST["symbolBool"])) //password has a symbol
      {$randomChar = $str[rand(0, strlen($str)-1)];
      echo $randomChar;}
    }
    echo '</font>';
    }
  }
?>
