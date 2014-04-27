<?php
  $max_number = 100000000;
  $target_number = 3;
  $try = 0;
  
  function binarySearch($lower, $upper)
  {
    global $try;
    global $max_number;
    global $target_number;
    $guess = $lower + (int)(($upper - $lower)/2);
    echo 'Lower: ' . $lower . 'Upper: ' . $upper . '<br>';
    echo 'Try ' . ++$try . 'Guess: ' . $guess . '<br>';
    
    if ($guess == $target_number)
    {
      echo 'Bingo!!';
      exit();
    }
    
    if ($guess > $target_number)
    {
      binarySearch($lower, $guess - 1);
    }
    else
    {
      binarySearch($guess + 1, $upper);
    }
  }
  
  binarySearch(0, $max_number);
    
?>
