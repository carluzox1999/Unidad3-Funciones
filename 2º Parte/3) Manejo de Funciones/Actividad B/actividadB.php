<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Actividad B</title>
</head>

<body>
    <script type="text/javascript">

        function intercambiar(numero1, numero2){
            let aux = numero1;
            numero1 = numero2;
            numero2 = aux;
        }

        function calcularI() {
            let num1 = document.getElementById("num1").value;
            let num2 = document.getElementById("num2").value;
            let resultado = intercambiar(num1, num2);
            document.getElementById("num1").value = num2;
            document.getElementById("num2").value = num1;
        }

        function intercambiarReferencia(numero1, numero2){
            let aux = numero1;
            numero1 = numero2;
            numero2 = aux;
        }

        function calcularIR() {
            let num1 = document.getElementById("num1").value;
            let num2 = document.getElementById("num2").value;
            let resultado = intercambiarReferencia(num1, num2);
            document.getElementById("num1").value = num2;
            document.getElementById("num2").value = num1;
        }
    </script>

    <h1>Paso de parámetros por valor y por referencia</h1>
    <div>
        <p>Por referencia los argumentos tienen que ser objetos:</p>
        <p>Número1: <input type="text" id="num1" /></p>
        <p>Número2: <input type="text" id="num2" /></p>
        <p><input type="button" value="Intencambiar por valor" onclick="calcularI();" /></p>
        <p><input type="button" value="Intencambiar por referencia" onclick="calcularIR();" /></p>
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>

</html>