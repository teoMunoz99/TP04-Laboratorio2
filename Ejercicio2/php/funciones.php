<?php

    function calcularMonto ($monto, $divisa){
        $montoTotal = 0;
        switch($divisa){
            case 'USD':
                    $montoTotal = $monto / 5;
                break;
            case 'BRL':
                    $montoTotal = $monto / 5;
                break;
            case 'EUR':
                    $montoTotal = $monto / 5;
                break;
            case 'CNH':
                    $montoTotal = $monto / 5;
                break;
            default:
                break;
        }
        return $montoTotal;
    }

?>