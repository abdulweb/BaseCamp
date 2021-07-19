<?php 

function Standard_Deviation($array)

{

$numberArrayElement = count($array);

$variance = 0.0;

$mean = array_sum($array);

$avg = $mean/$numberArrayElement;

for($i =0; $i < $numberArrayElement; $i++)

{

$variance += pow(($array[$i] - $avg), 2);

}

return (float)sqrt($variance/$numberArrayElement);

}

?>