<html>
<!-- Hola Luis -->
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
    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-color: #93a1a1;
            border-spacing: 0;
        }

        .tg td {
            background-color: #fdf6e3;
            border-color: #93a1a1;
            border-style: solid;
            border-width: 1px;
            color: #002b36;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 4px 20px;
            word-break: normal;
        }

        .tg th {
            background-color: #657b83;
            border-color: #93a1a1;
            border-style: solid;
            border-width: 1px;
            color: #fdf6e3;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 4px 20px;
            word-break: normal;
        }

        .tg .tg-fhn1 {
            background-color: #eee8d5;
            border-color: #000000;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-p5uh {
            border-color: #000000;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            vertical-align: middle
        }

        .tg .tg-2xs2 {
            background-color: #f56b00;
            border-color: inherit;
            text-align: center;
            vertical-align: middle
        }

        .tg .tg-zkvm {
            background-color: #eee8d5;
            border-color: #000000;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-wp8o {
            border-color: #000000;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-m1cc {
            background-color: #eee8d5;
            border-color: #000000;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            vertical-align: middle
        }

        .tg .tg-mqa1 {
            border-color: #000000;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-mcqj {
            border-color: #000000;
            font-weight: bold;
            text-align: left;
            vertical-align: top
        }

        .tg .tg-73oq {
            border-color: #000000;
            text-align: left;
            vertical-align: top
        }
    </style>
</head>

<body>

    <?php
    include("conexion.php");
    $sql = "SELECT * FROM `zonas`;";
    $resultado = mysqli_query($conexion, $sql);
    ?>
    <h1>LISTADO DE PRUEBAS</h1>
    <a href="agregar.php">AGREGAR PRUEBA</a><br><br>
    <table class="tg">
        <thead>
            <tr>
                <td class="tg-p5uh">PIEZA</td>
                <td class="tg-p5uh">COLADA</td>
                <td class="tg-p5uh">DUENO</td>
                <td class="tg-p5uh">AREA</td>
                <td class="tg-p5uh">DETALLE</td>
                <td class="tg-p5uh">RESPUESTA</td>
            </tr>
        </thead>
        <?php
        while ($filas = mysqli_fetch_assoc($resultado)) {

            ?>
            <tbody>
                <tr>
                    <td class="tg-m1cc" rowspan="8">
                        <?php echo $filas['pieza'] ?>
                    </td>
                    <td class="tg-m1cc" rowspan="8">
                        <?php echo $filas['colada'] ?>
                    </td>
                    <td class="tg-m1cc" rowspan="8">
                        <?php echo $filas['dueno'] ?>
                    </td>
                    <td class="tg-fhn1">ALMAS</td>
                    <td class="tg-zkvm">
                        <?php echo $filas['almas'] ?>
                    </td>
                    <td class="tg-zkvm">But if you want your page to remain</td>
                </tr>
                <tr>
                    <td class="tg-mqa1">MOLDEO</td>
                    <td class="tg-wp8o">
                        <?php echo $filas['moldeo'] ?>
                    </td>
                    <td class="tg-wp8o">But if you want your page to remain</td>
                </tr>
                <tr>
                    <td class="tg-fhn1">FUSION</td>
                    <td class="tg-zkvm">
                        <?php echo $filas['fusion'] ?>
                    </td>
                    <td class="tg-zkvm">But if you want your page to remain</td>
                </tr>
                <tr>
                    <td class="tg-mqa1">FLOGGY</td>
                    <td class="tg-wp8o">
                        <?php echo $filas['floggy'] ?>
                    </td>
                    <td class="tg-wp8o">But if you want your page to remain</td>
                </tr>
                <tr>
                    <td class="tg-fhn1">T.T.</td>
                    <td class="tg-zkvm">
                        <?php echo $filas['tratamientos'] ?>
                    </td>
                    <td class="tg-zkvm">But if you want your page to remain</td>
                </tr>
                <tr>
                    <td class="tg-mqa1">INSPECCION</td>
                    <td class="tg-wp8o">
                        <?php echo $filas['inspeccion'] ?>
                    </td>
                    <td class="tg-wp8o">But if you want your page to remain</td>
                </tr>
                <tr>
                    <td class="tg-fhn1">FINISHING</td>
                    <td class="tg-zkvm">
                        <?php echo $filas['finishing'] ?>
                    </td>
                    <td class="tg-zkvm">But if you want your page to remain</td>
                </tr>
                <tr>
                    <td class="tg-mqa1">SCANNER</td>
                    <td class="tg-wp8o">
                        <?php echo $filas['cmm'] ?>
                    </td>
                    <td class="tg-wp8o">But if you want your page to remain</td>

                </tr>
                <?php echo "<a href='editar.php?id=" . $filas['id'] . "'>EDITAR</a>"; ?><br>

                <?php echo "<a href='eliminar.php?id=" . $filas['id'] . "'
                        onclick='return confirmar()'>ELIMINAR</a>"; ?>
            </tbody>
        </table>
        <?php
        }
        ?>
    <?php
    mysqli_close($conexion);
    ?>
</body>

</html>