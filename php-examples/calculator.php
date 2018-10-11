<?php
echo "My php Calculator \n";
$value_one = -5;
$value_two = 3;

$result = $value_one + $value_two;

echo "Addition: \n";
echo $value_one . " + " . $value_two . " = " . $result . "\n";

echo "Check if my answer is positive \n";

if($result > 1)
{
  echo $result . " is positive.";
}
else
{
  echo $result . " is not positive.";
}
?>
