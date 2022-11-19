<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Actividad 1</title>
</head>
<body>
    <p>
        <b>Actividad 1:</b> Defina una función que acoja 
        un argumento numérico, que incremente ese 
        argumento y que después lo devuelva al emisor 
        de la llamada. Invoque esa función desde la sección
        <b>< body ></b> de una página  y muestre el 
        resultado en la pantalla.
    </p>
    <script type="text/javascript">
        function addOne() {
            let number = prompt("Introduce un número");
            let one = 1;
            let vsum = Number(number) + Number(one);
            document.write(vsum);
        }
    </script>
    <input type="button" onclick="addOne()" value="Activar Función">

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>