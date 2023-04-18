<?php

$presentTime = new DateTime();
echo "Départ : " . $presentTime->format('Y-m-d H:i:s');
echo "<br><br>";

$destinationTime = new DateTime('2070-09-21');
echo "La destination : " . $destinationTime->format('Y-m-d H:i');
echo "<br><br>";


$presentTime->modify('2015-10-21');
$presentTime->setTime(16, 29);
echo $presentTime->format('M-d-Y A h:i');

echo "<br><br>";

$destinationTime->modify('2015-10-21');
$destinationTime->setTime(16, 06);
echo $destinationTime->format('M-d-Y A h:i');
echo "<br><br>";

$interval = $presentTime->diff($destinationTime);
echo "Interval : ". $interval->format('%Y année(s) - %M mois - %D jour(s) %Hh:%imin');
echo "<br><br";

