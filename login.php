<?php
function A000124($n) {
  return pow($n, 2) + pow(-1, $n);
}

$input = 7; // input dapat diubah sesuai keinginan
$output = '';

for ($i = 1; $i <= $input; $i++) {
  $output .= A000124($i);

  if ($i < $input) {
    $output .= '-';
  }
}

echo "Input: " . $input . "\n";
echo "Output: " . $output . "\n";
?>