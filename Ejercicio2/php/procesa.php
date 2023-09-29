<?php
$ruta = "../css";
require_once('funciones.php');
require_once('encabezado.php');

//Verifico que llegaron los datos
if (empty($_GET['monto']) || empty($_GET['divisa'])) {
    echo ("Faltan datos");
} else {
    $monto = $_GET['monto'];
    $divisa = $_GET['divisa'];
    $montoTotal = 0; //Inicializo la variable monto total
    $montoTotal = calcularMonto($monto, $divisa);
}
?>

<main>
    <section class="d-flex row justify-content-center p-5">
        <article class="w-50 border p-0">
            <h2 class="table-primary bg-primary m-0">Divisas</h2>
            <h3 class="table-secondary bg-secondary m-0">Compra</h3>
            <h4 class="table-success bg-success m-0">Monto disponible: $
                <?php
                echo ($monto);
                ?>
            </h4>
            <h5 class="table-warning">
                <?php
                echo ($divisa . " adquiridos: $" . $montoTotal);
                ?>
            </h5>
        </article>
    </section>
</main>

<?php
require_once('pie.php');
?>