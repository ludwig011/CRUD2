var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
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

$(document).ready(function () {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function () {
        const array = JSON.parse(this.response);

        for (let index = 0; index < array.length; index++) {

            const element = array[index];
            const ID = element['id'];
            const pieza = element['pieza'];
            const colada = element['colada'];
            const dueno = element['dueno'];
            const almas = element['almas'];
            const moldeo = element['moldeo'];
            const fusion = element['fusion'];
            const floggy = element['floggy'];
            const tratamientos = element['tratamientos'];
            const inspeccion = element['inspeccion'];
            const finishing = element['finishing'];
            const scanner = element['cmm'];
            const modificar = element['id'];
            const eliminar = element['id'];

            const card = '<div id="' + ID + '" class="card">' +
                '<table class="table-sm table-hover table-striped table-dark">' +
                '<tbody>' +

                // table row
                '<tr>' +
                '<th class="header tg" scope="col">Pieza</th>' +
                '<th class="header tg" scope="col">Colada</th>' +
                '<th class="header tg" scope="col">Dueño</th>' +
                '<th class="header tg" scope="col">Área</th>' +
                '<th class="header tg" scope="col">Detalle</th>' +
                '<th class="header tg" scope="col">Acción</th>' +
                '</tr>' +

                // table row
                '<tr>' +
                '<td class="tg" rowspan="8">' + pieza + '</td>' +
                '<td class="tg" rowspan="8">' + colada + '</td>' +
                '<td class="tg" rowspan="8">' + dueno + '</td>' +
                '<td>ALMAS</td><td>' + almas + '</td>' +

                //Botones modificar y eliminar
                '<td class="tg" rowspan="8">' +
                '<button onclick="modificarCard(' + modificar + ');" type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">Modificar</button>' +
                '<a onclick="eliminarCard(' + eliminar + ');" class="btn btn-warning" ><i class="fa-solid fa-trash-can"></i>ELIMINAR</a>' +
                '</td>' +
                '</tr>' +

                // table row
                '<tr><td>MOLDEO</td><td>' + moldeo + '</td></tr>' +
                // table row
                '<tr><td>FUSION</td><td>' + fusion + '</td></tr>' +
                // table row
                '<tr><td>FLOGGY</td><td>' + floggy + '</td></tr>' +
                // table row
                '<tr><td>T.T.</td><td>' + tratamientos + '</td></tr>' +
                // table row
                '<tr><td>INSPECCION</td><td>' + inspeccion + '</td></tr>' +
                // table row
                '<tr><td>FINISHING</td><td>' + finishing + '</td></tr>' +
                // table row
                '<tr><td>SCANNER</td><td>' + scanner + '</td></tr>' +

                '</tbody>' +
                '</table>' +
                '</div>';

            document.getElementById("cardContainer").innerHTML += (card);

        }

    }

    xhttp.open("GET", "http://localhost/crud2/src/php/getAllZonas.php", true);
    xhttp.send();
})

function modificarCard(params) {
    const card = document.getElementById(params);
    const array = (card.getElementsByTagName("tr"));

    for (let index = 0; index < array.length; index++) {
        const element = array[index].cells;
        const row = index;

        for (let index = 0; index < element.length; index++) {

            if (row === 1) {
                pieza = element[0].innerHTML;
                colada = element[1].innerHTML;
                dueno = element[2].innerHTML;
                almas = element[4].innerHTML;
            }

            if (row === 2) {
                moldeo = element[1].innerHTML;
            }

            if (row === 3) {
                fusion = element[1].innerHTML;
            }

            if (row === 4) {
                floggy = element[1].innerHTML;
            }

            if (row === 5) {
                tratamientos = element[1].innerHTML;
            }

            if (row === 6) {
                inspeccion = element[1].innerHTML;
            }

            if (row === 7) {
                finishing = element[1].innerHTML;
            }

            if (row === 8) {
                cmm = element[1].innerHTML;
            }

        }
    }

    modal2.style.display = "block";

    document.getElementById("id").value = card.id;
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

}

function eliminarCard(params) {
    console.log(params);
}