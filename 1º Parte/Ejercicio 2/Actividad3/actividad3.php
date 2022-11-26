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
    <script type="text/javascript">
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

    <div class="container">
        <div class="p-2">
            <h6>
                <b>Actividad 3:</b> Añada las funciones 
                <b>alert()</b> adecuadas al siguiente código, 
                de manera que pueda ver el valor en la variable 
                <b>result</b>, antes y después de la llamada a 
                la función.
            </h6>
        </div>
        <div class="p-2 d-flex justify-content-center">
            <input type="button" onclick="resultadoNormal()" value="Activar Función Resultado Normal">
        
            <input type="button" onclick="resultadoSuma()" value="Activar Función Resultado Suma">
        </div>
    </div>
    
    

    

    <script src="./JS/bootstrap.min.js"></script>
</body>
</html>