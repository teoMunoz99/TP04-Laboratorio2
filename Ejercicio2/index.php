<?php
$ruta = "css";
require_once('php/encabezado.php');
?>

<main class="container d-flex align-items-center justify-content-center">
    <section class="bg-warning p-5 rounded-5">
        <form method="GET" action="php/procesa.php">
            <article class="mb-3">
                <label for="monto" class="form-label">Monto disponible</label>
                <input type="number" min="0" class="form-control" id="monto" name="monto" aria-describedby="montolHelp">
                <div id="montolHelp" class="form-text">Ingrese el monto disponible.</div>
            </article>
            <article class="mb-3">
                <label for="divisa" class="form-label">Divisa</label>
                <select class="form-select" id="divisa" aria-label="divisa" name="divisa">
                    <option selected>--Elija una divisa--</option>
                    <option value="USD">Dólar</option>
                    <option value="BRL">Real</option>
                    <option value="EUR">Euro</option>
                    <option value="CNH">Yuan</option>
                </select>
                <div id="divisaHelp" class="form-text">Elija una divisa.</div>
            </article>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </section>
</main>

<?php
require_once('php/pie.php');
?>