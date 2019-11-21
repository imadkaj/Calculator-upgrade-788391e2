<?php
$formule = readline ("Welke operatie wil je uitvoeren? (+, -, %) ");
if ($formule === "*"){
    echo "'*' is geen geldige operatie"; 
    exit;
}



$a = readline ("eerste getal: ");
$b = readline ("tweede getal: ");


if  (is_numeric($a) && is_numeric($b)
){

}
else{ 
    echo "dit is geen correct getal.";     
    exit;
}
if ($formule === "+") {
    echo "dit is u resultaat: " . $a + $b;
}
elseif ($formule =="%"){
    echo " dit is u resultaat: ". $a % $b ;
}

elseif ($formule === "-")
{
 echo "dit is je resultaat: " . $a - $b;

}
?>

