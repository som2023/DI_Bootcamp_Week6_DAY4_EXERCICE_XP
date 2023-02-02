<?php
$table1 = array(1, 2, 3, 4, 5, 6);
$table2 = array(2, 4);

$verifier = true;
foreach ($table2 as $value) {
  if (!in_array($value, $table1)) {
    $check = false;
    break;
  }
}

if ($check) {
  echo "Le tableau 2 est un sous-ensemble du tableau 1";
} else {
  echo "Le tableau 2 n'est pas un sous-ensemble du tableau 1";
}
?>
