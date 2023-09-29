<?php
$ruta = "../css";
require_once('funciones.php');
require_once('encabezado.php');

$deposito = 0;
$cantidadDias = 0;
$msj = "";
$interes = 0;

if(!empty($_GET['deposito']) && !empty($_GET['dias'])){
    //calculo el interes
    $deposito = $_GET['deposito'];
    $cantidadDias = $_GET['dias'];
    $interes = calcularIntereses($deposito, $cantidadDias);
}else{
    echo("falta algo");
}


?>

<main class="container d-flex justify-content-center align-items-center">
    <section class="bg-dark text-light w-25 rounded-4 p-4">
        <h5>Intereses</h5>
        <?php
        if (!empty($msj)) {
            echo '<p>' . $msj . '</p>';
        } else {
            $interes = round($interes,2);
            echo '<p>Interés generado: $' . $interes . '</p>';
        }
        ?>
    </section>
</main>

<?php
require_once('pie.php');
?>
