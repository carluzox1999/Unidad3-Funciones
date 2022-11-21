<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Juego</title>
</head>

<body>
    <style>
        body {
            background-color: #E0E0E0;
        }

        .form-group {
            text-align: center;
        }

        #jugar {
            width: 30%;
        }

        #resultado {
            margin-top: 30px;
        }
    </style>

    <script type="text/javascript">
        // let opciones = ["piedra", "papel", "tijera"];
        // let jugador = document.querySelectorAll("input[name=opciones]");
        // let boton = document.getElementById("jugar");
        // let resultado = document.getElementById("resultado");
        // let maquina = "";
        // let contador = 0;

        // boton.addEventListener("click", function() {
        // for (let i = 0; i < jugador.length; i++) {
        //     if (jugador[i].checked) {
        //     if (contador < 20) {
        //         contador++;
        //     } else {
        //         contador = 0;
        //         maquina = opciones[Math.floor(Math.random() * opciones.length)];
        //         resultado.innerHTML = "La máquina ha elegido " + maquina;
        //     }
        //     }
        // }
        // });
        document.getElementById("boton").addEventListener("click", function () {

            let eleccionUsuario = document.querySelector("input[name=eleccion]:checked").value;

            let eleccionMaquina = Math.floor(Math.random() * 3);

            switch (eleccionMaquina) {
                case 0:
                    eleccionMaquina = "piedra";
                    break;

                case 1:
                    eleccionMaquina = "papel";
                    break;

                case 2:
                    eleccionMaquina = "tijera";
                    break;
            }

            if (eleccionUsuario === eleccionMaquina) {
                alert("Empate");
            } else if (eleccionUsuario === "tijera" && eleccionMaquina === "papel") {
                alert("Ganas");

            } else if (eleccionUsuario === "tijera" && eleccionMaquina === "piedra") {
                alert("Pierdes");

            } else if (eleccionUsuario === "papel" && eleccionMaquina === "tijera") {
                alert("Pierdes");

            } else if (eleccionUsuario === "papel" && eleccionMaquina === "piedra") {
                alert("Ganas");

            } else if (eleccionUsuario === "piedra" && eleccionMaquina === "tijera") {
                alert("Ganas");

            } else if (eleccionUsuario === "piedra" && eleccionMaquina === "papel") {
                alert("Pierdes");
            }

        });
    </script>

    <div class="container">
        <!-- <div class="row">
                <div class="col-sm-6 form-group">
                    <h3>Usuario</h3>
                    <div class="form-group">
                        <label for="opciones">Selecciona una opción:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opciones"  value="piedra" checked>
                            <label class="form-check-label" for="opciones">Piedra</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opciones"  value="papel">
                            <label class="form-check-label" for="opciones">Papel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opciones"  value="tijera">
                            <label class="form-check-label" for="opciones">Tijera</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <h3>Máquina</h3>
                    <div class="form-group">
                        <label for="opciones">Selecciona una opción:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opciones"  value="piedra" checked>
                            <label class="form-check-label" for="opciones">Piedra</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opciones"  value="papel">
                            <label class="form-check-label" for="opciones">Papel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opciones"  value="tijera">
                            <label class="form-check-label" for="opciones">Tijera</label>
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-sm-12 form-group text-center">
                <button class="btn btn-success" id="jugar">¡Jugar!</button>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 form-group text-center">
                <h2 id="resultado">Resultado</h2>
            </div>
        </div>
    </div> -->
        <div class="container">
            <h1>Piedra papel y tijera</h1>
            <form action="juego.php" method="post">
                <div>
                    <label for="tijera">Tijera</label>
                    <input type="radio" id="tijera" name="eleccion" value="tijera">
                </div>
                <div>
                    <label for="papel">Papel</label>
                    <input type="radio" id="papel" name="eleccion" value="papel">
                </div>
                <div>
                    <label for="piedra">Piedra</label>
                    <input type="radio" id="piedra" name="eleccion" value="piedra">
                </div>
            </form>
            <br>

            <div class="imagenes">
                <img src="https://img.freepik.com/vector-gratis/pegatina-tijera-purpura-sobre-fondo-blanco_1308-61999.jpg?w=2000"
                    id="tijeraImg" width="10%">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Toiletpapier_%28Gobran111%29.jpg/1200px-Toiletpapier_%28Gobran111%29.jpg"
                    id="papelImg" width="10%">
                <img src="https://media.istockphoto.com/id/1288973456/es/foto/piedra-de-piedra-gris.jpg?s=612x612&w=0&k=20&c=P5-c3LzB_cXZI1uJ9S5ec2A77xI9qyMQX9U1JXG9fpE="
                    id="piedraImg" width="10%">
            </div>
            <br>
            <button id="boton" type="submit">Jugar</button>
        </div>

        <script src="./JS/bootstrap.min.js"></script>
</body>

</html>