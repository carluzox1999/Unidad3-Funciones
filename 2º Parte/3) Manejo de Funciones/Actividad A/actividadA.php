<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Actividad A</title>
</head>

<body>
    <script type="text/javascript">
        function factorial(num) {
            let total = 1;
            for (i = 1; i <= num; i++) {
                total = total * i;
            }
            return total;
        }

        function calcular() {
            var num = document.getElementById("num").value;
            var resultado = factorial(num);
            document.getElementById("resultado").value = resultado;
        }
    </script>

    <h1>Factorial</h1>
    <div>
        <p>Introduce un número y se calculará su factorial:</p>
        <p>Número: <input type="text" id="num" /></p>
        <p><input type="button" value="Calcular" onclick="calcular();" /></p>
        <p>Resultado: <input type="text" id="resultado" readonly /></p>
    </div>




    <script src="./JS/bootstrap.min.js"></script>
</body>

</html>