<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Moneda</title>
</head>

<body>
    <style>
        @keyframes rotar {
            0% {
                transform: rotateY(0);
            }

            100% {
                transform: rotateY(2160deg);
            }
        }
    </style>

    <script type="text/javascript">
        // Moneda
        let cara = 0;
        let cruz = 0;

        function actualizarConteoMoneda(cara, cruz) {
            setTimeout(function () {
                document.getElementById("cont-cara").innerText = "Cara: " + cara;
                document.getElementById("cont-cruz").innerText = "Cruz: " + cruz;
            }, 3000);
        }

        function botonLanzar() {
            setTimeout(function () {
                btn.disabled = false;
            }, 3000);
        }

        function lanzarMoneda() {
            let resultado = Math.floor(Math.random() * 2);
            let moneda = document.getElementById("moneda");
            moneda.style.animation = "none";

            if (resultado == 0) {
                cara++;
                setTimeout(function () {
                    document.getElementById("moneda").src = "./IMG/moenda-cara.png";
                }, 2300);
            } else {
                cruz++;
                setTimeout(function () {
                    document.getElementById("moneda").src = "./IMG/moenda-cruz.png";
                }, 2300);
            }
            setTimeout(function () {
                moneda.style.animation = "rotar 3s forwards";
            }, 100);

            botonLanzar();
            actualizarConteoMoneda(cara, cruz);
        }
    </script>

    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="text-center">CARA / CRUZ</h1>
        </div>

        <div class='btn-group gap-0 d-md-flex justify-content-end' role='group'>
            <button id="btn_lanzar" class="btn btn-primary" onclick="lanzarMoneda()">Lanzar</button>
            <button class="btn btn-primary" onClick="window.location.reload();">Refrescar Página</button>
        </div>

        <div class="d-flex justify-content-center">
            <div id="moneda" class="col-4">
                <img id="moneda" alt="moneda" src="./IMG/moenda-cara.png" />
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <div class="row">
                <p id="cont-cara" class="bg-light rounded">
                    Cara: 0
                </p>
                <p id="cont-cruz" class="bg-light rounded">
                    Cruz: 0
                </p>
            </div>

        </div>
    </div>

    <script src="./JS/bootstrap.bundle.js"></script>
</body>
</html>