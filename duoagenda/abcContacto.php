<?php
include_once("modelo/Contacto.php");
session_start();

$sErr = "";
$sOpe = "";
$sCve = "";
$sNomBoton = "Borrar";
$bCampoEditable = false;
$bLlaveEditable = false;
$oContacto = new Contacto();

if (isset($_SESSION["usuario"])) {
    if (isset($_POST["txtClave"]) && isset($_POST["txtOpe"])) {
        $sOpe = $_POST["txtOpe"];
        $sCve = $_POST["txtClave"];

        if ($sOpe == "a") {
            $bCampoEditable = true;
            $bLlaveEditable = true;
            $sNomBoton = "Agregar";
        } else {
            if ($oContacto->buscarPorId($sCve)) {
                if ($sOpe == "m") {
                    $bCampoEditable = true;
                    $sNomBoton = "Modificar";
                }
            } else {
                $sErr = "Contacto no encontrado";
            }
        }

        $bExito = false;

        // Agregar o modificar
        if (($sOpe == "a" || $sOpe == "m") && isset($_POST["txtNombre"])) {
            if ($sOpe == "m") {
                $oContacto->setId($_POST["txtClave"]);
            }
            $oContacto->setNombre($_POST["txtNombre"]);
            $oContacto->setDireccion($_POST["txtDireccion"]);
            $oContacto->setTelefono($_POST["txtTelefono"]);
            $oContacto->setEmail($_POST["txtEmail"]);
            $oContacto->setIDU($_SESSION["usuario"]); 
            $bExito = $oContacto->guardar();
        }

        // Borrar
        elseif ($sOpe == "b") {
            $bExito = $oContacto->eliminar($sCve);
        }

        if ($bExito) {
            if ($sOpe == "a") {
                header("Location: tabusuario.php?agregado=1");
            } elseif ($sOpe == "m") {
                header("Location: tabusuario.php?modificado=1");
            } elseif ($sOpe == "b") {
                header("Location: tabusuario.php?eliminado=1");
            }
            exit();
        } elseif (!isset($_POST["txtNombre"]) && $sOpe != "b") {
        } else {
            $sErr = "No se pudo realizar la operación";
        }

    } else {
        $sErr = "Faltan datos para la operación";
    }
} else {
    $sErr = "Debe iniciar sesión";
}

if ($sErr == "") {
    include_once("cabecera.html");
    include_once("menu.php");
    include_once("aside.html");
} else {
    header("Location: error.php?sError=" . urlencode($sErr));
    exit();
}
?>

<section class="contacto-formulario">
    <h3 class="form-titulo">
        <?php
        echo $sOpe == 'a' ? "Agregar nuevo contacto" :
             ($sOpe == 'm' ? "Modificar contacto" : "Eliminar contacto");
        ?>
    </h3>

    <form name="abcContacto" class="formulario" action="abcContacto.php" method="post">
        <input type="hidden" name="txtOpe" value="<?php echo htmlspecialchars($sOpe); ?>">
        <input type="hidden" name="txtClave" value="<?php echo htmlspecialchars($sCve); ?>">

        <label for="txtNombre">Nombre</label>
        <input type="text" id="txtNombre" name="txtNombre"
            <?php echo ($bCampoEditable ? "" : "disabled"); ?>
            value="<?php echo is_object($oContacto) ? $oContacto->getNombre() : ''; ?>" required>

            <label for="txtTelefono">Teléfono</label>
        <input type="text" id="txtTelefono" name="txtTelefono"
            <?php echo ($bCampoEditable ? "" : "disabled"); ?>
            value="<?php echo is_object($oContacto) ? $oContacto->getTelefono() : ''; ?>" required>

        <label for="txtDireccion">Dirección</label>
        <input type="text" id="txtDireccion" name="txtDireccion"
            <?php echo ($bCampoEditable ? "" : "disabled"); ?>
            value="<?php echo is_object($oContacto) ? $oContacto->getDireccion() : ''; ?>" required>


        <label for="txtEmail">Email</label>
        <input type="email" id="txtEmail" name="txtEmail"
            <?php echo ($bCampoEditable ? "" : "disabled"); ?>
            value="<?php echo is_object($oContacto) ? $oContacto->getEmail() : ''; ?>" required>

        <div class="form-botones">
            <input type="submit" value="<?php echo $sNomBoton; ?>" class="btn principal">
            <input type="submit" value="Cancelar" class="btn secundario" onclick="abcContacto.action='tabcontactos.php';">
        </div>
    </form>
</section>


<?php include_once("pie.html"); ?>
