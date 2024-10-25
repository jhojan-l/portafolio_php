<?php
include './includes/header.php';
?>


    <h1>contactos</h1>

    <main class="container">
        <form class="formulario " method="POST">
            <fieldset>
                <legend>dijite todos sus datos</legend>
                <div class="campos">

                    <div class="campo">
                        <label for="nombre">nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="dijite el nombre completo" required autofocus>
                    </div>


                    <div class="campo">
                        <label for="Telefono">Telefono</label>
                        <input type="text" id="Telefono" name="Telefono" placeholder="+57 320xxxxxxxx">
                    </div>


                    <div class="campo">
                        <label for="Email">Email</label>
                        <input type="text" id="Email" name="Email" placeholder="dijite su correo">
                    </div>


                    <div class="campo">
                        <label for="mensaje">mensaje</label>
                        <textarea name="mensaje" id="mensaje"></textarea>
                    </div>
                    <input type="submit" class="btn">

                </div>



            </fieldset>
        </form>


    </main>

    
   

    <?php 
    echo "<br>";
    $nombre = $_POST['nombre'];
    $Telefono = $_POST['Telefono'];
    $Email = $_POST['Email'];
    $mensaje = $_POST['mensaje'];
    try {
        require __DIR__ .('/includes/conexion_bd.php');
        $sql =  "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$Telefono', '$Email', '$mensaje');";
        $query = mysqli_query($coneccion, $sql);
        echo "hemos recibido su mensaje";
        
    } catch (\Throwable $th) {
        var_dump($th);
    }
    include './includes/footer.php';

    
    ?>