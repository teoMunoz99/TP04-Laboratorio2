<?php
$ruta = "../css";
require_once('funciones.php');
require_once('encabezado.php');

$email = "";
$password = "";
$msj = "";

if (!empty($_POST['email']) && !empty($_GET['password'])) {
    $msj = "Email o contraseña invalida";
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

?>

<main class="container d-flex justify-content-center align-items-center">
    <section class="bg-dark text-light w-25 rounded-4 p-4">
        <?php
        echo ("<p class='text-danger'>".$msj."</p>");
        echo ("<p class=''>Email: ".$email."</p>");
        echo ("<p class=''>Contraseña: ".$password."</p>");
        ?>
    </section>
</main>

<?php
require_once('pie.php');
?>