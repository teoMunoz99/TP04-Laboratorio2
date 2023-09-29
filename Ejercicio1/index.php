<?php
    const APORTE_JUB = 0.13;
    const APORTE_OBRA = 0.035;
    $sueldoNeto;
    

    function calcularSueldoNeto($aumento, $descuento1, $descuento2){
        $sueldo = 250000;
        $sueldo = $sueldo + ($sueldo * $aumento)/100;
        $sueldo = $sueldo - ($sueldo * $descuento1) - ($sueldo * $descuento2);
        return $sueldo;
    }

    require_once('php/encabezado.php');
?>

<main class="container">
    <table class="table table-striped border">
        <thead>
            <h2>Tabla de aumentos</h2>  
        </thead>
        <tbody>
            <?php
                for ($i=15; $i <= 20 ; $i++) { 
                    $sueldoNeto = calcularSueldoNeto($i, APORTE_JUB, APORTE_OBRA);
                    echo('<tr>');
                    echo('<td>');
                    echo('%' .$i);
                    echo('</td>');
                    echo('<td>');
                    echo('$'.$sueldoNeto);
                    echo('</td>');
                    echo('</tr>');
                }
            ?>
        </tbody>
    </table>
</main>

<?php
    require_once('php/pie.php');
?>