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
        // function sumar(...datos) {
        //     return [].slice.call(datos).reduce(
        //         function (memo, current) {
        //         return memo + current;
        //         }, 
        //     0);
        // };

        // function realizarSuma(){
        //     let datos = document.getElementById("datos").value;
        //     let resultado = sumar(datos);
        //     document.getElementById("resultado").value = resultado;
        // }
    </script>

    <h1>Número de argumentos variables</h1>
    <div>
        <p>Introduce los números que desea sumar separados por comas:</p>
        <p>Números: <input type="text" id="datos" /></p>
        <p><input type="button" value="Realizar la suma" onclick="realizarSuma();" /></p>
        <p>Suma: <input type="text" id="resultado" readonly /></p>
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>

</html>