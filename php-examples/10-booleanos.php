<?php
    $luzEncendidad=true;
    
    if($luzEncendidad)
        echo "La luz esta encendida";
    else
        echo "La luz esta apagada";

    //caso 2
    $sintomas_covid=[
        "tos"=>true,
        "fiebre"=>true,
        "dolor"=>false,
        "perdida_olfato"=>false];
    
    if($sintomas_covid["tos"]&&
       $sintomas_covid["fiebre"]) {
        echo "\nEstas enfermo de covid. Ve a un centro de salud.";
       }
       else{
        echo "\nAun no estas con covid.";
       }

    //caso 3, cuenta bancaria
    $saldo = 1000;
        if(!($saldo > 0)) {
            echo "\nTiene saldo insuficiente";
        }
        else{
            echo "\nTienes saldo";
        }
?>