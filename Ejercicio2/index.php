<?php

require_once('php/encabezado.php');
?>

<main class="container d-flex align-items-center justify-content-center">
    <section>
        <form method="GET" action="php/procesa.php">
            <div class="mb-3">
                <label for="monto" class="form-label">Monto disponible</label>
                <input type="number" min="0" class="form-control" id="ingresoMonto" name="monto" aria-describedby="montolHelp">
                <div id="montolHelp" class="form-text">Ingrese el monto disponible.</div>
            </div>
            <div class="mb-3">
                <label for="divisa" class="form-label">Divisa</label>
                <select class="form-select" aria-label="divisa" name="divisa">
                    <option selected>--Elija una divisa--</option>
                    <option value="USD">Dólar</option>
                    <option value="BRL">Real</option>
                    <option value="EUR">Euro</option>
                    <option value="CNH">Yuan</option>
                </select>
                <div id="divisaHelp" class="form-text">Elija una divisa.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <!--<section class="w-50">
        <h2 class="table-primary">Divisas</h2>
        <h3 class="table-secondary">Compra</h3>
        <h4 class="table-success">Monto disponible</h4>
        <h5 class="table-warning">Reales adquiridos</h5>
    </section>-->
        
    </section>
</main>

<?php
require_once('php/pie.php');
?>