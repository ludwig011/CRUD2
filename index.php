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
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .table-responsive {
            height: 100%;
            overflow: scroll;
        }

        .tg {


            font-size: 22px;
            font-weight: bold;
            text-align: center;
            vertical-align: center;
        }

        .container {
            width: auto;
            max-width: auto;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            overflow: hidden;
        }

        .container .card {

            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            margin: 10px;
            text-align: center;
            transition: all 0.25s;
            float: left;
        }

        .container .card:hover {
            transform: translate(-15px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
    <script scr="js\bootstrap.bundle.min.js"></script>
</head>

<body>
    <h2 class="text-center">LISTADO DE PRUEBAS</h2><br>
    <div class="col-auto">
        <a href="agregar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i
                class="fa-solid fa-circle-plus"></i>
            AGREGAR
            PRUEBA
        </a>
    </div>
    <div class="container">
        <?php
        include("conexion.php");
        $sql = "SELECT * FROM `zonas`;";
        $resultado = mysqli_query($conexion, $sql);
        while ($filas = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="card">
                <table class="table-sm table-hover table-striped table-dark">
                    <tbody>
                        <tr>
                            <th class="header tg" scope="col">Pieza</th>
                            <th class="header tg" scope="col">Colada</th>
                            <th class="header tg" scope="col">Dueño</th>
                            <th class="header tg" scope="col">Área</th>
                            <th class="header tg" scope="col">Detalle</th>
                            <th class="header tg" scope="col">Acción</th>
                        </tr>
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
                                <?php echo "<a href='editar.php?id=" . $filas['id'] . "' class='btn btn-warning'><i class='fa-regular fa-pen-to-square'></i>EDITAR</a>"; ?><br><br>

                                <?php echo "<a href='eliminar.php?id=" . $filas['id'] . "' class='btn btn-warning' onclick='return confirmar()'><i class='fa-solid fa-trash-can'></i>ELIMINAR</a>"; ?>
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
                    </tbody>
                </table>
            </div>

            <?php
        }
        ?>
    </div>
    <?php
    mysqli_close($conexion);
    ?>


</body>


</html>