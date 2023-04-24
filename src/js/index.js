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
        const response = JSON.parse(this.response);
        console.log(response);
        console.log(typeof response);
    }

    xhttp.open("GET", "http://localhost/crud2/src/php/getAllZonas.php", true);
    xhttp.send();
})