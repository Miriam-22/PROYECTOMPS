<?php
include "../Cliente/include/encabezado.php";
include "conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['correo']) || empty($_POST['contra']) || empty($_POST['telefono']) || empty($_POST['rol'])) {
        $alert = '<p class"error">Todo los campos son requeridos</p>';
    } else {
        $idusu = $_GET['id'];

        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $telefono = $_POST['telefono'];
        $rol = $_POST['rol'];

        $sql_update = mysqli_query($conexion, "UPDATE usuarios SET correo= '$correo', contra = '$contra' , telefono = '$telefono', idtipo= $rol WHERE idusu = $idusu");
        $alert = '<p>Usuario Actualizado</p>';
        header("Location:../Cliente/usuarios.php");
        exit();
    }
}

// Mostrar Datos

if (empty($_REQUEST['id'])) {
    header("Location:../Cliente/usuarios.php");
    exit();
}
$idusu = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE idusu= $idusu");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
    header("Location:../Cliente/usuarios.php");
    exit();
} else {
    if ($data = mysqli_fetch_array($sql)) {
        $idusu = $data['idusu'];
        $nombre = $data['nomusu'];
        $apausu = $data['apausu'];
        $amausu = $data['amausu'];
        $correo = $data['correo'];
        $contra = $data['contra'];
        $telefono = $data['telefono'];
        $rol = $data['idtipo'];
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 m-auto">
            <form class="" action="" method="post">
                <?php echo isset($alert) ? $alert : ''; ?>
                <input type="hidden" name="id" value="<?php echo $idusu; ?>">
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre"
                        value="<?php echo $nombre; ?>" readonly>
                </div>
                <div class="form-group">
                <label for="apausu">Apellido Paterno: </label>
                <input type="text" class="form-control" id="apausu" name="apausu" placeholder="Ingrese el Apellido Paterno"
                        value="<?php echo $apausu; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="amausu">Apellido Materno: </label>
                <input type="text" class="form-control" id="amausu" name="amausu" placeholder="Ingrese el Apellido Materno"
                        value="<?php echo $amausu; ?>" readonly>
              </div>
                <div class="form-group">
                    <label for="correo">Correo: </label>
                    <input type="text" placeholder="Ingrese el Correo" class="form-control" name="correo" id="correo"
                        value="<?php echo $correo; ?>">

                </div>
                <div class="form-group">
                    <label for="contra">Contraseña: </label>
                    <input type="text" placeholder="Ingrese la Contraseña" class="form-control" name="contra" id="contra"
                        value="<?php echo $contra; ?>">

                </div>
                <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa el Numero Telefonico"
                        value="<?php echo $telefono; ?>">
              </div>
                <div class="form-group">
                    <label for="rol">Rol</label>
                    <select name="rol" id="rol" class="form-control">
                        <option value="1" <?php
                                            if ($rol == 1) {
                                                echo "selected";
                                            }
                                            ?>>Administrador</option>
                        <option value="2" <?php
                                            if ($rol == 2) {
                                                echo "selected";
                                            }
                                            ?>>Gerente</option>
                        <option value="3" <?php
                                            if ($rol == 3) {
                                                echo "selected";
                                            }
                                            ?>>Empleado</option>
                        <option value="4" <?php
                                            if ($rol == 4) {
                                                echo "selected";
                                            }
                                            ?>>Cliente</option>
                    </select>
                </div>
                <a href="../Cliente/usuarios.php" class="btn btn-primary"><i class="fas fa-user-edit"></i> Cancelar</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Guardar cambios</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<footer style=" bottom: 0; width: 100%; height: 30px;">
    <?php include_once("../Cliente/include/pie.php") ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>