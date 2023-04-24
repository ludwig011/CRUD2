var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

$(".btn-danger").on("click", function () {
    modal2.style.display = "block";
    // console.log(this.parentElement.parentElement);
    var currentRow = $(this).closest("tr");

    const pieza = currentRow.find("td:eq(0)").text().replace(/\s/g, "");
    const colada = currentRow.find("td:eq(1)").text().replace(/\s/g, "");
    const dueno = currentRow.find("td:eq(2)").text().replace(/\s/g, "");
    const almas = currentRow.find("td:eq(3)").text().replace(/\s/g, "");
    const almas_detalle = currentRow.find("td:eq(5)").text().replace(/\s/g, "");

    document.getElementById("pieza").value = pieza;
    document.getElementById("colada").value = colada;
    document.getElementById("dueno").value = dueno;
    document.getElementById("almas").value = almas;

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

$(document).ready(function () {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function () {
        const array = JSON.parse(this.response);

        for (let index = 0; index < array.length; index++) {
            const element = array[index];
            const pieza = element['pieza'];
            const colada = element['colada'];
            const dueno = element['dueno'];

            console.log(element);

            const card = '<div class="card">' +
                '<table class="table-sm table-hover table-striped table-dark">' +
                '<tbody>' +

                '<tr>' +
                '<th class="header tg" scope="col">Pieza</th>' +
                '<th class="header tg" scope="col">Colada</th>' +
                '<th class="header tg" scope="col">Dueño</th>' +
                '<th class="header tg" scope="col">Área</th>' +
                '<th class="header tg" scope="col">Detalle</th>' +
                '<th class="header tg" scope="col">Acción</th>' +
                '</tr>' +

                '<tr>' +
                '<td class="tg" rowspan="8">' + pieza + '</td>' +
                '<td class="tg" rowspan="8">' + colada + '</td>' +
                '<td class="tg" rowspan="8">' + dueno + '</td>' +
                '<td>ALMAS</td><td></td><td class="tg" rowspan="8">' +
                '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">Modificar</button><a href="eliminar.php?id=" class="btn btn-warning" onclick="return confirmar()"><i class="fa-solid fa-trash-can"></i>ELIMINAR</a></td></tr><tr><td>MOLDEO</td><td></td></tr><tr><td>FUSION</td><td></td></tr><tr><td>FLOGGY</td><td></td></tr><tr><td>T.T.</td><td></td></tr><tr><td>INSPECCION</td><td></td></tr><tr><td>FINISHING</td><td></td></tr><tr><td>SCANNER</td><td></td></tr></tbody></table></div>';

            const cardContainer = document.getElementById("cardContainer");
            cardContainer.innerHTML += (card);

        }


    }

    xhttp.open("GET", "http://localhost/crud2/src/php/getAllZonas.php", true);
    xhttp.send();
})