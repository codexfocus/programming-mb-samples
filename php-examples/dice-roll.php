 <?php
  $min = 1;
  $max = 6;
  $roll_again = "yes";
  if ($roll_again === "yes") 
  {
    echo "Rolling the dice...\n";
    echo "The values are ...\n";
    echo rand($min, $max) . "\n";
    echo rand($min, $max) . "\n";
  }
  echo "\nThanks for playing";
