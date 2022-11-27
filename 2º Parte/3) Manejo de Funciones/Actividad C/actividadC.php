<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Actividad C</title>
</head>

<body>
    <script type="text/javascript">
        function suma(nums) {
            let resultNums = 0;
            let numeros = nums.split(",").map(Number);
            for (let i = 0; i < numeros.length; i++) {
                resultNums += numeros[i];
            }
            document.getElementById("resultNums").value = resultNums;
        }

        function accion_suma() {
            let sumaError = document.getElementById("sumaError");
            sumaError.innerText = "";
            document.getElementById("resultNums").value = "";

            let nums = document.getElementById("nums").value;
            
            if (isNaN(document.getElementById("nums").value)) {
                document.getElementById("sumaError").innerHTML = "Error, debes introducir numeros";
            } else{
                document.getElementById("sumaError").innerHTML = "";
            }

            suma(nums);
        }
    </script>

    <h1>Paso de parámetros por valor y por referencia</h1>
    <div>
        <p>Por referencia los argumentos tienen que ser objetos:</p>
        <p>Números: <input type="text" id="nums" /></p>
        <p>Suma: <input type="text" id="resultNums" disabled/></p>
        <p><input type="button" value="Intencambiar por valor" onclick="accion_suma();" /></p>
        <p id="sumaError"></p>
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>

</html>