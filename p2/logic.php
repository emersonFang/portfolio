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
