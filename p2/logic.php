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

    /*
    $numbers = range(1, 20);
    shuffle($numbers);
    foreach ($numbers as $number) {
    echo "$number ";

    $words = $word_list[mt_rand(0, htmlspecialchars($_POST["numWords"]))];
    var_dump($words);
    var_dump($rand_keys);
    //echo $word_list[$rand_keys[0]] . "\n";
    //echo $word_list[$rand_keys[1]] . "\n";
    }
    */


function password_logic() {
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      global $word_list;
      shuffle($word_list);
      for ($i = 1; $i <= htmlspecialchars($_POST["numWords"]); $i++) {
          echo $word_list[$i-1];
        if ($i < htmlspecialchars($_POST["numWords"])) echo "-";
      }
    if ($_POST["numBool"]="Yes") echo rand(0,9);
    }
  }


function test_numInput($number) {
//http://stackoverflow.com/questions/16362058/php-form-numeric-validation
  if(empty($number)) {
      $msg = '<span class="error"> Please enter a value</span>';
      echo $msg;
  } else if(!ctype_digit($number)) {
      $msg = '<span class="error"> Data entered was not numeric</span>';
      echo $msg;
  } else if(strlen($number) != 6) {
      $msg = '<span class="error"> The number entered was not 6 digits long</span>';
      echo $msg;
  } else {
      /* Success */
  }
}

?>
