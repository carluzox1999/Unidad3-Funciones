<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Actividad D</title>
</head>

<body>
    <script type="text/javascript">
        function informacion(nombre, localidad = "LAS PALMAS DE G.C", valor = 100) {
            document.getElementById("resultado").value = nombre + " " + localidad + " " + valor;
        }
    </script>


    <h1>Parámetros por defecto</h1>
    <div>
        <p>Pulse la opción deseada y observe los resultados</p>
        <p>Información: <input type="text" id="resultado" value="" size="30" readonly disabled/></p>
        <p><input type="button" value="Informacion('Pepe','Madrid',23.45)" onclick="informacion('Pepe','Madrid',23.45);" /></p>
        <p><input type="button" value="Informacion('Pepe','Madrid')" onclick="informacion('Pepe','Madrid');" /></p>
        <p><input type="button" value="Informacion('Pepe')" onclick="informacion('Pepe');" /></p>
    </div>

    <script src="./JS/bootstrap.min.js"></script>
</body>

</html>