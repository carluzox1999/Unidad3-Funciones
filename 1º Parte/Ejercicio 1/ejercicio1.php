<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <script type="text/javascript">
        function getResult() {
            //Capturar resultado
            let result = prompt("Introduce el resultado de la operación");
            //Verificar resultado
            return checkResult(result);
        }

        function checkResult(result) {
            //Comprobar si el resultado introducido es el correcto
            if (result == "5") {
                return true;
            }
            else {
                return false;
            }
        }

        function total(){
            if (getResult()) {
            alert("Correcto!");
            } else {
                alert("Incorrecto!");
            }
        }
        
    </script>

    <div class="container">
        <div class="p-2">
            <h6>
                <b>Ejercicio 1:</b> Realizar un programa que 
                solicite al usuario el resultado de una operación 
                aritmética dada. Utilizar dos funciones. La 
                primera captura el resultado introducido por el 
                usuario e invoca otra función que verifica si el 
                resultado es correcto. En esta segunda función 
                utilizaremos return para devolver el resultado.
            </h6>
        </div>
        <div class="p-2 d-flex justify-content-center">
            <input type="button" onclick="total()" value="Activar Función">
        </div>
        

    </div>
    

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>