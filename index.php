<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBAS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    </script>
    <script type="text/javascript">
        function confirmar() {
            return confirm('Estas seguro? se eliminaran los datos');
        }</script>
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">


    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .titulo {
            text-align: left;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: Arial Black;
            font-weight: bold;
            font-size: 30px;
            color: black;
            text-shadow: 0 1px 0 #ddd, 0 2px 0 #ccc, 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 0 #acacac,
                0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3),
                0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2),
                0 20px 20px rgba(0, 0, 0, 0.15);
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

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
    <h2 class="titulo text-center">LISTADO DE PRUEBAS</h2><br>
    <div class="col-auto">

        <!-- Trigger/Open The Modal -->
        <button id="myBtn" class="btn-primary btn-lg active" role="button" aria-pressed="true"><i
                class="fa-solid fa-circle-plus"></i>AGREGAR PRUEBA</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>

                <?php
                if (isset($_POST['enviar'])) {
                    $pieza = $_POST['pieza'];
                    $colada = $_POST['colada'];
                    $dueno = $_POST['dueno'];
                    $almas = $_POST['almas'];
                    $moldeo = $_POST['moldeo'];
                    $fusion = $_POST['fusion'];
                    $floggy = $_POST['floggy'];
                    $tratamientos = $_POST['tratamientos'];
                    $inspeccion = $_POST['inspeccion'];
                    $finishing = $_POST['finishing'];
                    $cmm = $_POST['cmm'];

                    include("conexion.php");
                    $sql = "insert into zonas(pieza,colada,dueno,almas,moldeo,fusion,floggy,tratamientos,inspeccion,finishing,cmm) values( '" . $pieza . "', '" . $colada . "', '" . $dueno . "', '" . $almas . "', '" . $moldeo . "', '" . $fusion . "', '" . $floggy . "', '" . $tratamientos . "', '" . $inspeccion . "', '" . $finishing . "', '" . $cmm . "')";

                    $resultado = mysqli_query($conexion, $sql);

                    if ($resultado) {
                        echo "<script language='JavaScript'> alert('Los datos fueron ingresados correctamente a la BD'); location.assign('index.php'); </script>";
                    } else {
                        echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron ingresados correctamente a la BD'); location.assign('index.php'); </script>";
                    }
                    mysqli_close($conexion);

                } else {
                    ?>

                    <h1 class="titulo">AGREGAR NUEVA PRUEBA </h1>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <label> Pieza: </label>
                        <input type="varchar(100)" name="pieza"><br>
                        <label> colada: </label>
                        <input type="int(5)" name="colada"><br>
                        <label> dueno: </label>
                        <input type="text" name="dueno"><br>
                        <label> Almas: </label>
                        <input type="varchar(100)" name="almas"><br>
                        <label> Moldeo: </label>
                        <input type="varchar(100)" name="moldeo"><br>
                        <label> Fusion: </label>
                        <input type="varchar(100)" name="fusion"><br>
                        <label> Floggy: </label>
                        <input type="varchar(100)" name="floggy"><br>
                        <label> Tratamientos Termicos: </label>
                        <input type="varchar(100)" name="tratamientos"><br>
                        <label> Inspeccion: </label>
                        <input type="varchar(100)" name="inspeccion"><br>
                        <label> Finishing: </label>
                        <input type="varchar(100)" name="finishing"><br>
                        <label> CMM: </label>
                        <input type="varchar(100)" name="cmm"><br>
                        <input type="submit" name="enviar" value="AGREGAR">
                        <a href="index.php"> REGRESAR</a>
                    </form>
                    <?php
                }
                ?>

            </div>

        </div>

        <div id="myModal2" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>

                <h1 class="titulo">MODIFICAR DATOS</h1>

                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <label> Pieza: </label>
                    <input id="pieza" type="varchar(100)" name="pieza"><br>
                    <label> colada: </label>
                    <input id="colada" type="int(5)" name="colada"><br>
                    <label> dueno: </label>
                    <input id="dueno" type="text" name="dueno"><br>
                    <label> Almas: </label>
                    <input id="almas" type="varchar(100)" name="almas"><br>
                    <label> Moldeo: </label>
                    <input id="moldeo" type="varchar(100)" name="moldeo"><br>
                    <label> Fusion: </label>
                    <input id="fusion" type="varchar(100)" name="fusion"><br>
                    <label> Floggy: </label>
                    <input id="floggy" type="varchar(100)" name="floggy"><br>
                    <label> Tratamientos Termicos: </label>
                    <input id="tratamientos" type="varchar(100)" name="tratamientos"><br>
                    <label> Inspeccion: </label>
                    <input id="inspeccion" type="varchar(100)" name="inspeccion"><br>
                    <label> Finishing: </label>
                    <input id="finishing" type="varchar(100)" name="finishing"><br>
                    <label> CMM: </label>
                    <input id="cmm" type="varchar(100)" name="cmm"><br>
                    <input type="submit" name="enviar" value="AGREGAR">
                    <a href="index.php"> REGRESAR</a>
                </form>

            </div>
        </div>


    </div>
    <div class="container">
        <?php
        include("conexion.php");
        $sql = "SELECT * FROM `zonas`ORDER BY id DESC";
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



                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#staticBackdrop<?php echo $filas['id']; ?>">
                                    Modificar
                                </button>


                                <?php echo "<a href='eliminar.php?id=" . $filas['id'] . "' 
                                class='btn btn-warning' onclick='return confirmar()'><i class='fa-solid fa-trash-can'></i>ELIMINAR</a>"; ?>
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
                        <?php include('modaleditar.php'); ?>
                    </tbody>

                </table>

            </div>

            <?php
        }
        ?>

    </div>




</body>


</html>

<script>
    var modal = document.getElementById("myModal");
    var modal2 = document.getElementById("myModal2");

    $(".btn-danger").on("click", function () {
        modal2.style.display = "block";
        // console.log(this.parentElement.parentElement);
        var currentRow = $(this).closest("tr");

        const pieza = currentRow.find("td:eq(0)").text().replace(/\s/g, "");
        const colada = currentRow.find("td:eq(1)").text().replace(/\s/g, "");
        const dueno = currentRow.find("td:eq(2)").text().replace(/\s/g, "");
        const almas = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        const moldeo = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        const fusion = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        const floggy = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        const tratamientos = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        const inspeccion = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        const finishing = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        const cmm = currentRow.find("td:eq(4)").text().replace(/\s/g, "");
        
        document.getElementById("pieza").value = pieza;
        document.getElementById("colada").value = colada;
        document.getElementById("dueno").value = dueno;
        document.getElementById("almas").value = almas;
        document.getElementById("moldeo").value = moldeo;
        document.getElementById("fusion").value = fusion;
        document.getElementById("floggy").value = floggy;
        document.getElementById("tratamientos").value = tratamientos;
        document.getElementById("inspeccion").value = inspeccion;
        document.getElementById("finishing").value = finishing;
        document.getElementById("cmm").value = cmm;
    });

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
    var span1 = document.getElementsByClassName("close")[1];

    btn.onclick = function () {
        modal.style.display = "block";
    }


    span.onclick = function () {
        modal.style.display = "none";
    }

    span1.onclick = function () {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    //window.onclick = function (event) {
      //  if (event.target == modal) {
        //    modal.style.display = "none";
        //}
    //}

</script>