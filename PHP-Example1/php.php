<?php
$dogum_yeri= "Yalova";
$ikamet= 77;

switch($ikamet){
    case 01:
        echo "Adana";
        break;
    case 07:
        echo "Antalya";
        break;
    case 11:
        echo "Bilecik";
        break;
    case 14:
        echo "Bolu";
        break;
    case 17:
        echo "Çanakkale";
        break;
    case 22:
        echo "Edirne";
        break;
    case 34:
        echo "İstanbul";
        break;
    case 35:
        echo "İzmir";
        break;
    case 41:
        echo "Kocaeli";
        break;
    case 77:
        echo "Yalova";
        break;
}

echo "<br>";

$dogum_yeri2= 77;
$ikamet2= 36;
$sonuc= $dogum_yeri2 - $ikamet2 

if ($sonuc){
    echo "Memletinde yaşıyorsun";
} elseif($sonuc){
    switch($sonuc){
        case 41;
            echo "Kocaeli";
            break;
    }
}

?>