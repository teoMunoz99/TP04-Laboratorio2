<?php
    require_once('funciones.php');
    $montoTotal=0;
    if(empty($_GET['monto']) && empty($_GET['divisa'])){
        echo("Falta algo");
    }else{

        $monto = $_GET['monto'];
        $divisa =$_GET['divisa'];

        $montoTotal = calcularMonto($monto, $divisa);

        

    }
?>