
<?php

include "conexion.php";

$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM persona
        WHERE id = '$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Actualizar</h1>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Actualizar Datos</div>
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']?>" class="form-control mb-3">
                            <input type="text" name="nombre" value="<?php echo $row['nombre']?>" class="form-control mb-3">
                            <input type="text" name="apellido" value="<?php echo $row['apellido']?>" class="form-control mb-3">
                            <input type="text" name="telefono" value="<?php echo $row['telefono']?>" class="form-control mb-3">
                            <div class="d-grid">
                            <input type="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>