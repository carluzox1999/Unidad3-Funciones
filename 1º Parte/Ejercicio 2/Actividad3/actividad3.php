<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Actividad 3</title>
</head>
<body>
    <p>
        <b>Actividad 3:</b> Añada las funciones 
        <b>alert()</b> adecuadas al siguiente código, 
        de manera que pueda ver el valor en la variable 
        <b>result</b>, antes y después de la llamada a 
        la función.
    </p>
    <script>
        function addNumbers() {
            let firstNum = 4;
            let secondNum = 8;
            let result = firstNum + secondNum;
            return result;
        }

        function resultadoNormal(){
            result = 0;
            alert(result);
        }
        
        function resultadoSuma(){
            let sum = addNumbers();
            alert(sum);
        }
    </script>

    <input type="button" onclick="resultadoNormal()" value="Activar Función Resultado Normal">
    <br>
    <br>
    <input type="button" onclick="resultadoSuma()" value="Activar Función Resultado Suma">

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>