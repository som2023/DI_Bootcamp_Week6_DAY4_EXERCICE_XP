
<?php
$month = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
$month_array = array();

foreach ($month as $month) {
  if ($month !== 'Mars') {
    $month_array[] = $month;
  }
}

$month = $month_array;

echo implode(", ", $month);
?>
