<?php

$A = $_POST['A'];
$B = $_POST['B'];

if ($A > $B){
    echo $B , ",", $A;
}

elseif ($A < $B){
    echo $A , ",", $B;
}

else{
    echo "Números iguais: " , $A;
}