<nav>
<?php
if (isset($_SESSION["rol"])) {
    if ($_SESSION["rol"] == "1") {
        // Administrador
        ?>
        <ul>
            <li><a href="inicio.php" class="menu">Home</a></li>
            <li><a href="logout.php" class="menu">Cerrar Sesión</a></li>
            <li><a href="tabcontactos.php" class="menu">Contactos Personales</a></li>
            <li><a href="tabusuario.php" class="menu">Contactos Generales</a></li>
        </ul>
        <?php
    } elseif ($_SESSION["rol"] == "2") {
        // Visualizador
        ?>
        <ul>
            <li><a href="inicio.php" class="menu">Home</a></li>
            <li><a href="logout.php" class="menu">Cerrar Sesión</a></li>
            <li><a href="tabcontactos.php" class="menu">Contactos Personales</a></li>
        </ul>
        <?php
    }
} else {
    ?>
    <ul>
    </ul>
    <?php
}
?>
</nav>
