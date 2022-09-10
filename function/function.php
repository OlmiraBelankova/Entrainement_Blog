<?php
function propositionDeLecture($numeroart, $nombreTotal) {
if ($numeroart<($nombreTotal-3)) {
$premierart=$numeroart+1;
$deuxiemart=$numeroart+2;
$troisiemart=$numeroart+3;
} else {
    $premierart=1;
    $deuxiemart=2;
    $troisiemart=3;  
};

$tableauRecommendation = 
[ $premierart,
    $deuxiemart,
    $troisiemart
];
    return $tableauRecommendation;
};

$tableauFinRec=propositionDeLecture($numeroart, $nombreTotal);


/* $artRec1=propositionDeLecture($numeroart, $nombreTotal)[0];
$artRec2=propositionDeLecture($numeroart, $nombreTotal)[1];
$artRec3=propositionDeLecture($numeroart, $nombreTotal)[1];*/
?>