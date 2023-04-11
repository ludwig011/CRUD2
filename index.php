<html>

<head>
    <title>PRUEBAS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        function confirmar() {
            return confirm('Estas seguro? se eliminaran los datos');
        }
    </script>
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        thead tr th {
            position: sticky;
            top: 0;
            z-index: 10;
            background-color: #ffffff;
        }

        .table-responsive {
            height: 100%;
            overflow: scroll;
        }

        .tg {

            border-color: #000000;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            vertical-align: center;
        }
    </style>
</head>

<body>
    <script scr="js\bootstrap.bundle.min.js"></script>
    <?php
    include("conexion.php");
    $sql = "SELECT * FROM `zonas`;";
    $resultado = mysqli_query($conexion, $sql);
    ?>
    <h2 class="text-center">LISTADO DE PRUEBAS</h2>
    <div class="col-auto">
        <a href="agregar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i
                class="fa-solid fa-circle-plus"></i>
            AGREGAR
            PRUEBA
        </a>
    </div><br><br>
    <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th class="header tg" scope="col">PIEZA</th>
                    <th class="header tg" scope="col">COLADA</th>
                    <th class="header tg" scope="col">DUEÑO</th>
                    <th class="header tg" scope="col">AREA</th>
                    <th class="header tg" scope="col">DETALLE</th>
                    <th class="header tg" scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($filas = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <tr>
                        <td class="tg" rowspan="8">
                            <?php echo $filas['pieza'] ?>
                        </td>
                        <td class="tg" rowspan="8">
                            <?php echo $filas['colada'] ?>
                        </td>
                        <td class="tg" rowspan="8">
                            <?php echo $filas['dueno'] ?>
                        </td>
                        <td>ALMAS</td>
                        <td>
                            <?php echo $filas['almas'] ?>
                        </td>
                        <td class="tg" rowspan="8">
                            <?php echo "<a href='editar.php?id=" . $filas['id'] . "' class='btn btn-sn btn-warning'><i class='fa-regular fa-pen-to-square'></i>EDITAR</a>"; ?><br><br>

                            <?php echo "<a href='eliminar.php?id=" . $filas['id'] . "' class='btn btn-sn btn-warning' onclick='return confirmar()'><i class='fa-solid fa-trash-can'></i>ELIMINAR</a>"; ?>
                        </td>

                    </tr>

                    <tr>
                        <td>MOLDEO</td>
                        <td>
                            <?php echo $filas['moldeo'] ?>
                        </td>

                    </tr>

                    <tr>
                        <td>FUSION</td>
                        <td>
                            <?php echo $filas['fusion'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>FLOGGY</td>
                        <td>
                            <?php echo $filas['floggy'] ?>
                        </td>

                    </tr>

                    <tr>
                        <td>T.T.</td>
                        <td>
                            <?php echo $filas['tratamientos'] ?>
                        </td>

                    </tr>

                    <tr>
                        <td>INSPECCION</td>
                        <td>
                            <?php echo $filas['inspeccion'] ?>
                        </td>

                    </tr>

                    <tr>
                        <td>FINISHING</td>
                        <td>
                            <?php echo $filas['finishing'] ?>
                        </td>

                    </tr>

                    <tr>
                        <td>SCANNER</td>
                        <td>
                            <?php echo $filas['cmm'] ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    mysqli_close($conexion);
    ?>
</body>

</html>