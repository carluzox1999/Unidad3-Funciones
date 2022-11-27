<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Piedra, Papel, Tijera</title>
</head>

<body>
    <style>
        @keyframes slide {
            0% {
                translate: 0;
            }

            5% {
                translate: -100%;
            }

            10% {
                translate: -200%;
            }

            15% {
                translate: -100%;
            }

            20% {
                translate: 0;
            }

            25% {
                translate: -100%;
            }

            30% {
                translate: -200%;
            }

            35% {
                translate: -100%;
            }

            40% {
                translate: 0;
            }

            45% {
                translate: -100%;
            }

            50% {
                translate: -200%;
            }

            55% {
                translate: -100%;
            }

            60% {
                translate: 0;
            }

            65% {
                translate: -100%;
            }

            70% {
                translate: -200%;
            }

            75% {
                translate: -100%;
            }

            80% {
                translate: 0;
            }

            85% {
                translate: -100%;
            }

            90% {
                translate: -200%;
            }

            95% {
                translate: -100%;
            }

            100% {
                translate: 0;
            }
        }
    </style>

    <script>
        let pGanadas = 0;
        let pPerdidas = 0;
        let pEmpatadas = 0;

        let ordenJuego = { piedra: 0, papel: 1, tijera: 2 };
        let eleccion = ["piedra", "papel", "tijera"];

        function selecBorrar() {
            document.getElementById("0").classList.remove("border-primary");
            document.getElementById("1").classList.remove("border-primary");
            document.getElementById("2").classList.remove("border-primary");
            document.getElementById("0").classList.add("border-dark");
            document.getElementById("1").classList.add("border-dark");
            document.getElementById("2").classList.add("border-dark");
        }

        function selectImage() {
            let move = document.querySelector('input[name="juego"]:checked');
            selecBorrar();
            document.getElementById(move.value).classList.remove("border-dark");
            document.getElementById(move.value).classList.add("border-primary");
        }

        function ordenSelect() {
            setTimeout(function () {
                document.getElementById("maquina2").classList.remove("order-first");
                document.getElementById("maquina1").classList.remove("order-first");
                document.getElementById("maquina0").classList.remove("order-first");
            }, 1000);
        }

        function comprobarResultado(respuestaM) {
            let move = document.querySelector('input[name="juego"]:checked').value;
            if (move == respuestaM) {
                pEmpatadas++;
            }

            // Si gana piedra
            else if (move == ordenJuego["piedra"]) {
                if (respuestaM == ordenJuego["tijera"]) {
                    pGanadas++;
                } else {
                    pPerdidas++;
                }
            }

            // Si gana papel
            else if (move == ordenJuego["papel"]) {
                if (respuestaM == ordenJuego["piedra"]) {
                    pGanadas++;
                } else {
                    pPerdidas++;
                }
            }

            // Si gana tijera
            else if (move == ordenJuego["tijera"]) {
                if (respuestaM == ordenJuego["papel"]) {
                    pGanadas++;
                } else {
                    pPerdidas++;
                }
            }

            setTimeout(function () {
                document.getElementById("contUsuario").innerText = pGanadas;
                document.getElementById("contMaquina").innerText = pPerdidas;
                document.getElementById("contEmpate").innerText = pEmpatadas;
            }, 2100);
        }

        function juego() {
            let respuestaM = Math.floor(Math.random() * 3);
            let movimientoM = document.getElementById("movimientoM");
            ordenSelect();
            movimientoM.style.animation = "none";
            setTimeout(function () {
                movimientoM.style.animation = "slide 2s ease-out";
            }, 100);
            setTimeout(function () {
                // Seleccionando el elemento que de por respuesta de maquina, añade la clase de lista orden-first
                document.getElementById("maquina" + respuestaM).classList.add("order-first");
            }, 1000);
            comprobarResultado(respuestaM);
        }
    </script>

    <div class="container p-5">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="text-center">
                Piedra, papel y tijera
            </h1>
        </div>
        <div class="d-flex justify-content-center">
            <h6 class="fs-5 mx-3 p-2">
                Usuario: <b id="contUsuario">0</b>
            </h6>
            <h6 class="fs-5 mx-3 p-2">
                Máquina: <b id="contMaquina">0</b>
            </h6>
            <h6 class="fs-5 mx-3 p-2">
                Empate: <b id="contEmpate">0</b>
            </h6>
        </div>
        <div class="p-2 col-1 d-block mx-auto overflow-hidden">
        <div id="movimientoM" class="d-flex">
          <img
            id="maquina0"
            alt="maquina"
            src="./IMG/piedra.png"
            class="img-fluid border border-2 mx-2"
          />
          <img
            id="maquina1"
            alt="maquina"
            src="./IMG/papel.png"
            class="img-fluid border border-2 mx-2"
          />
          <img
            id="maquina2"
            alt="maquina"
            src="./IMG/tijera.png"
            class="img-fluid border border-2 mx-2"
          />
        </div>
      </div>
        <h6 class="col-8 mx-auto p-3 text-center bg-light rounded-bottom">
            Elige tu movimiento
        </h6>
        <div class="col-8 mx-auto bg-light p-3 d-flex justify-content-center">
            <!-- Eliguiendo piedra -->
            <div class="col-2 mx-3 d-flex flex-column">
                <label for="piedra"><img id="0" alt="piedra" src="./IMG/piedra.png"
                        class="img-fluid border border-3" /></label>
                <input type="radio" id="piedra" class="d-none" name="juego" value="0" onclick="selectImage()" />
            </div>
            <!-- Eliguiendo papel -->
            <div class="col-2 mx-3 d-flex flex-column">
                <label for="papel"><img id="1" alt="papel" src="./IMG/papel.png"
                        class="img-fluid border border-3" /></label>
                <input type="radio" id="papel" class="d-none" name="juego" value="1" onclick="selectImage()" />
            </div>
            <!-- Eliguiendo tijera -->
            <div class="col-2 mx-3 d-flex flex-column">
                <label for="tijera"><img alt="tijera" id="2" src="./IMG/tijera.png"
                        class="img-fluid border border-3" /></label>
                <input type="radio" id="tijera" class="d-none" name="juego" value="2" onclick="selectImage()" />
            </div>
        </div>
        
        <div class="mt-4 d-flex justify-content-center">
            <button id="btn_lanzar" class="mx-2 col-4 btn btn-success" onclick="juego()">
                Jugar
            </button>
        </div> 
    </div>
</body>

</html>