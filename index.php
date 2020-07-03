<?php
    $horas=36;
    if ($horas<=40){
        $salario=$horas*20000;
        echo("<br>");
        echo("Su salario es". $salario);
    }else{
        $salario=$horas*25000;
        echo("<br>");
        echo("Su salario es". $salario);
    }
?>